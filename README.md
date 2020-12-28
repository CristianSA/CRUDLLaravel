## CRUDL Laravel

Este proyecto consiste en crear una pequeña aplicación web donde podremos crear, leer, eliminar y listar elementos almecenados en nuestra base de datos.

Un proyecto simple para practicar y avanzar de forma profesional y adoptar nuevos conocimientos con el framework laravel y sus métodos de programar de forma más ágil y estructurada.

## ¿Cómo utilizar esta app?

Clonar el respositorio y abrir nuestra consola de confianza donde tendremos que situarnos dentro de la carpeta, una vez dentro ejecutaremos las siguientes líneas de comando.

Comando para clonar el repositorio:

`git clone https://github.com/CristianSA/CRUDLLaravel.git`

Una vez clonado tenemos que modificar el archivo `.env` para cambiar los parámetros de `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`.

A continuación ejecutaremos el comando siguiente que nos permitirá migrar las tablas a nuestra base de datos.

`php artisan migrate`

Seguidamente ejecutaremos el proyecto:

`php artisan serve`
