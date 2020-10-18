#!/bin/sh
set -x
../phoenix --create CODE/ PUBLIC/
stylus CODE/STYLE/style.styl -o PUBLIC/static
stylus CODE/ADMINISTRATION/STYLE/administration_style.styl -o PUBLIC/static
