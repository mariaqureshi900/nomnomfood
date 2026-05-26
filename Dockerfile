### Multi-stage Dockerfile for Laravel app
### Stage 1: build frontend assets
FROM node:18 AS frontend
WORKDIR /app
COPY package.json package-lock.json* ./
RUN npm ci --silent || npm install --silent
COPY . .
RUN npm run build

### Stage 2: install PHP dependencies
FROM composer:2 AS composer
WORKDIR /app
COPY composer.json composer.lock* ./
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-scripts
COPY . .
RUN composer dump-autoload --optimize

### Final stage: PHP-FPM + Nginx
FROM php:8.2-fpm-alpine
RUN apk add --no-cache nginx bash shadow libreoffice-libreoffice-l10n-en tzdata libzip-dev icu-dev oniguruma-dev zlib-dev curl
RUN docker-php-ext-install pdo pdo_mysql zip intl mbstring opcache

WORKDIR /var/www/html
COPY --from=composer /app /var/www/html
COPY --from=frontend /app/public/build /var/www/html/public/build

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
