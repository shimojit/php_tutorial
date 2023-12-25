FROM php:8.0-apache

RUN apt-get update && apt-get install -y wget
RUN apt-get install -y libonig-dev && docker-php-ext-install pdo_mysql

COPY mailhog.ini /usr/local/etc/php/conf.d/mailhog.ini

RUN curl -sSL https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -o mhsendmail \
    && chmod +x mhsendmail \
    && mv mhsendmail /usr/local/bin/mhsendmail