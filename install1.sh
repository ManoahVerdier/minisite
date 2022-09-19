#!/bin/bash

cp ../composer.phar .
php composer.phar install
cp ../certificationiso/.env .
cp -r ../certificationiso/node_modules .
cp ../certificationiso/favicon.ico .
cp ../certificationiso/public/favicon.ico ./public/
cp ../certificationiso/.htaccess .
vim .env 