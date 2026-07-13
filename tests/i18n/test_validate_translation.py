import json
import subprocess
import sys
import tempfile
import unittest
from pathlib import Path

from scripts.i18n.inventory import build_baseline
from scripts.i18n.validate_translation import Issue, validate_tree


PROJECT_ROOT = Path(__file__).resolve().parents[2]
VALIDATOR = PROJECT_ROOT / "scripts" / "i18n" / "validate_translation.py"


class ValidateTranslationTests(unittest.TestCase):
    def setUp(self) -> None:
        self.temporary_directory = tempfile.TemporaryDirectory()
        self.root = Path(self.temporary_directory.name)

    def tearDown(self) -> None:
        self.temporary_directory.cleanup()

    def write(self, relative_path: str, content: str) -> Path:
        path = self.root / relative_path
        path.parent.mkdir(parents=True, exist_ok=True)
        path.write_text(content, encoding="utf-8")
        return path

    def issue_codes(self, baseline: dict, allowlist: set[str] | None = None) -> set[str]:
        return {
            issue.code
            for issue in validate_tree(self.root, baseline, allowlist or set())
        }

    def test_media_url_change_is_a_blocker(self) -> None:
        self.write("source-html/index.php", '<img src="https://img.example/a.png">')
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", '<img src="https://img.example/b.png">')

        issues = validate_tree(self.root, baseline, set())

        media_issues = [issue for issue in issues if issue.code == "MEDIA_URL_CHANGED"]
        self.assertEqual(1, len(media_issues))
        self.assertIsInstance(media_issues[0], Issue)
        self.assertTrue(media_issues[0].blocker)

    def test_unbalanced_html_changes_structure(self) -> None:
        self.write("source-html/index.php", "<section><p>中文</p></section>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<section><p>中文</section>")

        self.assertIn("HTML_STRUCTURE_CHANGED", self.issue_codes(baseline))

    def test_visible_english_paragraph_is_untranslated(self) -> None:
        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>Build your army</p>")

        self.assertIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

    def test_single_visible_english_word_is_untranslated_but_formula_is_not(
        self,
    ) -> None:
        for word in ("Search", "Avenger", "Barrier"):
            with self.subTest(word=word):
                self.write("source-html/index.php", "<p>中文内容</p>")
                baseline = build_baseline(self.root)
                self.write("source-html/index.php", f"<p>{word}</p>")
                self.assertIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>1 + x = 2</p>")
        self.assertNotIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

    def test_user_visible_attributes_are_scanned_without_internal_input_values(
        self,
    ) -> None:
        visible_samples = (
            '<img alt="Search">',
            '<span title="Avenger"></span>',
            '<button aria-label="Barrier"></button>',
            '<input placeholder="Search">',
            '<input type="submit" value="Search">',
        )
        for markup in visible_samples:
            with self.subTest(markup=markup):
                translated_markup = (
                    markup.replace("Search", "搜索")
                    .replace("Avenger", "复仇者")
                    .replace("Barrier", "屏障")
                )
                self.write("source-html/index.php", translated_markup)
                baseline = build_baseline(self.root)
                self.write("source-html/index.php", markup)
                self.assertIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

        self.write("source-html/index.php", '<input type="hidden" value="内部值">')
        baseline = build_baseline(self.root)
        self.write(
            "source-html/index.php", '<input type="hidden" value="InternalControl">'
        )
        self.assertNotIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

    def test_attributes_in_non_visible_regions_are_not_scanned(self) -> None:
        translated = """<!-- <img alt=\"搜索\"> -->
<?php echo '<span title=\"复仇者\"></span>'; ?>
<script>const markup = '<input placeholder=\"屏障\">';</script>
<style>.icon::before { content: '<img alt=\"搜索\">'; }</style>"""
        untranslated = """<!-- <img alt=\"Search\"> -->
<?php echo '<span title=\"Avenger\"></span>'; ?>
<script>const markup = '<input placeholder=\"Barrier\">';</script>
<style>.icon::before { content: '<img alt=\"Search\">'; }</style>"""
        self.write("source-html/index.php", translated)
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", untranslated)

        self.assertNotIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

    def test_unclosed_php_block_is_not_scanned_as_visible_text(self) -> None:
        translated = '<?php echo "错误！";\n// 仅包含服务器端代码'
        untranslated_code = '<?php echo "Error!";\n// server-side code only'
        self.write("source-html/scripts/endpoint.php", translated)
        baseline = build_baseline(self.root)
        self.write("source-html/scripts/endpoint.php", untranslated_code)

        self.assertNotIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

    def test_exact_allowlist_term_is_not_untranslated(self) -> None:
        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>StarCraft II</p>")

        self.assertNotIn(
            "UNTRANSLATED_TEXT", self.issue_codes(baseline, {"StarCraft II"})
        )

    def test_allowlist_requires_exact_term_boundaries(self) -> None:
        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>StarCraft IIX</p>")

        self.assertIn(
            "UNTRANSLATED_TEXT", self.issue_codes(baseline, {"StarCraft II"})
        )

    def test_allowlist_does_not_match_identifier_prefix(self) -> None:
        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>StarCraft II_Leaks</p>")

        self.assertIn(
            "UNTRANSLATED_TEXT", self.issue_codes(baseline, {"StarCraft II"})
        )

    def test_json_internal_id_or_number_change_is_blocked(self) -> None:
        self.write(
            "source-data/sample.json",
            json.dumps({"unitid": "marine", "name": "Marine", "damage": 6}),
        )
        baseline = build_baseline(self.root)

        with self.subTest("internal string ID"):
            self.write(
                "source-data/sample.json",
                json.dumps({"unitid": "marauder", "name": "陆战队员", "damage": 6}),
            )
            self.assertIn("DATA_ID_CHANGED", self.issue_codes(baseline))

    def test_json_html_tags_are_not_scanned_as_visible_text(self) -> None:
        self.write(
            "source-data/sample.json",
            json.dumps({"description": "第一行<br>第二行"}, ensure_ascii=False),
        )
        baseline = build_baseline(self.root)

        self.assertNotIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

        self.write(
            "source-data/sample.json",
            json.dumps({"description": "第一行<br>Search"}, ensure_ascii=False),
        )
        self.assertIn("UNTRANSLATED_TEXT", self.issue_codes(baseline))

        with self.subTest("numeric value"):
            self.write(
                "source-data/sample.json",
                json.dumps({"unitid": "marine", "name": "陆战队员", "damage": 7}),
            )
            self.assertIn("DATA_ID_CHANGED", self.issue_codes(baseline))

    def test_json_schema_control_fields_are_blocked(self) -> None:
        protected_fields = (
            "commander",
            "basename",
            "unit",
            "race",
            "tags",
            "attribute",
            "nameid",
            "icon",
            "modifier",
            "modifierupgrade",
            "modifiermode",
            "modifiertag",
            "operation",
            "operationtype",
            "talenttype",
            "target",
            "upgradetype",
            "extra",
        )
        original = {field: f"internal-{field}" for field in protected_fields}
        original["name"] = "Marine"
        self.write("source-data/sample.json", json.dumps(original))
        baseline = build_baseline(self.root)

        for field in protected_fields:
            with self.subTest(field=field):
                current = dict(original)
                current["name"] = "陆战队员"
                current[field] = f"changed-{field}"
                self.write("source-data/sample.json", json.dumps(current))
                self.assertIn("DATA_ID_CHANGED", self.issue_codes(baseline))

    def test_cli_uses_manifest_status_domains_and_writes_reproducible_report(self) -> None:
        self.write("source-html/pending.php", "<p>Still pending text</p>")
        self.write("source-html/translated.php", "<p>中文内容</p>")
        self.write("source-data/ignored.json", json.dumps({"id": 1}))
        baseline = build_baseline(self.root)
        self.write("source-data/ignored.json", json.dumps({"id": 2}))

        baseline_path = self.root / "baseline.json"
        manifest_path = self.root / "manifest.json"
        allowlist_path = self.root / "allowlist.txt"
        report_path = self.root / "TRANSLATION_REPORT.md"
        baseline_path.write_text(
            json.dumps(baseline, ensure_ascii=False), encoding="utf-8"
        )
        manifest_path.write_text(
            json.dumps(
                {
                    "files": [
                        {
                            "domain": "pages",
                            "path": "source-html/pending.php",
                            "status": "pending",
                        },
                        {
                            "domain": "pages",
                            "path": "source-html/translated.php",
                            "status": "translated",
                        },
                        {
                            "domain": "data",
                            "path": "source-data/ignored.json",
                            "status": "translated",
                        },
                    ]
                }
            ),
            encoding="utf-8",
        )
        allowlist_path.write_text("StarCraft II\n", encoding="utf-8")
        command = [
            sys.executable,
            str(VALIDATOR),
            "--root",
            str(self.root),
            "--baseline",
            str(baseline_path),
            "--manifest",
            str(manifest_path),
            "--allowlist",
            str(allowlist_path),
            "--domains",
            "pages",
            "--report",
            str(report_path),
        ]

        first = subprocess.run(command, capture_output=True, text=True, check=False)
        first_report = report_path.read_text(encoding="utf-8")
        second = subprocess.run(command, capture_output=True, text=True, check=False)

        self.assertEqual(0, first.returncode, first.stderr)
        self.assertEqual(0, second.returncode, second.stderr)
        self.assertEqual(first_report, report_path.read_text(encoding="utf-8"))
        self.assertIn("1/2", first_report)
        self.assertIn("pending", first_report)
        self.assertIn("No issues.", first_report)

    def test_cli_returns_one_when_validation_has_a_blocker(self) -> None:
        self.write("source-html/index.php", "<p>中文内容</p>")
        baseline = build_baseline(self.root)
        self.write("source-html/index.php", "<p>Search</p>")
        baseline_path = self.root / "baseline.json"
        manifest_path = self.root / "manifest.json"
        allowlist_path = self.root / "allowlist.txt"
        report_path = self.root / "report.md"
        baseline_path.write_text(json.dumps(baseline), encoding="utf-8")
        manifest_path.write_text(
            json.dumps(
                {
                    "files": [
                        {
                            "domain": "pages",
                            "path": "source-html/index.php",
                            "status": "translated",
                        }
                    ]
                }
            ),
            encoding="utf-8",
        )
        allowlist_path.write_text("StarCraft II\n", encoding="utf-8")

        result = subprocess.run(
            [
                sys.executable,
                str(VALIDATOR),
                "--root",
                str(self.root),
                "--baseline",
                str(baseline_path),
                "--manifest",
                str(manifest_path),
                "--allowlist",
                str(allowlist_path),
                "--report",
                str(report_path),
            ],
            capture_output=True,
            text=True,
            check=False,
        )

        self.assertEqual(1, result.returncode)
        self.assertIn("UNTRANSLATED_TEXT", result.stdout)


if __name__ == "__main__":
    unittest.main()
