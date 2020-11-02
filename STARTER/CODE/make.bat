..\..\..\..\TOOL\PHOENIX\phoenix --create ./ ../www/
call stylus STYLE/style.styl -o ../www/static
call stylus ADMINISTRATION/STYLE/administration_style.styl -o ../www/static
..\..\..\..\TOOL\RESYNC\resync --updated --changed --removed --added --emptied ../www/ C:/wamp64/www/
