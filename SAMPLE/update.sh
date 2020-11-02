#!/bin/sh
set -x
./clean.sh
mkdir CODE/STYLE/VISTA/
cp ../../../TOOL/VISTA/CODE/STYLUS/*.* CODE/STYLE/VISTA/
mkdir PUBLIC/static/script/
cp ../../../TOOL/VISTA/CODE/JAVASCRIPT/*.* PUBLIC/static/script/
