from php:8.1-apache

copy ./index.php /var/www/html/

run docker-php-ext-install mysqli
run apt-get update -y

run chown -R www-data:www-data /var/www/html
run chmod -R o-wx /var/www/html