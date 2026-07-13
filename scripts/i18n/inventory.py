import argparse
import json
import re
from pathlib import Path


TRANSLATABLE = (
    "includes/wrapper.php",
    "source-html/**/*.php",
    "source-data/*.json",
    "source-data/mutator-details/*.html",
)
DOMAIN_BY_PREFIX = {
    "includes/": "shared",
    "source-html/commanders/": "commanders",
    "source-html/missions/": "missions",
    "source-html/": "pages",
    "source-data/mutator-details/": "mutators",
    "source-data/": "data",
}
MEDIA_PATTERN = re.compile(r"https?://[^\s\"'<>]+")
TAG_PATTERN = re.compile(r"<\s*(/?)\s*([a-zA-Z][a-zA-Z0-9:-]*)\b[^>]*>")


def _translatable_paths(root: Path) -> list[Path]:
    paths: list[Path] = []
    seen: set[Path] = set()
    for pattern in TRANSLATABLE:
        matches = sorted(
            (path for path in root.glob(pattern) if path.is_file()),
            key=lambda path: path.relative_to(root).as_posix(),
        )
        for path in matches:
            if path not in seen:
                seen.add(path)
                paths.append(path)
    return paths


def _domain(path: str) -> str:
    for prefix, domain in DOMAIN_BY_PREFIX.items():
        if path.startswith(prefix):
            return domain
    raise ValueError(f"No translation domain for {path}")


def _media_urls(text: str) -> list[str]:
    return sorted(set(MEDIA_PATTERN.findall(text)))


def _html_structure(text: str) -> list[str]:
    return [f"{'/' if closing else ''}{name.lower()}" for closing, name in TAG_PATTERN.findall(text)]


def build_manifest(root: Path) -> dict:
    root = Path(root)
    files = []
    for source_path in _translatable_paths(root):
        relative_path = source_path.relative_to(root).as_posix()
        files.append(
            {
                "domain": _domain(relative_path),
                "path": relative_path,
                "status": "pending",
            }
        )
    return {"files": files}


def build_baseline(root: Path) -> dict:
    root = Path(root)
    files = []
    all_media_urls: set[str] = set()
    for source_path in _translatable_paths(root):
        relative_path = source_path.relative_to(root).as_posix()
        text = source_path.read_text(encoding="utf-8")
        media_urls = _media_urls(text)
        all_media_urls.update(media_urls)
        snapshot = {"media_urls": media_urls, "path": relative_path}
        if source_path.suffix == ".json":
            snapshot["data"] = json.loads(text)
        else:
            snapshot["html_structure"] = _html_structure(text)
        files.append(snapshot)
    return {"files": files, "media_urls": sorted(all_media_urls)}


def _write_json(path: Path, data: dict) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(
        json.dumps(data, ensure_ascii=False, indent=2) + "\n", encoding="utf-8"
    )


def main() -> None:
    parser = argparse.ArgumentParser()
    parser.add_argument("--root", type=Path, required=True)
    parser.add_argument("--manifest", type=Path, required=True)
    parser.add_argument("--baseline", type=Path, required=True)
    parser.add_argument("--commit", required=True)
    arguments = parser.parse_args()

    manifest = build_manifest(arguments.root)
    baseline = build_baseline(arguments.root)
    manifest["commit"] = arguments.commit
    baseline["commit"] = arguments.commit
    _write_json(arguments.manifest, manifest)
    _write_json(arguments.baseline, baseline)


if __name__ == "__main__":
    main()
