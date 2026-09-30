# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies and Node.js (for Tailwind)
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev sqlite3 libsqlite3-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo_sqlite mbstring exif pcntl bcmath gd

# Enable Apache routing
RUN a2enmod rewrite

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Copy all project files into the server
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Install Node dependencies and compile Tailwind CSS
RUN npm install
RUN npm run build

# Setup the SQLite Database for your PM Review
RUN touch database/database.sqlite
RUN php artisan migrate --force
RUN php artisan db:seed --class=ProductSeeder --force

# Give the server permission to read/write the database and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache database/

# Configure Apache to serve the Laravel "public" folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Tell Render to route traffic to this port
EXPOSE 80