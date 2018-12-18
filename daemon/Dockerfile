FROM php:7.0
RUN mkdir -p /daemon
COPY . /daemon
WORKDIR /daemon
RUN chmod -R +r ./daemon.php
RUN docker-php-ext-install mysqli
RUN mkdir /var/log/roman
RUN touch /var/log/roman/daemon.log
RUN chmod 700 /var/log/roman/daemon.log
COPY ./php.ini /usr/local/etc/php
ENTRYPOINT ["php"]
CMD ["daemon.php"]
