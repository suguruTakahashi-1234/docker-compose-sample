# image
FROM php:5.4-apache

# Set php.ini
COPY ./php.ini /usr/local/etc/php/

# Set apache conf (Before tag:5.4-apache)
COPY ./apache2.conf /etc/apache2/
COPY ./sites/*.conf /etc/apache2/sites-available/

# Set apache conf (After tag:5.5-apache)
# ENV APACHE_DOCUMENT_ROOT /var/www/html/test
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install MySQL connection module
RUN apt-get update \
  && apt-get install -y libpq-dev \
  && docker-php-ext-install pdo_mysql pdo_pgsql mysqli mbstring