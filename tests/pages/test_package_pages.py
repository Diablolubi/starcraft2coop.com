import json
import tempfile
import threading
import unittest
import urllib.error
import urllib.request
from functools import partial
from http.server import ThreadingHTTPServer
from pathlib import Path

from scripts.pages.package_pages import package_site
from scripts.pages.serve_local import LocalSiteHandler


class PackagePagesTests(unittest.TestCase):
    def test_generated_asset_manifest_uses_web_style_paths(self) -> None:
        manifest = Path("html/data/cachebusters.json").read_text(encoding="utf-8")
        self.assertNotIn('\\\\', manifest)
        self.assertIn('"/scripts/masterybreakpoints.js"', manifest)

    def test_mastery_breakpoint_page_is_static(self) -> None:
        page = Path("html/tools/masterybreakpoints.html").read_text(encoding="utf-8")
        self.assertIn('fetch("../data/masterybreakpoints.json")', page)
        self.assertNotIn("calculatebreakpoints.php", page)
        self.assertIn("reduce(function(all, bucket)", page)
        data = json.loads(Path("html/data/masterybreakpoints.json").read_text(encoding="utf-8"))
        self.assertEqual(19, len(data["abilities"]))
        self.assertGreater(len(data["units"]), 0)

    def test_packaged_mastery_breakpoint_page_keeps_ability_icon_parsing(self) -> None:
        with tempfile.TemporaryDirectory() as temporary:
            destination = Path(temporary) / "site"
            package_site(Path("html"), destination, "/starcraft2coop.com")
            page = (destination / "tools/masterybreakpoints.html").read_text(encoding="utf-8")
            self.assertIn("match(/([^/]+)\\.png$/)", page)
            self.assertNotIn("split('/starcraft2coop.com/')", page)

    def test_brutal_mutation_generator_is_static(self) -> None:
        page = Path("html/resources/brutal.html").read_text(encoding="utf-8")
        self.assertNotIn("generatemutation.php", page)
        self.assertIn("generateTemplate(limits[3], limits[4], limits[1], limits[2])", page)

    def test_unitstats_enemy_data_is_static(self) -> None:
        page = Path("html/tools/unitstats.html").read_text(encoding="utf-8")
        self.assertIn('fetch("../data/amonunits.json")', page)
        self.assertNotIn("getamonstats.php", page)
        self.assertNotIn("generatetable.php", page)

    def test_rewrites_site_paths_and_preserves_external_urls(self) -> None:
        with tempfile.TemporaryDirectory() as temporary:
            root = Path(temporary)
            source = root / "source"
            destination = root / "destination"
            source.mkdir()
            (source / "index.html").write_text(
                '<link href="/styles/a.css"><img src="/images/a.png">'
                '<a href="https://example.com/a">external</a>',
                encoding="utf-8",
            )
            (source / "site.css").write_text("body { background: url(/images/bg.png) }", encoding="utf-8")
            (source / "app.js").write_text("fetch('/data/x.json')", encoding="utf-8")

            report = package_site(source, destination, "/starcraft2coop.com")

            self.assertEqual(3, report.files)
            self.assertEqual(4, report.rewritten_paths)
            self.assertEqual(0, report.residual_root_paths)
            self.assertIn("/starcraft2coop.com/styles/a.css", (destination / "index.html").read_text(encoding="utf-8"))
            self.assertIn("https://example.com/a", (destination / "index.html").read_text(encoding="utf-8"))
            self.assertIn("/starcraft2coop.com/images/bg.png", (destination / "site.css").read_text(encoding="utf-8"))
            self.assertIn("/starcraft2coop.com/data/x.json", (destination / "app.js").read_text(encoding="utf-8"))

            second = package_site(source, destination, "/starcraft2coop.com")
            self.assertEqual(report, second)
            self.assertNotIn("/starcraft2coop.com/starcraft2coop.com", (destination / "app.js").read_text(encoding="utf-8"))
            self.assertTrue((destination / ".nojekyll").is_file())

    def test_rewrites_quoted_javascript_paths_without_changing_regex_literals(self) -> None:
        with tempfile.TemporaryDirectory() as temporary:
            root = Path(temporary)
            source = root / "source"
            destination = root / "destination"
            source.mkdir()
            (source / "app.js").write_text(
                'const cleaned = value.replace(/\\//g, ""); fetch(\'/data/x.json\'); const route = `/${slug}`;',
                encoding="utf-8",
            )

            package_site(source, destination, "/starcraft2coop.com")

            packaged = (destination / "app.js").read_text(encoding="utf-8")
            self.assertIn('value.replace(/\\//g, "")', packaged)
            self.assertIn("fetch('/starcraft2coop.com/data/x.json')", packaged)
            self.assertIn("const route = `/starcraft2coop.com/${slug}`", packaged)

    def test_local_server_resolves_extensionless_html_routes(self) -> None:
        with tempfile.TemporaryDirectory() as temporary:
            root = Path(temporary)
            (root / "index.html").write_text("home", encoding="utf-8")
            (root / "mutators").mkdir()
            (root / "mutators" / "eminentdomain.html").write_text("eminent domain", encoding="utf-8")
            (root / "styles").mkdir()
            (root / "styles" / "site.css").write_text("body {}", encoding="utf-8")

            server = ThreadingHTTPServer(("127.0.0.1", 0), partial(LocalSiteHandler, directory=str(root)))
            thread = threading.Thread(target=server.serve_forever, daemon=True)
            thread.start()
            base_url = f"http://127.0.0.1:{server.server_port}"
            try:
                with urllib.request.urlopen(f"{base_url}/mutators/eminentdomain") as response:
                    self.assertEqual(200, response.status)
                    self.assertEqual("eminent domain", response.read().decode("utf-8"))
                with urllib.request.urlopen(f"{base_url}/starcraft2coop.com/mutators/eminentdomain") as response:
                    self.assertEqual(200, response.status)
                    self.assertEqual("eminent domain", response.read().decode("utf-8"))
                with urllib.request.urlopen(f"{base_url}/styles/site.css") as response:
                    self.assertEqual(200, response.status)
                with self.assertRaises(urllib.error.HTTPError) as missing:
                    urllib.request.urlopen(f"{base_url}/missing/path")
                self.assertEqual(404, missing.exception.code)
            finally:
                server.shutdown()
                thread.join(timeout=5)
                server.server_close()


if __name__ == "__main__":
    unittest.main()
