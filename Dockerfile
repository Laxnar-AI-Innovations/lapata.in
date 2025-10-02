FROM php:8.2-apache

# Set document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libwebp-dev \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    ghostscript \
    locales \
 && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
 && docker-php-ext-install -j"$(nproc)" gd exif zip mbstring xml intl pdo pdo_mysql pdo_pgsql pgsql opcache \
 && a2dismod mpm_event || true \
 && a2enmod mpm_prefork \
 && a2enmod rewrite headers expires \
 && rm -rf /var/lib/apt/lists/*

# Allow .htaccess overrides
RUN sed -ri 's/AllowOverride[[:space:]]+None/AllowOverride All/i' /etc/apache2/apache2.conf

# Copy custom php.ini if present
COPY php.ini /usr/local/etc/php/conf.d/zz-app.ini

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install PHP dependencies first for better layer caching
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader || true

# Copy application code
COPY . .

# Ensure writable directories exist and are owned by www-data
RUN mkdir -p application/cache application/logs upload writable/sessions \
 && chown -R www-data:www-data application/cache application/logs upload writable/sessions \
 && find application/cache application/logs upload writable/sessions -type d -exec chmod 775 {} \; || true

# Configure Apache to listen on the Render-provided PORT at runtime
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh \
 && sed -i 's/\r$//' /usr/local/bin/entrypoint.sh

EXPOSE 8080
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]



