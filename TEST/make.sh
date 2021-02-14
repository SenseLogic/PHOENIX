#!/bin/sh
set -x
../phoenix --extract style CODE/ --trim --create CODE/ WEB/
stylus CODE/style.styl -o WEB
