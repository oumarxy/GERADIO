@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/wemersonjanuario/wkhtmltopdf-windows/bin/32bit/wkhtmltopdf.exe
call "%BIN_TARGET%" %*
