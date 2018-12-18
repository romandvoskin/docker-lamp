FROM php:5.6.39-fpm-alpine
RUN mkdir -p /daemon
COPY . /daemon
WORKDIR /daemon
RUN chmod -R +r ./daemon.php
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
CMD  php daemon.php
