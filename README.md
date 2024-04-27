# Nombre del Proyecto
pt-usuarios (prueba-tecnica-usuarios)

## Descripción

El proyecto pt-usaurios es una aplicación web desarrollada utilizando el framework Laravel, una de las herramientas más poderosas y populares para la creación de aplicaciones web en PHP. Esta aplicación utiliza el patrón MVC (Modelo-Vista-Controlador) para una estructura de código organizada y mantenible.

Como plantilla de diseño, se ha utilizado HTML5 y CSS3 para una experiencia de usuario moderna y atractiva. Además, se ha integrado Bootstrap 5, un popular framework de diseño frontend, para facilitar el desarrollo de interfaces de usuario responsivas y estilizadas.

La funcionalidad dinámica de la aplicación se ha implementado con Laravel Livewire, una librería que permite desarrollar componentes de frontend utilizando PHP y Blade, proporcionando una experiencia de desarrollo más fluida y productiva.

Para el almacenamiento de datos, se ha utilizado MySQL, un sistema de gestión de bases de datos relacional ampliamente utilizado en aplicaciones web.



## Instalación

## Requisitos

Asegúrate de tener instalado lo siguiente antes de comenzar:
- [Composer](https://getcomposer.org/download//)
- Opcional: [XAMPP](https://www.apachefriends.org/index.html) o [WampServer](https://www.wampserver.com/en/)


## Paso 1
Clona el repositorio:

## Paso 2
composer install

## Paso 3
Genera una clave de aplicación:
php artisan key:generate

## Paso 4
## .env
Copia el archivo de configuración .env.example y renómbralo a .env:
cp .env.example .env
Importante en el .env que va renombrar 
Poner la base de datos la cual es pt_usuarios

## Creación de Base de Datos
Antes de ejecutar la aplicación, asegúrate de crear una base de datos llamada pt_usuarios en tu sistema de gestión de bases de datos (por ejemplo, MySQL). Esta base de datos se utilizará para almacenar los datos de la aplicación.

php artisan migrate:fresh --seed

## Paso 5
php artisan serve