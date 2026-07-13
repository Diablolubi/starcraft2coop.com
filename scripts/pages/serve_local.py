from __future__ import annotations

import argparse
import sys
import webbrowser
from functools import partial
from http.server import SimpleHTTPRequestHandler, ThreadingHTTPServer
from pathlib import Path
from urllib.parse import urlsplit


LOCAL_SITE_PREFIX = "/starcraft2coop.com"


class LocalSiteHandler(SimpleHTTPRequestHandler):
    """Serve the generated site's extensionless links during local development."""

    def translate_path(self, path: str) -> str:
        request_path = urlsplit(path).path
        if request_path == LOCAL_SITE_PREFIX or request_path.startswith(LOCAL_SITE_PREFIX + "/"):
            path = request_path[len(LOCAL_SITE_PREFIX):] or "/"
        translated = Path(super().translate_path(path))
        if translated.exists() or translated.suffix:
            return str(translated)

        html_page = Path(f"{translated}.html")
        if html_page.is_file():
            return str(html_page)
        return str(translated)


def serve(root: Path, port: int, open_browser: bool = False) -> int:
    site_root = Path(root).resolve()
    if not site_root.is_dir():
        print(f"网站目录不存在：{site_root}", file=sys.stderr)
        return 1
    try:
        server = ThreadingHTTPServer(("127.0.0.1", port), partial(LocalSiteHandler, directory=str(site_root)))
    except OSError as error:
        print(f"无法启动本地网站（端口 {port} 可能已被占用）：{error}", file=sys.stderr)
        return 1

    url = f"http://127.0.0.1:{port}/"
    print(f"本地网站已启动：{url}")
    if open_browser:
        webbrowser.open(url)
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\n本地网站已停止。")
    finally:
        server.server_close()
    return 0


def main() -> int:
    parser = argparse.ArgumentParser(description="启动仅绑定回环地址的简体中文站点")
    parser.add_argument("--root", type=Path, default=Path("html"))
    parser.add_argument("--port", type=int, default=8000)
    parser.add_argument("--open-browser", action="store_true")
    args = parser.parse_args()
    return serve(args.root, args.port, args.open_browser)


if __name__ == "__main__":
    raise SystemExit(main())
