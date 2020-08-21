#!/bin/bash

php artisan migrate
php artisan db:seed
php artisan voyager:admin your@email.com --create
cd public 
rm storage
ln -s ../storage/app/public/ storage
cd ..
