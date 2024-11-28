#!/bin/bash
set -e

# Navigate to the project directory
cd /var/www/html

# Start Supervisor to manage Laravel Queue Worker and Apache
supervisord &

# Start the Apache web server
apache2-foreground &

# Run CONFIG CLEAR after build to fix env issues (and optimize for view caching problems)
php artisan config:cache
php artisan optimize
php artisan migrate --force
php artisan cache:clear

# Keep the container running
tail -f /dev/null
