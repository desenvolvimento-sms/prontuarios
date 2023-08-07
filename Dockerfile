FROM php:8.1-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
libsqlite3-dev \
git \
curl \
libpng-dev \
libonig-dev \
libxml2-dev \
libzip-dev \
zip \
unzip


RUN apt-get clean && rm -rf /var/lib/apt/lists/*


RUN docker-php-ext-install pdo_mysql zip exif pcntl xml pdo_sqlite bcmath


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY . /var/www

COPY --chown=www:www . /var/www

USER www

CMD ["php-fpm"]
