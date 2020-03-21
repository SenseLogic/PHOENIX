UPDATE mysql.user SET plugin='mysql_native_password' WHERE User='root';
UPDATE mysql.user SET authentication_string = PASSWORD('root') WHERE User = 'root';
FLUSH PRIVILEGES;
exit
