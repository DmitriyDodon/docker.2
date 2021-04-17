FROM php:7.4.1-apache

RUN apt-get update && apt-get install -y \
        && apt-get install libpq-dev -y \
        && docker-php-ext-install pdo_pgsql

RUN docker-php-ext-install pdo pdo_pgsql



