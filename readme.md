<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Clonar el repositorio:
- https://github.com/acapriles/hq_rental_software

## Crear la Base datos preferiblemente con el siguiente comando:
- CREATE DATABASE hq_rental_software CHARACTER SET utf8 COLLATE utf8_general_ci;

## Correr los siguientes comandos dentro de la raiz del proyecto:
- composer install
- cp .env.example .env
- php artisan key:generate

## Editar el archivo **.env** y modificar las siguientes variables con su información personal:
- DB_USERNAME=
- DB_PASSWORD=
- MAIL_DRIVER=
- MAIL_HOST=
- MAIL_PORT=
- MAIL_FROM_NAME=
- MAIL_USERNAME=
- MAIL_PASSWORD=
- MAIL_ENCRYPTION=

## Editar el archivo **.env** y modificar las siguientes variables:
- APP_NAME=hq_rental_software
- DB_DATABASE=hq_rental_software
- QUEUE_CONNECTION=database

## Correr el siguiente comando dentro de la raiz del proyecto:
- php artisan migrate

## Para probar el sistema web se debe previamente ejecutar los siguientes comandos en consolas diferentes:
- php artisan serve
- php artisan queue:listen

## Para probar el comando de consola Artisan para el envío de correo se puede ejecutar la siguiente instrucción: 
- php artisan send:email

## Se debe configurar el cron del sistema para probar el envío de correos por hora o ejecutar el siguiente comando por la consola:
- php artisan schedule:run

## Comentario final:
El sistema hace uso de la cuenta de correo que se configure en el archivo **.env** para enviar y recibir los correos que se generen a través de la aplicación.
Es importante mencionar que si se va a configurar una cuenta Gmail, se recomienda configurar las siguientes variables de ambiente con la siguiente información:
- MAIL_PORT=465
- MAIL_ENCRYPTION=ssl
