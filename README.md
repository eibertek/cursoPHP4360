Repositorio de ejemplo / apuntes de la clase

# Conceptos generales:

## Donde empezar

Al bajar este repositorio en la carpeta htdocs, ahi tendran listo para levantar el servicio Apache e ir al navegador a la pagina http://localhost/home_banking

el archivo principal que abrira cuando vayan a esa direccion es index.php

### agregar php a la lista de variables de entorno

esto se hace entrando a las variables de entorno del sistema y poniendo el directorio donde se encuentre php.exe (en mi caso esta en C:\xampp\php)

## Manejo de Paquetes externos o third party

para instalar proximas librerias vamos a utilizar un manejador de paquetes llamado composer:

https://getcomposer.org/download/

Se instala con los siguientes comandos:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

esto te baja un archivo llamado composer.phar

