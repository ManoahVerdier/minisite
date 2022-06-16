#!/bin/bash
php composer.phar install
php artisan migrate
php artisan db:seed
cd public 
rm storage
ln -s ../storage/app/public/ storage
cd ..
