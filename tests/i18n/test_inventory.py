import tempfile
import unittest
from pathlib import Path

from scripts.i18n.inventory import build_baseline, build_manifest


class InventoryTests(unittest.TestCase):
    def test_builds_manifest_and_media_baseline(self):
        with tempfile.TemporaryDirectory() as temporary_directory:
            root = Path(temporary_directory)
            (root / "source-html").mkdir()
            (root / "source-data").mkdir()
            (root / "source-html" / "index.php").write_text(
                '<img src="https://img.example/a.png">', encoding="utf-8"
            )
            (root / "source-data" / "sample.json").write_text(
                '{"video": "https://youtu.be/abc123"}', encoding="utf-8"
            )

            manifest = build_manifest(root)
            baseline = build_baseline(root)

            self.assertEqual(
                manifest["files"],
                [
                    {
                        "domain": "pages",
                        "path": "source-html/index.php",
                        "status": "pending",
                    },
                    {
                        "domain": "data",
                        "path": "source-data/sample.json",
                        "status": "pending",
                    },
                ],
            )
            self.assertEqual(
                baseline["media_urls"],
                ["https://img.example/a.png", "https://youtu.be/abc123"],
            )


if __name__ == "__main__":
    unittest.main()
