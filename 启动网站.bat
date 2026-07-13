@echo off
setlocal
cd /d "%~dp0"
where py >nul 2>nul
if %errorlevel% equ 0 (
    py scripts\pages\serve_local.py --root html --port 8000 --open-browser
    exit /b %errorlevel%
)
where python >nul 2>nul
if %errorlevel% equ 0 (
    python scripts\pages\serve_local.py --root html --port 8000 --open-browser
    exit /b %errorlevel%
)
echo 未找到 Python。请安装 Python 3 后重试。
exit /b 1
