# Administrador PDF

<p align="center">
Este archivo ReadMe proporciona información sobre cómo instalar y ejecutar el proyecto en un ambiente local utilizando GitHub.
</p>

## Requisitos previos



- PHP >= 7.3.
- Composer
- MySQL
- Git



## Instalación

1.	Clonar el repositorio del proyecto desde GitHub:<br>
`git clone https://github.com/Esteban2711/administradorPdf.git`

2.	Acceder al directorio del proyecto:<br>
`cd administradorPDf `


3.	Instalar todas las dependencias requeridas del proyecto utilizando Composer: <br>
`composer install `


4.	Copiar el archivo de configuración de Laravel: <br>
`cp .env.example .env `


5.	Generar la clave de aplicación de Laravel: <br>
`php artisan key:generate `


6.	Editar el archivo .env con la información de la base de datos: <br>
	`DB_CONNECTION=mysql`<br>
	`DB_HOST=127.0.0.1`<br>
	`DB_PORT=3306`<br>
    `DB_DATABASE=Administracion_pdf`<br>
    `DB_USERNAME=nombre_de_usuario`<br>
    `DB_PASSWORD=contraseña `


7.	Ejecutar las migraciones de la base de datos: <br>
`php artisan migrate `


8.	Iniciar el servidor de Laravel: <br>
`php artisan serve `


9.	Acceder a la aplicación a través de la dirección URL: <br>
`http://localhost:8000 `

Nota: Si al ver el pdf sale erro 404 ejecutar el siguiente comando <br>
`php artisan storage:link`


## Uso

Este software está diseñado para ayudar a la administracion de archivos PDF.



## Contribución

Si deseas contribuir al proyecto, envía una solicitud de extracción (pull request) y se revisará tu código.



## Licencia

Este proyecto se encuentra bajo la licencia MIT.
