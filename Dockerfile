FROM debian:buster
#MAINTAINER sseo	<sseo@student.42seoul.kr>

#INSTALL
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y nginx
RUN apt-get install -y mariadb-server
RUN apt-get install -y php7.3-fpm
RUN apt-get install -y php7.3-cli
RUN apt-get install -y php7.3-mbstring
RUN apt-get install -y php7.3-mysql
RUN apt-get install -y openssl
RUN apt-get install -y wget

#SRCS
COPY ./srcs/localhost /etc/nginx/sites-available/
COPY ./srcs/phpMyAdmin.tar.gz /var/www/
COPY ./srcs/wp-config.php /var/www/
COPY ./srcs/wordpress.sql .
COPY ./srcs/db_init.sql .
COPY ./srcs/start.sh .

#DATABASES
RUN service mysql start && mysql -u root mysql < db_init.sql && mysql wordpress -u root --password= < wordpress.sql

#WordPress and phpMyAdmin
RUN wget -O /var/www/wordpress.tar.gz https://wordpress.org/latest.tar.gz
RUN tar -xvf /var/www/wordpress.tar.gz -C /var/www/html/
RUN tar -xvf /var/www/phpMyAdmin.tar.gz -C /var/www/html/
RUN mv /var/www/wp-config.php /var/www/html/wordpress/wp-config.php

RUN rm /etc/nginx/sites-available/default
RUN rm /etc/nginx/sites-enabled/default
RUN mv /etc/nginx/sites-available/localhost /etc//nginx/sites-available/default

#LINK
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

#CRT
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=KR/ST=Seoul/L=Seoul/O=42/CN=sseo' -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt

#CHANGE_AUTH
RUN chown -R www-data:www-data /var/www/html/*
RUN chmod -R 755 /var/www/html/*
RUN chmod 777 start.sh

ENTRYPOINT ./start.sh
