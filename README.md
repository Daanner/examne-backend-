# Examen Backend - Laravel API

## Tecnologías
- Laravel 12.x
- MySQL
- API REST

## Instalación

1. Clonar el repositorio: git clone : https://github.com/Daanner/examne-backend-.git

2. Instalar dependencias:
   npm install
   composer install 

3. Cambia el env. para que use mysql 

3. Ejecutar Migraciones y seeders:
    php artisan serve
    php artisan db:seed --class=EmpleadoSeeder

4. Verifica las rutas: http://127.0.0.1:8000/api/empleados