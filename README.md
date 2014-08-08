Básico
======

Es una sencilla implementación de un sistema de autorización construido con Laravel 4, usando el paquete Confide 
que es una solución hecha para recudir las tareas repetitivas que involucran la administración de usuarios como 
crear una cuenta, loguearse, cerrar la sesión, confirmar a través de email, resetear una contraseña, etc.

### Paquetes incluidos
* Laravel 4.2.*
* Laravel Debugbar 1.*
* Confide 4.0.* beta
* Bootstrap 3.2.0

### Características
Todas las incluidas en [Confide](https://github.com/Zizaco/confide#features)
* Layout básico en bootstrap usando blade
* Implementación básica del idioma español latino
* Listo para usar.

### Instalación
La instalación viene lista para usar un entorno de desarrollo con herramientas de depuración.

1) Clonar el repositorio
	
	git clone https://github.com/CiudadRed/basico.git
	
2) Configure la base de datos que usará en el archivo:
	
	app/config/local/database.php

3) Configure los parametros para el envio de correo según el servicio que tenga instalado (postfix) o externo (ej: gmail):
	
	app/config/mail.php
	
4) Indique el nombre del host (En linux use hostname) en el archivo bootstrap/start.php para activar el ambiente de desarrollo:
	
	$env = $app->detectEnvironment(array(

		'local' => array('sunombredehost'),

	));

5) Ejecute composer para instalar laravel y los paquetes requeridos
	
	$ composer install

6) Otorgue los permisos de escritura a la carpeta storage. En linux:
	
	$ sudo chmod -R 777 app/storage
	
7) Vaya al navegador e interactue con la app
	
### License

Basico is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
