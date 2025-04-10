FROM php:8.2-apache

# Copiamos el código al contenedor
COPY index.php /var/www/html/index.php

# Activamos mod_rewrite por si hace falta
RUN a2enmod rewrite

