#!/bin/bash
set -e

composer install
wait $!
npm install
wait $!
php artisan key:generate
wait $!
php artisan migrate
# wait $!
# php artisan storage:link
wait $!
php artisan serve --host=0.0.0.0 --port=8000