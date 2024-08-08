# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Make port 80 available to the world outside this container
EXPOSE 80

# Run apache2-foreground when the container launches
CMD ["apache2-foreground"]
