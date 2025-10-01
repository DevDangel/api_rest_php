# Usamos PHP 8.3 con Apache
FROM php:8.3-apache

# Copiar todos los archivos del proyecto al servidor web dentro del contenedor
COPY . /var/www/html

# Exponer el puerto 80 (Apache)
EXPOSE 80
