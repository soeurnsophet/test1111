#!/bin/bash
set -e

composer install --no-interaction --prefer-dist --optimize-autoloader

npm install
npm run build

php artisan key:generate --force

php artisan migrate --force

# php artisan storage:link

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"