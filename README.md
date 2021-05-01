# Veterinaria: Mantenimiento de Proyecto

CUCEI | Universidad de Guadalajara  
I5900 - Ingeniería de Software II

## Descripción

Este repositorio contiene el proyecto realizado para el mantenimiento de un software

## Instalación

1. Clonar proyecto `git clone https://github.com/ROALOCH/cucei-veterinaria.git`
2. Instalar dependiencias mediante composer: `composer install`
3. Instalar dependiencias mediante npm: `npm install`
4. Crear archivo de variables de entorno: `cp .env.example .env`
5. Crear llave: `php artisan key:generate`
6. Configurar nombre de base de datos en _.env_ y ejecutar migraciones: `php artisan migrate`
7. Iniciar aplicación con `php artisan serve`

Una vez ejecutado el comando anterior, el proyecto se puede visualizar en [http://localhost:8000](http://localhost:8000)

## Uso

Demo del proyecto accesible en [Heroku](#).

## Licencia

[MIT](https://github.com/ROALOCH/cucei-veterinaria/blob/main/LICENSE)
