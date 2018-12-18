FROM php:5.6.39-fpm-alpine
RUN mkdir -p /daemon
COPY . /daemon
WORKDIR /daemon
RUN chmod -R +r ./daemon.php
CMD  php daemon.php
