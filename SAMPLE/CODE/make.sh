#!/bin/sh
set -x
../../phoenix --create ./ ../www/
stylus STYLE/style.styl -o ../www/static
stylus ADMINISTRATION/STYLE/administration_style.styl -o ../www/static
#../../../../TOOL/RESYNC/resync --updated --changed --removed --added --emptied ../www/ /var/www/html/
