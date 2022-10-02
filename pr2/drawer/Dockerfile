FROM php:7.4-apache
COPY ./drawer.php /var/www/html/index.php
RUN apt-get update -y && apt-get install -y libpng-dev zlib1g-dev
RUN docker-php-ext-install gd

