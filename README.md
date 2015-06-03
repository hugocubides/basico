Básico
======

Es una sencilla implementación de un sistema ACL usando las funciones que trae por defecto Laravel 5 para el logueo y recuperación de contraseña.
La gestión de roles y permisos estará implementado con el paquete entrust.

### Paquetes incluidos
* Laravel 5.*
* [Entrust](https://github.com/Zizaco/entrust) 
* [Flatly Theme](http://bootswatch.com/flatly/)
* [illuminate/html](https://github.com/illuminate/html)

### Características
* Layout básico en bootstrap usando blade
* Login de usuario, formulario de registro y formulario de olvido la contraseña
* Tablero en blanco para tu proyecto
* Perfil básico de usuario
* Localización básica para inglés y español latino

### Instalación
A continuación explico los pasos para lograr una instalación exitosa:

1) Clonar el repositorio
	
	git clone https://github.com/CiudadRed/basico.git nombre_proyecto
	
2) Crear el archivo .env y agregar la configuración necesaria para el entorno de la aplicación como los datos de conexión a la base de datos:
	
	Renombrar el archivo .env.example a .env
	Abrir y editar los parametros de configuración.

3) En el terminal ingresamos a la carpeta del proyecto y ejecutamos composer para instalar todos los paquetes y dependencias necesarios para la app:
	
	composer install

4) Genera la clave unica para tu app

	php artisan key:generate

5) Procede a ejecutar la migración para que se creen todas las tablas en la base de datos:
	
	php artisan migrate

6) Otorgue los permisos de escritura a la carpeta storage. En linux: ( depende de su instalación tal vez deba ejecutarlo con sudo )
	
	$ chmod -R 775 storage
	
7) Vaya al navegador ingrese la ruta de instalación e interactue con la app
	
### License

Basico is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
