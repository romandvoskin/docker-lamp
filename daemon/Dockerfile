FROM php:5.6.39-fpm-alpine
RUN mkdir -p /daemon
COPY . /daemon
WORKDIR /daemon
ENTRYPOINT ["php"]
CMD ["deamon.php"]
