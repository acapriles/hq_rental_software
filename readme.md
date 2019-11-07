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

## Comandos para verificar el funcionamiento del sistema:
- php artisan serve
- php artisan send:email
- php artisan queue:listen
- php artisan schedule:run

## Comentario final:
El sistema hace uso de la cuenta de correo que se configure en el archivo **.env** para enviar y recibir los correos que se generen a través de la aplicación.