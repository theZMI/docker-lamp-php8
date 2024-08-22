FROM php:8.2-apache

RUN apt-get update

# Switch on rewrite rules in htaccess
RUN a2enmod rewrite

# Switch on tag Header in htaccess
RUN a2enmod headers

# Install tools required for build stage
RUN apt-get install -y -fyqq bash curl wget ssh rsync ca-certificates openssl ssh git tzdata openntpd libxrender1 fontconfig \
    libc6 g++ gcc gnupg libgcc1 linux-headers-generic make python3 gnupg binutils-gold autoconf

# Install MySQLi extension for php
RUN docker-php-ext-install mysqli

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
 && chmod 755 /usr/bin/composer

# Install additional PHP libraries
RUN docker-php-ext-install bcmath pdo_mysql

# Install libraries for compiling GD, then build it
RUN apt-get install -fyqq libfreetype6 libfreetype6-dev libpng16-16 libpng-dev libjpeg62-turbo libjpeg62-turbo-dev \
 && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
 && docker-php-ext-install gd \
 && docker-php-ext-install exif

# Add ZIP archives support
RUN apt-get install -fyqq zip libzip-dev \
 && docker-php-ext-install zip \
 && apt-get remove -fyqq libzip-dev

# Install xdebug
RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

RUN apt-get install nano
RUN apt-get install -y vim

# Enable XDebug
ADD xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /site