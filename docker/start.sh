#!/bin/sh
set -e

cd /var/www/html

PORT="${PORT:-8080}"

# Fix storage permissions
mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache || true

# Run migrations automatically on startup
php artisan migrate --force || true

# Bind nginx to Railway's injected PORT at runtime.
sed -i "s/listen 80;/listen ${PORT};/" /etc/nginx/nginx.conf

# Start php-fpm in background
php-fpm -D

# Start nginx in foreground
exec nginx -g 'daemon off;'