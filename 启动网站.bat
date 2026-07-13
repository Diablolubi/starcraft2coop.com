@echo off
setlocal
cd /d "%~dp0"

where py >nul 2>nul
if errorlevel 1 goto check_python
py -3 --version >nul 2>nul
if errorlevel 1 goto check_python
goto run_py

:check_python
where python >nul 2>nul
if errorlevel 1 goto not_found
python --version >nul 2>nul
if errorlevel 1 goto not_found
goto run_python

:not_found
echo Python 3 was not found.
exit /b 1

:run_py
py scripts\pages\serve_local.py --root html --port 8000 --open-browser
exit /b %errorlevel%

:run_python
python scripts\pages\serve_local.py --root html --port 8000 --open-browser
exit /b %errorlevel%
