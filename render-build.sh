#!/usr/bin/env bash

# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node dependencies and build Tailwind CSS
npm install
npm run build

# Setup the SQLite Database for PM Review
touch database/database.sqlite
php artisan migrate:force

# Seed the 3 dummy products so the page isn't empty
php artisan db:seed --class=ProductSeeder --force