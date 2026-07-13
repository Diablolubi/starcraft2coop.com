import json
import unittest
from pathlib import Path
import tempfile


ROOT = Path(__file__).resolve().parents[2]


class LocalReferenceSnapshotTests(unittest.TestCase):
    def test_snapshot_has_reviewed_metadata_and_assimilator(self):
        path = ROOT / "translation" / "local-sc2-reference.json"
        snapshot = json.loads(path.read_text(encoding="utf-8"))

        self.assertEqual(snapshot["source"], "local-starcraft-ii-client")
        self.assertTrue(snapshot["game_build"])
        self.assertTrue(snapshot["extracted_at"])
        self.assertIsInstance(snapshot["entries"], list)

        assimilator = [
            entry for entry in snapshot["entries"]
            if entry.get("kind") == "building" and entry.get("id") == "Assimilator"
        ]
        self.assertEqual(len(assimilator), 1)
        self.assertEqual(assimilator[0]["en"], "Assimilator")
        self.assertTrue(assimilator[0]["zh-CN"])
        self.assertTrue(assimilator[0]["source_file"])

    def test_snapshot_entries_are_unique_and_well_shaped(self):
        snapshot = json.loads(
            (ROOT / "translation" / "local-sc2-reference.json").read_text(encoding="utf-8")
        )
        keys = []
        for entry in snapshot["entries"]:
            self.assertEqual(
                set(entry), {"id", "en", "zh-CN", "kind", "source_file"}
            )
            self.assertTrue(all(isinstance(entry[key], str) and entry[key] for key in entry))
            keys.append((entry["kind"], entry["id"]))
        self.assertEqual(len(keys), len(set(keys)))

    def test_normalizer_pairs_locale_records_and_rejects_conflicts(self):
        from tools.extract_local_sc2_reference import normalize_records

        records = [
            {"locale": "enUS", "id": "Unit.Marine", "value": " Marine "},
            {"locale": "zhCN", "id": "Unit.Marine", "value": " 陆战队员 "},
        ]
        result = normalize_records(records, build="test-build", source="fixture")
        self.assertEqual(result["entries"][0]["id"], "Unit.Marine")
        self.assertEqual(result["entries"][0]["en"], "Marine")
        self.assertEqual(result["entries"][0]["zh-CN"], "陆战队员")

        conflicting = records + [
            {"locale": "zhCN", "id": "Unit.Marine", "value": "机枪兵"}
        ]
        with self.assertRaises(ValueError):
            normalize_records(conflicting, build="test-build", source="fixture")

    def test_normalizer_ignores_non_terminology_values(self):
        from tools.extract_local_sc2_reference import normalize_records

        records = [
            {"locale": "enUS", "id": "Url", "value": "https://example.com"},
            {"locale": "zhCN", "id": "Url", "value": "https://example.cn"},
            {"locale": "enUS", "id": "Number", "value": "100"},
            {"locale": "zhCN", "id": "Number", "value": "100"},
            {"locale": "enUS", "id": "Placeholder", "value": "{0}"},
            {"locale": "zhCN", "id": "Placeholder", "value": "{0}"},
        ]
        result = normalize_records(records, build="test-build", source="fixture")
        self.assertEqual(result["entries"], [])

    def test_audit_reports_conflict_but_ignores_urls_and_ids(self):
        from tools.audit_local_sc2_terminology import audit_paths

        with tempfile.TemporaryDirectory() as directory:
            root = Path(directory)
            page = root / "page.php"
            page.write_text(
                "Assimilator：吸收站\n"
                "https://example.com/Assimilator\n"
                "Unit.Assimilator = internal-id\n",
                encoding="utf-8",
            )
            reference = {
                "entries": [
                    {
                        "id": "Assimilator",
                        "en": "Assimilator",
                        "zh-CN": "吸纳舱",
                        "kind": "building",
                        "source_file": "editorcatalogstrings.txt",
                    }
                ]
            }
            report = audit_paths([root], reference, exceptions=[])
            self.assertEqual(len(report["translation_conflict"]), 1)
            self.assertEqual(report["translation_conflict"][0]["line"], 1)

    def test_audit_accepts_explicit_context_exception(self):
        from tools.audit_local_sc2_terminology import audit_paths

        with tempfile.TemporaryDirectory() as directory:
            root = Path(directory)
            page = root / "page.php"
            page.write_text("Assimilator：吸收站\n", encoding="utf-8")
            reference = {
                "entries": [
                    {
                        "id": "Assimilator",
                        "en": "Assimilator",
                        "zh-CN": "吸纳舱",
                        "kind": "building",
                        "source_file": "editorcatalogstrings.txt",
                    }
                ]
            }
            exceptions = [
                {
                    "english": "Assimilator",
                    "zh-CN": "吸收站",
                    "reason": "legacy context",
                    "source": "official",
                }
            ]
            report = audit_paths([root], reference, exceptions=exceptions)
            self.assertEqual(report["translation_conflict"], [])
            self.assertEqual(len(report["approved_exception"]), 1)

    def test_full_audit_compares_named_rows_against_official_values(self):
        from tools.full_official_terminology_audit import compare_named_rows

        rows = [{"english": "Avenger", "current": "复仇者"}]
        result = compare_named_rows(rows, {"Avenger": "复仇战士"})
        self.assertEqual(result["mismatch"][0]["official"], "复仇战士")
        self.assertEqual(result["mismatch"][0]["current"], "复仇者")


if __name__ == "__main__":
    unittest.main()
