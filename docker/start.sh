#!/bin/sh
set -e

# Ensure storage & cache dirs exist and have permissions
mkdir -p storage/framework/{sessions,views,cache} bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache || true

# Start php-fpm in background
php-fpm &

# Start nginx in foreground
nginx -g 'daemon off;'
