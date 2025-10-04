# Use official PHP image with Apache
FROM php:8.2-apache

# Install OS dependencies for Symfony and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    # Add other necessary OS packages (e.g., libpng-dev for GD)
    && docker-php-ext-install pdo pdo_mysql zip opcache \
    # Install Composer
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/staygrid

# Copy your project files (optional for development, as volumes are often used)
# COPY . /var/www/staygrid

# Install Symfony dependencies
RUN composer install --no-dev --optimize-autoloader