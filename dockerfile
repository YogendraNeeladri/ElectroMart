# Use an official PHP image with Apache
FROM php:8.0-apache

# Enable necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the application code to the web root
COPY . /var/www/html

# Set permissions (optional, based on your project’s needs)
RUN chown -R www-data:www-data /var/www/html

# Expose the port (Apache usually listens on port 80)
EXPOSE 80
