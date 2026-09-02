#!/bin/bash
set -e

composer install

npm install

php artisan key:generate

php artisan migrate

# php artisan storage:link

exec php artisan serve --host=0.0.0.0 --port=8000