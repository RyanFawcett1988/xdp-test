FROM php:8.1-fpm

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y git && apt-get install unzip
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo xdebug.mode=coverage > /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer install

EXPOSE 80

CMD ["php", "artisan", "serve"]