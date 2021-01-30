FROM php:8.0

RUN apt-get update && apt-get install -y && apt-get install libsqlite3-dev -y\
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    && docker-php-ext-install sockets \
    && docker-php-ext-install pdo_sqlite

#RUN docker-php-ext-install sqlite3
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
#RUN mkdir .
COPY . .
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=80
EXPOSE 80
