#!/bin/sh
set -x
../phoenix --create CODE/ WEB/
stylus CODE/style.styl -o WEB
