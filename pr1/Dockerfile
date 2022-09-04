FROM php:8.1-apache
WORKDIR /var/www/html

COPY index.php index.php
COPY style.css style.css
EXPOSE 80
RUN docker-php-ext-install mysqli

