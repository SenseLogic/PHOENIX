#!/bin/sh
set -x
../phoenix --extract style CODE/ --compress --trim --create --watch CODE/ WEB/
