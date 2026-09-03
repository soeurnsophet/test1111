FROM php:8.4-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring bcmath gd zip pcntl sockets \
    && rm -rf /var/lib/apt/lists/*

COPY docker/laravel/*.sh /usr/local/bin/

# Automatically fix Windows line-endings (CRLF to LF) and make scripts executable
RUN sed -i -e 's/\r$//' /usr/local/bin/*.sh \
    && chmod +x /usr/local/bin/*.sh

COPY --from=composer:2.9 /usr/bin/composer /usr/bin/composer

COPY --from=node:latest /usr/local /usr/local

COPY laravel /var/www/html

RUN chown -R www-data:www-data /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage

RUN composer install

EXPOSE 8000

# CMD ["bash", "/usr/local/bin/entrypoint.production.sh"]