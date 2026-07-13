#!/usr/bin/env python3
"""Normalize exported StarCraft II locale files into a reviewable JSON snapshot.

The extractor deliberately accepts only simple key/value records. It never
translates text and it fails closed when one key has two different values for
the same locale.
"""

from __future__ import annotations

import argparse
import csv
import json
import re
import sys
from datetime import datetime, timezone
from pathlib import Path
from typing import Iterable


LOCALE_ALIASES = {
    "enus": "enUS",
    "en-us": "enUS",
    "en_us": "enUS",
    "en": "enUS",
    "zhcn": "zhCN",
    "zh-cn": "zhCN",
    "zh_cn": "zhCN",
    "zh": "zhCN",
}
SUPPORTED_SUFFIXES = {".txt", ".xml", ".json", ".catalog", ".csv"}
URL_RE = re.compile(r"(?:https?|ftp)://|www\.", re.IGNORECASE)
PLACEHOLDER_RE = re.compile(r"(?:\{[^{}]+\}|%\d+|%[sdif])")
NUMBER_RE = re.compile(r"^[+\-]?\d+(?:[.,:]\d+)*%?$")


def normalize_locale(value: str | None) -> str | None:
    if not value:
        return None
    key = value.strip().lower().replace(" ", "")
    return LOCALE_ALIASES.get(key, value if value in {"enUS", "zhCN"} else None)


def normalize_value(value: object) -> str:
    return " ".join(str(value).replace("\ufeff", "").split())


def is_terminology_value(value: str) -> bool:
    if not value or URL_RE.search(value) or PLACEHOLDER_RE.search(value):
        return False
    if NUMBER_RE.fullmatch(value):
        return False
    return True


def _kind_for(identifier: str) -> str:
    lowered = identifier.lower()
    if "building" in lowered or "structure" in lowered:
        return "building"
    if "unit" in lowered:
        return "unit"
    if "ability" in lowered or "spell" in lowered:
        return "ability"
    if "prestige" in lowered:
        return "prestige"
    if "commander" in lowered:
        return "commander"
    return "term"


def normalize_records(
    records: Iterable[dict], *, build: str, source: str
) -> dict:
    """Pair locale records and return deterministic snapshot data."""
    values: dict[tuple[str, str], str] = {}
    source_files: dict[str, str] = {}
    for record in records:
        identifier = normalize_value(record.get("id", record.get("key", "")))
        locale = normalize_locale(record.get("locale"))
        value = normalize_value(record.get("value", record.get("text", "")))
        if not identifier or locale not in {"enUS", "zhCN"} or not is_terminology_value(value):
            continue
        key = (identifier, locale)
        previous = values.get(key)
        if previous is not None and previous != value:
            raise ValueError(
                f"conflicting {locale} values for {identifier!r}: {previous!r} vs {value!r}"
            )
        values[key] = value
        source_files.setdefault(identifier, normalize_value(record.get("source_file", source)))

    entries = []
    for identifier in sorted({identifier for identifier, _ in values}):
        english = values.get((identifier, "enUS"))
        chinese = values.get((identifier, "zhCN"))
        if not english or not chinese:
            continue
        entries.append(
            {
                "id": identifier,
                "en": english,
                "zh-CN": chinese,
                "kind": _kind_for(identifier),
                "source_file": source_files[identifier],
            }
        )
    return {
        "source": "local-starcraft-ii-client",
        "game_build": build,
        "extracted_at": datetime.now(timezone.utc).replace(microsecond=0).isoformat().replace("+00:00", "Z"),
        "entries": entries,
    }


def _records_from_json(path: Path, locale_hint: str | None) -> list[dict]:
    data = json.loads(path.read_text(encoding="utf-8"))
    raw = data if isinstance(data, list) else data.get("entries", data.get("records", []))
    if isinstance(raw, dict):
        raw = [raw]
    result = []
    for item in raw:
        if not isinstance(item, dict):
            continue
        result.append(
            {
                "locale": item.get("locale", locale_hint),
                "id": item.get("id", item.get("key")),
                "value": item.get("value", item.get("text", item.get("name"))),
                "source_file": path.name,
            }
        )
    return result


def _records_from_delimited(path: Path, locale_hint: str | None) -> list[dict]:
    text = path.read_text(encoding="utf-8-sig", errors="replace")
    lines = text.splitlines()
    if not lines:
        return []
    delimiter = "\t" if "\t" in lines[0] else "," if "," in lines[0] else None
    result = []
    if delimiter:
        rows = csv.DictReader(lines, delimiter=delimiter)
        for row in rows:
            lowered = {str(key).lower(): value for key, value in row.items()}
            identifier = lowered.get("id") or lowered.get("key") or lowered.get("name")
            value = lowered.get("value") or lowered.get("text") or lowered.get("translation")
            result.append({"locale": lowered.get("locale") or locale_hint, "id": identifier, "value": value, "source_file": path.name})
        return result
    for line in lines:
        line = line.strip()
        if not line or line.startswith("#") or line.startswith("//"):
            continue
        match = re.match(r"^([^=:\t]+?)\s*(?:=|:)\s*(.*)$", line)
        if match:
            result.append({"locale": locale_hint, "id": match.group(1), "value": match.group(2), "source_file": path.name})
    return result


def parse_input(root: Path) -> list[dict]:
    records = []
    for path in sorted(p for p in root.rglob("*") if p.is_file() and p.suffix.lower() in SUPPORTED_SUFFIXES):
        relative = path.relative_to(root).as_posix()
        locale_hint = None
        for token, locale in LOCALE_ALIASES.items():
            if token in relative.lower():
                locale_hint = locale
                break
        if path.suffix.lower() == ".json":
            parsed = _records_from_json(path, locale_hint)
        else:
            parsed = _records_from_delimited(path, locale_hint)
        for record in parsed:
            record["source_file"] = relative
        records.extend(parsed)
    return records


def main(argv: list[str] | None = None) -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--input", type=Path, required=True)
    parser.add_argument("--output", type=Path, required=True)
    parser.add_argument("--build", required=True)
    args = parser.parse_args(argv)
    try:
        snapshot = normalize_records(parse_input(args.input), build=args.build, source="exported-local-files")
    except (OSError, ValueError, json.JSONDecodeError) as exc:
        print(f"extract_local_sc2_reference: {exc}", file=sys.stderr)
        return 1
    args.output.parent.mkdir(parents=True, exist_ok=True)
    args.output.write_text(json.dumps(snapshot, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
