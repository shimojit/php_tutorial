FROM php:8.0-apache

RUN apt-get update
RUN apt-get install -y libonig-dev && docker-php-ext-install pdo_mysql