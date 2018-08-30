#!/bin/bash

chmod -R 777 /var/www/html;
apt-get update && apt-get install -y php-sqlite3;
service apache2 restart;
