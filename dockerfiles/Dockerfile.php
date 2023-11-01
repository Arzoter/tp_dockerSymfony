FROM php:8.1-fpm AS dev

# Installer les dépendances nécessaires pour le développement
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql