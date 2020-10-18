#!/bin/sh
set -x
sudo apt install mysql-server mysql-client php php-mysql php-gd
#echo "n / root / root / n / n / n / y"
#sudo mysql_secure_installation utility
sudo ufw enable
sudo ufw allow mysql
sudo systemctl start mysql
sudo systemctl enable mysql
cat /etc/mysql/mysql.conf.d/mysqld.cnf | grep bind-address
cat get.sql
echo "press Enter"
sudo /usr/bin/mysql -u root -p < get.sql
sudo systemctl restart mysql
sudo apt install nodejs
sudo npm install -g npm
sudo npm install -g stylus
