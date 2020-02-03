FROM php:7.2.4-fpm-alpine

RUN mkdir -p /app

WORKDIR /app

#COPY ../.. .

RUN apk update && apk add \
 curl \
 bash \
 nodejs-npm

RUN curl -sS https://getcomposer.org/installer | php && \
  mv composer.phar /usr/local/bin/composer

RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev

RUN apk add --no-cache libzip-dev && \
  docker-php-ext-configure zip --with-libzip=/usr/include && \
  docker-php-ext-install zip

RUN docker-php-ext-install pdo pdo_mysql

CMD bash -c  "composer install && \
 php artisan key:generate && \
 php artisan config:cache && \
 php artisan serve --host 0.0.0.0 --port 8000"

WORKDIR /app
