# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instalación de dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    git \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto al contenedor
COPY . .

# Verifica la conexión antes de instalar Composer
RUN curl -I https://getcomposer.org/installer

# Instala Composer con una versión específica
RUN curl -sS https://getcomposer.org/download/2.4.4/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

# Verifica que Composer esté instalado
RUN composer --version

# Instala las dependencias de PHP con Composer
RUN composer install --no-dev --optimize-autoloader

# Verifica los archivos copiados en el contenedor
RUN ls -la /var/www/html

# Establece permisos correctos para el directorio de Symfony
RUN chown -R www-data:www-data var/cache var/log var/sessions

# Expone el puerto 80 para que Apache lo utilice
EXPOSE 80

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]
