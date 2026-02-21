# Stage 1: Build PHP dependencies
FROM php:8.2-fpm as build

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libonig-dev libzip-dev libpng-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application
WORKDIR /var/www
COPY . .

RUN composer install --no-dev --optimize-autoloader

# Stage 2: Production Nginx + PHP-FPM
FROM nginx:alpine

# Copy Nginx config
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy app from build
COPY --from=build /var/www /var/www

# Expose port
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]