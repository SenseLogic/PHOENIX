#!/bin/sh
set -x
../phoenix --extract CODE/ --trim --create CODE/ WEB/
stylus CODE/style.styl -o WEB
