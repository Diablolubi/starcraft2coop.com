from __future__ import annotations

import argparse
import json
import re
import shutil
from dataclasses import asdict, dataclass
from pathlib import Path


TEXT_EXTENSIONS = {".html", ".css", ".js", ".json", ".xml", ".txt"}
QUOTED_ROOT_PATH_PATTERN = re.compile(r"([\"'])/(?!/)([^\"'()\s]*)")
TEMPLATE_ROOT_PATH_PATTERN = re.compile(r"(`)/(?!/)([^`\s]*)")
CSS_ROOT_PATH_PATTERN = re.compile(r"(url\(\s*)/(?!/)([^)\s]*)", re.IGNORECASE)


@dataclass(frozen=True)
class PackageReport:
    files: int
    rewritten_paths: int
    residual_root_paths: int


def _rewrite_text(text: str, base: str) -> tuple[str, int]:
    prefix = "/" + base.strip("/")

    def replace(match: re.Match[str]) -> str:
        path = match.group(2)
        if path.startswith(prefix.lstrip("/") + "/"):
            return match.group(0)
        return f"{match.group(1)}{prefix}/{path}"

    rewritten, quoted_count = QUOTED_ROOT_PATH_PATTERN.subn(replace, text)
    rewritten, template_count = TEMPLATE_ROOT_PATH_PATTERN.subn(replace, rewritten)
    rewritten, css_count = CSS_ROOT_PATH_PATTERN.subn(replace, rewritten)
    return rewritten, quoted_count + template_count + css_count


def _residual_root_paths(text: str, base: str) -> int:
    prefix = "/" + base.strip("/") + "/"
    patterns = (QUOTED_ROOT_PATH_PATTERN, TEMPLATE_ROOT_PATH_PATTERN, CSS_ROOT_PATH_PATTERN)
    return sum(
        1
        for pattern in patterns
        for match in pattern.finditer(text)
        if not match.group(2).startswith(prefix.lstrip("/"))
    )


def package_site(source: Path, destination: Path, base: str) -> PackageReport:
    source = Path(source).resolve()
    destination = Path(destination).resolve()
    if not source.is_dir():
        raise FileNotFoundError(f"Source directory does not exist: {source}")
    if not base.startswith("/") or base == "/" or base.endswith("/"):
        raise ValueError("base must be a non-root path such as /starcraft2coop.com")

    if destination.exists():
        shutil.rmtree(destination)
    destination.mkdir(parents=True)

    files = 0
    rewritten_paths = 0
    residual_root_paths = 0
    for source_path in source.rglob("*"):
        if not source_path.is_file():
            continue
        relative = source_path.relative_to(source)
        destination_path = destination / relative
        destination_path.parent.mkdir(parents=True, exist_ok=True)
        files += 1
        if source_path.suffix.lower() in TEXT_EXTENSIONS:
            text = source_path.read_text(encoding="utf-8")
            rewritten, count = _rewrite_text(text, base)
            destination_path.write_text(rewritten, encoding="utf-8")
            rewritten_paths += count
            residual_root_paths += _residual_root_paths(rewritten, base)
        else:
            shutil.copyfile(source_path, destination_path)

    (destination / ".nojekyll").write_text("", encoding="utf-8")
    return PackageReport(files, rewritten_paths, residual_root_paths)


def main() -> int:
    parser = argparse.ArgumentParser()
    parser.add_argument("--source", type=Path, required=True)
    parser.add_argument("--destination", type=Path, required=True)
    parser.add_argument("--base", required=True)
    parser.add_argument("--report", type=Path)
    args = parser.parse_args()
    report = package_site(args.source, args.destination, args.base)
    if args.report:
        args.report.write_text(json.dumps(asdict(report), ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    print(json.dumps(asdict(report), ensure_ascii=False))
    return 0 if report.residual_root_paths == 0 else 1


if __name__ == "__main__":
    raise SystemExit(main())
