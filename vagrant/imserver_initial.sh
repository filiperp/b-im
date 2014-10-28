#!/bin/bash

# basic update
echo "=========UPDATE==========="
sudo apt-get -y --force-yes update
sudo apt-get -y --force-yes upgrade


echo "=========APT GET installs==========="
sudo apt-get -y install \
apache2 php5 libapache2-mod-php5 mysql-server  \
php5-sqlite php5-memcache php-apc php5-mcrypt php5-imagick \
php-pear php5-dev libpcre3-dev  libcurl3-openssl-dev php5-mysql;


echo "=========PECL (must be 1.7.6)==========="
sudo pecl  install pecl_http-1.7.6

echo "=========Symbolics==========="
sudo ln -s /etc/php5/mods-available/mcrypt.ini /etc/php5/apache2/conf.d/20-mcrypt.ini

echo "=========uploads tmp==========="
sudo mkdir /var/www/tmp
sudo chmod 755 /var/www/tmp
sudo chown www-data:www-data  /var/www/tmp


echo "=========MYSQL homolog==========="
#CREATE USER 'root'@'localhost' IDENTIFIED BY 'Mudar#123' ; 
#CREATE USER 'root'@'%' IDENTIFIED BY 'Mudar#123' ;			  
mysql -u root -p << EOF
 
 SET PASSWORD FOR 'root'@'localhost' = PASSWORD('Mudar#123');
 CREATE USER 'root'@'%' IDENTIFIED BY 'Mudar#123' ;
 SET PASSWORD FOR 'root'@'%' = PASSWORD('Mudar#123');		
 GRANT ALL ON *.* TO 'root'@'localhost';						
 GRANT ALL ON *.* TO 'root'@'%';								
 exit; 
EOF

echo "=========my.cnf homolog ==========="

#sudo pico  /etc/mysql/my.cnf
sudo sh -c 'echo  "
[mysqld]
bind-address = 0.0.0.0


"   >> /etc/mysql/conf.d/band-im.cnf ';
#sudo sh -c 'echo  >> '

echo "=========php.ini homolog==========="
#sudo pico /etc/php5/apache2/php.ini
sudo sh -c 'echo  "

display_errors = On
error_reporting = E_ALL | E_STRICT
post_max_size = 512M
file_uploads = On
upload_max_filesize = 512M
max_file_uploads = 20
upload_tmp_dir = /var/www/tmp
extension=http.so

" >> /etc/php5/apache2/conf.d/band-im.ini'


echo "=========APACHE homolog==========="
sudo a2enmod rewrite

 sudo sh -c 'echo  "       
 <Directory /var/www/>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
        #RedirectMatch ^/$ /apache2-default/
</Directory> 

" >> /etc/apache2/sites-available/band-im.conf '

echo "=========Symbolics sites-available==========="
ln -s /etc/apache2/sites-available/band-im.conf  /etc/apache2/sites-enabled/band-im.conf 


echo "=========RESTARTING SERVICES==========="
sudo /etc/init.d/apache2 restart
sudo service mysql restart
