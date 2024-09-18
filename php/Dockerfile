# Usamos la imagen oficial de PHP con FPM y Alpine para un tamaño reducido
FROM php:8.3-fpm-alpine

# Instalamos dependencias necesarias y extensiones PHP
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install pdo pdo_mysql

# Instalamos Composer para manejar dependencias de PHP
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecemos el directorio de trabajo
WORKDIR /var/www

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]

# Nota: En un escenario de producción, considera agregar un usuario no-root
# y cambiar la propiedad de los archivos por razones de seguridad