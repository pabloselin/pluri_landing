@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../wp-cli/wp-cli/bin/wp
SET COMPOSER_BIN_DIR=%~dp0
sh "%BIN_TARGET%" %*
