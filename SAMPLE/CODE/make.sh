#!/bin/sh
set -x
../../phoenix --create ./ ../PUBLIC/
stylus STYLE/style.styl -o ../PUBLIC/static
stylus ADMINISTRATION/STYLE/administration_style.styl -o ../PUBLIC/static
