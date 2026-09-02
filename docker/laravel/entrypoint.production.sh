#!/bin/bash

set -e

echo "Starting Laravel..."

php artisan migrate --force

php artisan optimize:clear

php artisan config:cache

php artisan db:seed --force

echo "Starting Laravel server..."

php artisan serve \
    --host=0.0.0.0 \
    --port="${PORT:-8000}"