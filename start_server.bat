@echo off
title Vellore Travels Web Server
echo ===================================================
echo   Vellore Travels Local Development Server
echo ===================================================
echo.

rem Check if PHP is available in PATH or XAMPP
set PHP_CMD=php
where php >nul 2>nul
if %errorlevel% neq 0 (
    if exist "C:\xampp\php\php.exe" (
        set PHP_CMD=C:\xampp\php\php.exe
    ) else (
        echo [ERROR] PHP was not found in your system.
        echo Please ensure XAMPP is installed or PHP is in your PATH.
        echo.
        echo Alternatively, you can open the static HTML pages directly
        echo by double-clicking "index.html" in this folder.
        echo.
        pause
        exit /b 1
    )
)

echo Starting PHP built-in web server...
echo.
echo Server Address: http://localhost:8000/index.php
echo.
echo Keep this window open while using the website.
echo Press Ctrl+C in this window to stop the server.
echo.

rem Open the website in the default browser
start http://localhost:8000/index.php

rem Run the PHP built-in server
%PHP_CMD% -S localhost:8000

pause
