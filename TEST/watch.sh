#!/bin/sh
set -x
../phoenix --extract style CODE/ --trim --create --watch CODE/ WEB/
