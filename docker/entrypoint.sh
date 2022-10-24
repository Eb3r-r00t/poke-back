#!/bin/bash

chmod -R 777 storage

composer install
php artisan migrate
php artisan cache:clear
php artisan config:clear
php artisan route:clear

exec php-fpm
