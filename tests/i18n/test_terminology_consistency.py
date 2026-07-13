import json
import unittest
from pathlib import Path


ROOT = Path(__file__).resolve().parents[2]


def load_json(relative_path: str):
    return json.loads((ROOT / relative_path).read_text(encoding="utf-8"))


class TerminologyConsistencyTests(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        cls.glossary = load_json("translation/glossary.json")
        cls.exceptions = load_json("translation/terminology-exceptions.json")

    def test_glossary_entries_are_unique(self):
        by_english = {}
        for entries in self.glossary.values():
            if not isinstance(entries, list):
                continue
            for entry in entries:
                if not entry.get("en") or not entry.get("zh-CN"):
                    continue
                by_english.setdefault(entry["en"], set()).add(entry["zh-CN"])
        conflicts = {
            english: sorted(values)
            for english, values in by_english.items()
            if len(values) > 1
        }
        self.assertFalse(conflicts, f"同一英文术语存在多个未说明译名: {conflicts}")

    def test_required_official_terms(self):
        expected = {
            "Marine": "陆战队员",
            "Shield Battery": "护盾充能器",
            "Missile Turret": "导弹塔",
            "Spine Crawler": "脊针爬虫",
            "Solar Lance": "太阳能长枪",
            "Assimilator": "吸纳舱",
            "Extractor": "萃取巢",
        }
        entries = {
            entry["en"]: entry["zh-CN"]
            for category in ("units", "buildings", "terminology")
            for entry in self.glossary[category]
        }
        self.assertEqual({key: entries[key] for key in expected}, expected)

    def test_representative_unit_data(self):
        units = load_json("source-data/playerunits.json")
        expected = {
            "Marine": "陆战队员",
            "Shield Battery": "护盾充能器",
            "Missile Turret": "导弹塔",
            "Spine Crawler": "脊针爬虫",
        }
        for basename, expected_name in expected.items():
            names = {
                item["name"].split("（", 1)[0]
                for item in units
                if item.get("basename") == basename
            }
            self.assertIn(expected_name, names, basename)

        amon_units = load_json("source-data/amonunits.json")
        self.assertIn("机械哨兵", {item["name"] for item in amon_units})

    def test_official_prestige_names(self):
        commanders = load_json("source-data/commandersummaries.json")
        expected = {
            "kerrigan": ["恶毒族长", "人类的愚行", "荒寂女王"],
            "artanis": ["勇敢激励者", "星灵使节", "方舟指挥官"],
            "swann": ["重武器专家", "机械修理工", "运载总监"],
            "zagara": ["爆蚊虫后", "构造体之母", "顶级掠食者"],
            "karax": ["战争建筑师", "圣堂表象", "天界太阳能"],
            "abathur": ["精华贮藏者", "深隧惊惧", "无限进化"],
            "alarak": ["灵魂巧匠", "暴君晋升者", "死亡阴影"],
            "dehaka": ["吞噬者", "原始竞争者", "原生双雄"],
            "stukov": ["惊人血肉焊机", "瘟疫守望者", "尸群领主"],
            "fenix": ["阿昆德拉", "网络管理员", "不屈意志"],
            "stetmann": ["信号专家", "最佳伙伴", "石油大王"],
            "tychus": ["技术招聘专员", "独狼", "忠诚遛狗师"],
        }
        actual = {
            item["commander"]: [item["prestige1"], item["prestige2"], item["prestige3"]]
            for item in commanders
        }
        for commander, names in expected.items():
            with self.subTest(commander=commander):
                self.assertEqual(actual[commander], names)

    def test_karax_name_uses_official_simplified_chinese(self):
        commanders = load_json("source-data/commandersummaries.json")
        karax = next(item for item in commanders if item["commander"] == "karax")
        self.assertEqual(karax["fullname"], "凯拉克斯")
        self.assertEqual(karax["motto"], "相位技师")
        offenders = []
        for root in (ROOT / "source-html", ROOT / "source-data"):
            for path in root.rglob("*"):
                if path.is_file() and path.suffix.lower() in {".php", ".json", ".html", ".ts", ".tsx"}:
                    text = path.read_text(encoding="utf-8")
                    if "卡拉克斯" in text or "卡莱克斯" in text:
                        offenders.append(str(path.relative_to(ROOT)))
        self.assertFalse(offenders, f"发现错误的凯拉克斯译名: {offenders}")

    def test_exceptions_are_explicit(self):
        for entry in self.exceptions["entries"]:
            self.assertTrue(entry.get("english"))
            self.assertTrue(entry.get("zh-CN"))
            self.assertTrue(entry.get("reason"))
            self.assertIn(entry.get("source"), {"community", "official", "inferred"})

    def test_retired_building_terms_are_not_visible(self):
        roots = (ROOT / "source-html", ROOT / "source-data", ROOT / "translation")
        retired = ("吸收站", "萃取房", "太阳能射线", "生命力")
        offenders = []
        for root in roots:
            for path in root.rglob("*"):
                if path.is_file() and path.suffix.lower() in {".php", ".json", ".html", ".ts", ".tsx"}:
                    text = path.read_text(encoding="utf-8")
                    for term in retired:
                        if term in text:
                            offenders.append(f"{path.relative_to(ROOT)}: {term}")
        self.assertFalse(offenders, "发现已废弃的建筑/技能译名: " + "; ".join(offenders))


if __name__ == "__main__":
    unittest.main()
