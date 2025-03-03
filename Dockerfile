FROM php:8.2-fpm
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install pdo_mysql
RUN chown -R www-data:www-data /var/www/html/storage