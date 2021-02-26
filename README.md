# Formulario de ventas inbound

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

debes tener la versión de PHP mayor o igual a la 7.2.5. para mas información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x

debes tener instalado composer en tu equipo: https://getcomposer.org/

si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.

Pasos para instalar este proyecto correctamente:

descarga este proyecto o clónalo con el comando:
git clone git://github.com/schacon/grit.git

ejecutar el comando:
composer install

copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando:
cp .env.example .env

debemos generar una nueva llave de laravel con el siguiente comando:
php artisan key:generate

Configura la nueva base de datos modificando el archivo ".env":
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=laravel_jhonatan_permisos DB_USERNAME=root DB_PASSWORD=

ejecuta php artisan migrate

ejecuta npm install 

ejecuta npm run dev 

ejecuta php artisan serve y prueba el proyecto que debe funcionar.

buena suerte
"# Gestor-de-tiempos" 
