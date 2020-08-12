#!/bin/bash

service mysql restart
/etc/init.d/php7.3-fpm start
service nginx start

while true; do
	sleep 1
done
