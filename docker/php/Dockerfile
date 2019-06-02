FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    apt-transport-https \
    gnupg

RUN apt-get update && apt-get install -y \
        libicu-dev \
        git \
    && docker-php-ext-install \
        intl \
        opcache \
        pdo_mysql \
    && docker-php-ext-enable \
        intl \
        pdo_mysql \
    && curl -s https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

RUN pecl install xdebug-2.6.0RC2
RUN docker-php-ext-enable xdebug

# Permission fix
RUN usermod -u 1000 www-data
