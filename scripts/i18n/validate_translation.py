import argparse
import html
import json
import re
from dataclasses import dataclass
from pathlib import Path

try:
    from scripts.i18n.inventory import MEDIA_PATTERN, _html_structure
except ModuleNotFoundError:
    from inventory import MEDIA_PATTERN, _html_structure


ENGLISH_WORD_PATTERN = re.compile(
    r"(?<![A-Za-z0-9_])[A-Za-z][A-Za-z'-]+(?![A-Za-z0-9_])"
)
NON_VISIBLE_PATTERN = re.compile(
    r"<\?(?:php|=).*?(?:\?>|\Z)|<!--.*?-->|<(script|style)\b[^>]*>.*?</\1\s*>",
    re.IGNORECASE | re.DOTALL,
)
TAG_PATTERN = re.compile(r"<[^>]+>")
MARKUP_TAG_PATTERN = re.compile(
    r"<\s*([a-zA-Z][a-zA-Z0-9:-]*)\b([^>]*)>", re.DOTALL
)
ATTRIBUTE_PATTERN = re.compile(
    r'''([a-zA-Z_:][a-zA-Z0-9_:.-]*)\s*=\s*(?:"([^"]*)"|'([^']*)'|([^\s>]+))'''
)
PROTECTED_KEY_PATTERN = re.compile(
    r"(?:^|_)(?:id|slug|url|uri|path|link|video|icon|image|file|filename|date|key)s?$",
    re.IGNORECASE,
)
PROTECTED_DATA_FIELDS = {
    "attribute",
    "basename",
    "commander",
    "extra",
    "icon",
    "modifier",
    "modifiermode",
    "modifiertag",
    "modifierupgrade",
    "nameid",
    "operation",
    "operationtype",
    "race",
    "releasedate",
    "tags",
    "talenttype",
    "target",
    "type",
    "unit",
    "upgradetype",
    "version",
}


@dataclass(frozen=True)
class Issue:
    code: str
    path: str
    detail: str
    blocker: bool = True


def _media_urls(text: str) -> list[str]:
    return sorted(set(MEDIA_PATTERN.findall(text)))


def _contains_untranslated_text(text: str, allowlist: set[str]) -> bool:
    for allowed in sorted(allowlist, key=lambda value: (-len(value), value)):
        text = re.sub(
            rf"(?<![A-Za-z0-9_]){re.escape(allowed)}(?![A-Za-z0-9_])",
            " ",
            text,
        )
    return ENGLISH_WORD_PATTERN.search(text) is not None


def _visible_markup_text(text: str) -> str:
    text = NON_VISIBLE_PATTERN.sub(" ", text)
    text = TAG_PATTERN.sub(" ", text)
    return html.unescape(text)


def _visible_attribute_text(text: str) -> str:
    text = NON_VISIBLE_PATTERN.sub(" ", text)
    values: list[str] = []
    for tag_match in MARKUP_TAG_PATTERN.finditer(text):
        tag_name = tag_match.group(1).lower()
        attributes = {
            match.group(1).lower(): next(
                value for value in match.groups()[1:] if value is not None
            )
            for match in ATTRIBUTE_PATTERN.finditer(tag_match.group(2))
        }
        for attribute_name in ("alt", "title", "aria-label", "placeholder"):
            if attribute_name in attributes:
                values.append(attributes[attribute_name])
        if (
            tag_name == "input"
            and attributes.get("type", "").lower() in {"button", "reset", "submit"}
            and "value" in attributes
        ):
            values.append(attributes["value"])
    return " ".join(NON_VISIBLE_PATTERN.sub(" ", value) for value in values)


def _is_protected_key(key: str) -> bool:
    normalized = re.sub(r"(?<!^)(?=[A-Z])", "_", key).lower()
    compact = normalized.replace("_", "")
    return (
        compact in PROTECTED_DATA_FIELDS
        or normalized.endswith("id")
        or PROTECTED_KEY_PATTERN.search(normalized) is not None
    )


def _data_changes(original: object, current: object, key: str = "$") -> list[str]:
    if type(original) is not type(current):
        return [f"{key}: type changed"]
    if isinstance(original, dict):
        if set(original) != set(current):
            return [f"{key}: object keys changed"]
        changes: list[str] = []
        for child_key in sorted(original):
            original_value = original[child_key]
            current_value = current[child_key]
            child_path = f"{key}.{child_key}"
            if isinstance(original_value, str):
                if _is_protected_key(child_key) and original_value != current_value:
                    changes.append(f"{child_path}: protected value changed")
            else:
                changes.extend(_data_changes(original_value, current_value, child_path))
        return changes
    if isinstance(original, list):
        if len(original) != len(current):
            return [f"{key}: array length changed"]
        changes: list[str] = []
        for index, (original_value, current_value) in enumerate(zip(original, current)):
            changes.extend(_data_changes(original_value, current_value, f"{key}[{index}]"))
        return changes
    if isinstance(original, str):
        return []
    if original != current:
        return [f"{key}: value changed from {original!r} to {current!r}"]
    return []


def _data_strings(data: object, key: str = "") -> list[str]:
    if isinstance(data, dict):
        values: list[str] = []
        for child_key, child_value in data.items():
            if isinstance(child_value, str):
                if not _is_protected_key(child_key):
                    values.append(
                        " ".join(
                            (
                                _visible_markup_text(child_value),
                                _visible_attribute_text(child_value),
                            )
                        )
                    )
            else:
                values.extend(_data_strings(child_value, child_key))
        return values
    if isinstance(data, list):
        values: list[str] = []
        for item in data:
            values.extend(_data_strings(item, key))
        return values
    return []


def validate_tree(root: Path, baseline: dict, allowlist: set[str]) -> list[Issue]:
    root = Path(root)
    translated_paths = baseline.get("translated_paths")
    translated = set(translated_paths) if translated_paths is not None else None
    issues: list[Issue] = []
    for snapshot in baseline.get("files", []):
        relative_path = snapshot["path"]
        source_path = root / relative_path
        if not source_path.is_file():
            issues.append(Issue("FILE_MISSING", relative_path, "File does not exist"))
            continue
        text = source_path.read_text(encoding="utf-8")
        current_media = _media_urls(text)
        if current_media != snapshot.get("media_urls", []):
            issues.append(
                Issue(
                    "MEDIA_URL_CHANGED",
                    relative_path,
                    "Media URL set differs from baseline",
                )
            )
        check_completion = translated is None or relative_path in translated
        if "data" in snapshot:
            try:
                current_data = json.loads(text)
            except json.JSONDecodeError as error:
                issues.append(Issue("DATA_ID_CHANGED", relative_path, str(error)))
                continue
            changes = _data_changes(snapshot["data"], current_data)
            if changes:
                issues.append(
                    Issue("DATA_ID_CHANGED", relative_path, "; ".join(changes[:5]))
                )
            if check_completion and any(
                _contains_untranslated_text(value, allowlist)
                for value in _data_strings(current_data)
            ):
                issues.append(
                    Issue(
                        "UNTRANSLATED_TEXT",
                        relative_path,
                        "Visible JSON text contains an English phrase",
                    )
                )
        else:
            if _html_structure(text) != snapshot.get("html_structure", []):
                issues.append(
                    Issue(
                        "HTML_STRUCTURE_CHANGED",
                        relative_path,
                        "HTML tag sequence differs from baseline",
                    )
                )
            visible_text = " ".join(
                (_visible_markup_text(text), _visible_attribute_text(text))
            )
            if check_completion and _contains_untranslated_text(
                visible_text, allowlist
            ):
                issues.append(
                    Issue(
                        "UNTRANSLATED_TEXT",
                        relative_path,
                        "Visible markup text contains an English phrase",
                    )
                )
    return sorted(issues, key=lambda issue: (issue.path, issue.code, issue.detail))


def _write_report(
    path: Path, manifest_files: list[dict], domains: set[str] | None, issues: list[Issue]
) -> None:
    selected = [
        entry
        for entry in manifest_files
        if domains is None or entry["domain"] in domains
    ]
    translated = [entry for entry in selected if entry["status"] == "translated"]
    pending = [entry for entry in selected if entry["status"] != "translated"]
    lines = [
        "# Translation Report",
        "",
        "## Coverage",
        "",
        f"- Translated: {len(translated)}/{len(selected)}",
        f"- Pending: {len(pending)}",
    ]
    for domain in sorted({entry["domain"] for entry in selected}):
        domain_files = [entry for entry in selected if entry["domain"] == domain]
        domain_translated = [
            entry for entry in domain_files if entry["status"] == "translated"
        ]
        lines.append(
            f"- {domain}: {len(domain_translated)}/{len(domain_files)} translated"
        )
    lines.extend(["", "## Pending Files", ""])
    if pending:
        lines.extend(f"- `{entry['path']}`" for entry in pending)
    else:
        lines.append("No pending files.")
    lines.extend(["", "## Issues", ""])
    if issues:
        lines.extend(
            f"- **{issue.code}** `{issue.path}`: {issue.detail}"
            for issue in issues
        )
    else:
        lines.append("No issues.")
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text("\n".join(lines) + "\n", encoding="utf-8")


def main() -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--root", type=Path, required=True)
    parser.add_argument("--baseline", type=Path, required=True)
    parser.add_argument("--manifest", type=Path, required=True)
    parser.add_argument("--allowlist", type=Path, required=True)
    parser.add_argument("--domains")
    parser.add_argument("--report", type=Path, required=True)
    arguments = parser.parse_args()

    baseline = json.loads(arguments.baseline.read_text(encoding="utf-8"))
    manifest = json.loads(arguments.manifest.read_text(encoding="utf-8"))
    allowlist = {
        line.strip()
        for line in arguments.allowlist.read_text(encoding="utf-8").splitlines()
        if line.strip()
    }
    domains = (
        {domain.strip() for domain in arguments.domains.split(",") if domain.strip()}
        if arguments.domains
        else None
    )
    selected_entries = [
        entry
        for entry in manifest.get("files", [])
        if domains is None or entry["domain"] in domains
    ]
    selected_paths = {entry["path"] for entry in selected_entries}
    validation_baseline = dict(baseline)
    validation_baseline["files"] = [
        snapshot
        for snapshot in baseline.get("files", [])
        if snapshot["path"] in selected_paths
    ]
    validation_baseline["translated_paths"] = [
        entry["path"]
        for entry in selected_entries
        if entry["status"] == "translated"
    ]
    issues = validate_tree(arguments.root, validation_baseline, allowlist)
    _write_report(arguments.report, manifest.get("files", []), domains, issues)
    for issue in issues:
        print(f"{issue.code}: {issue.path}: {issue.detail}")
    return 1 if any(issue.blocker for issue in issues) else 0


if __name__ == "__main__":
    raise SystemExit(main())
