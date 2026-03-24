FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip libonig-dev \
    && docker-php-ext-install zip pdo pdo_mysql mbstring bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy files
COPY . .

# Prepare Laravel env
RUN cp .env.example .env || true

# Install dependencies (skip scripts to avoid artisan errors)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Generate key and clear cache
RUN php artisan key:generate && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000