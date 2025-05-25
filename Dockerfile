FROM php:8.0-apache

# Install git and curl
RUN apt-get update && apt-get install -y \
    git \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all website files
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Create simple health check
RUN echo "<?php echo 'OK'; ?>" > /var/www/html/health.php

# Create basic .htaccess for www redirect
RUN echo 'RewriteEngine On\n\
RewriteCond %{HTTP_HOST} ^pcs\.hants\.sch\.uk [NC]\n\
RewriteRule ^(.*)$ https://www.pcs.hants.sch.uk/$1 [R=301,L]\n\
' > /var/www/html/.htaccess

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]