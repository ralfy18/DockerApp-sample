FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli mbstring xml
RUN apt-get update && apt-get upgrade -y