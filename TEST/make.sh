#!/bin/sh
set -x
../phoenix --extract --trim --create CODE/ WEB/
stylus CODE/style.styl -o WEB
