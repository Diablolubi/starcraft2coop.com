#!/usr/bin/env python3
"""Report visible terminology that diverges from the local client baseline."""

from __future__ import annotations

import argparse
import json
import re
from pathlib import Path


VISIBLE_SUFFIXES = {".php", ".json", ".html", ".ts", ".tsx", ".md", ".txt"}
CJK_RE = re.compile(r"[\u3400-\u9fff]")
URL_RE = re.compile(r"(?:https?|ftp)://|www\.", re.IGNORECASE)
INTERNAL_ID_RE = re.compile(r"\b(?:Unit|Abil|Button|Catalog|Upgrade|Effect)\.[A-Za-z0-9_.-]+\b")


def _iter_lines(roots: list[Path]):
    for root in roots:
        paths = [root] if root.is_file() else root.rglob("*")
        for path in sorted(path for path in paths if path.is_file() and path.suffix.lower() in VISIBLE_SUFFIXES):
            if path.name in {"local-sc2-reference.json", "local-sc2-terminology-audit.json"}:
                continue
            try:
                lines = path.read_text(encoding="utf-8").splitlines()
            except UnicodeDecodeError:
                continue
            for number, line in enumerate(lines, 1):
                yield path, number, line


def audit_paths(roots: list[Path], reference: dict, exceptions: list[dict]) -> dict:
    report = {
        "missing_reference": [],
        "translation_conflict": [],
        "retired_term": [],
        "unreviewed_visible_term": [],
        "approved_exception": [],
    }
    approved = {
        (item.get("english"), item.get("zh-CN")): item
        for item in exceptions
        if item.get("english") and item.get("zh-CN")
    }
    entries = reference.get("entries", [])
    for path, line_number, line in _iter_lines(roots):
        if URL_RE.search(line) or INTERNAL_ID_RE.search(line):
            continue
        for entry in entries:
            english = entry["en"]
            expected = entry["zh-CN"]
            if english not in line:
                continue
            evidence = {"file": str(path), "line": line_number, "english": english, "expected": expected, "text": line.strip()}
            if expected in line:
                continue
            matches = [item for (en, _), item in approved.items() if en == english and item["zh-CN"] in line]
            if matches:
                report["approved_exception"].append({**evidence, "actual": matches[0]["zh-CN"], "reason": matches[0]["reason"]})
            elif CJK_RE.search(line):
                actual = "".join(CJK_RE.findall(line))
                report["translation_conflict"].append({**evidence, "actual": actual})
            else:
                report["unreviewed_visible_term"].append(evidence)
    return report


def main(argv: list[str] | None = None) -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--reference", type=Path, required=True)
    parser.add_argument("--roots", nargs="+", type=Path, required=True)
    parser.add_argument("--output", type=Path, required=True)
    parser.add_argument("--exceptions", type=Path, default=Path("translation/terminology-exceptions.json"))
    args = parser.parse_args(argv)
    reference = json.loads(args.reference.read_text(encoding="utf-8"))
    exceptions_data = json.loads(args.exceptions.read_text(encoding="utf-8")) if args.exceptions.exists() else {"entries": []}
    report = audit_paths(args.roots, reference, exceptions_data.get("entries", []))
    args.output.parent.mkdir(parents=True, exist_ok=True)
    args.output.write_text(json.dumps(report, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
