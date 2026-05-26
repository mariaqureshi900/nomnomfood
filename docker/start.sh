#!/bin/sh
set -e

cd /var/www/html

# Fix storage permissions
mkdir -p storage/framework/{sessions,views,cache} bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache || true

# Run migrations automatically on startup
php artisan migrate --force || true

# Start php-fpm in background
php-fpm &

# Start nginx in foreground
exec nginx -g 'daemon off;'