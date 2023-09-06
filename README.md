# Carpeta de Aplicaciones Desarrolladas en PHP

En esta carpeta, encontrarás aplicaciones PHP que hemos desarrollado. Para ejecutar estas aplicaciones localmente, hemos configurado un entorno de desarrollo utilizando Docker y XAMPP. A continuación, te proporcionamos instrucciones sobre cómo configurar y ejecutar este entorno.

## Requisitos Previos

Antes de comenzar, asegúrate de tener los siguientes requisitos previos instalados en tu sistema:

1. [Docker](https://www.docker.com/get-started)

## Configurar y Ejecutar XAMPP

Utilizamos un contenedor Docker basado en XAMPP para ejecutar nuestras aplicaciones PHP. Ejecuta el siguiente comando para iniciar el contenedor:

```bash
docker run --name myXampp -p 41061:22 -p 41062:80 -d -v C:\Users\acer\Desktop\php_apps:/www tomsik68/xampp:8
```

Este comando crea un contenedor llamado `myXampp`, mapea los puertos 41061 para SSH y 41062 para Apache, y monta la carpeta `C:\Users\acer\Desktop\php_apps` en el contenedor en el directorio `/www`.

## Directorio de Aplicaciones

Todas las aplicaciones PHP desarrolladas se encuentran en el directorio `php_apps` en tu escritorio local (`C:\Users\acer\Desktop\php_apps`). Puedes agregar tus aplicaciones a esta carpeta para que estén disponibles en el entorno XAMPP.

Para acceder al directorio usar en el navegador:

```
http://localhost:41062/www/
```

## Acceso a phpMyAdmin

Para administrar las bases de datos MySQL, puedes acceder a phpMyAdmin en tu navegador utilizando la siguiente URL:

```

http://localhost:41062/phpmyadmin

```

Ingresa las credenciales predeterminadas (usuario: `root`, contraseña: en blanco) para acceder a phpMyAdmin.

¡Listo! Ahora tienes un entorno de desarrollo local configurado con XAMPP y Docker para ejecutar tus aplicaciones PHP y gestionar bases de datos MySQL a través de phpMyAdmin.

Recuerda que, para detener el contenedor XAMPP, puedes utilizar el comando `docker stop myXampp`.
