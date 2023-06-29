# Usamos la imagen base de WordPress
FROM wordpress:latest

# Copiamos nuestro archivo wp-config.php personalizado
COPY wp-config.php /var/www/html/wp-config.php
