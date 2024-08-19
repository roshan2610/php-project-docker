FROM php:7.2-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Optional: Install the pdo_mysql extension if your project uses PDO
# RUN docker-php-ext-install pdo_mysql

# Set the ServerName to suppress the Apache warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

