# SGA API - Laravel 12

API REST profesional construida con Laravel 12.

## 🚀 Requisitos

- PHP 8.3+
- Composer
- Node.js
- MySQL

## 📦 Instalación

```bash
git clone https://github.com/HugoGranda/sgaprueba.git
cd sgaprueba-api
composer install
npm install
cp .env.example .env
php artisan key:generate

## Configurar base de datos en .env

php artisan migrate
npm run dev
php artisan serve
```
## API Base
/api/v1

## 🛠 Stack

Laravel 12

PHP 8.3

MySQL

Vite

## 📌 Autor

Hugo Granda

Luego:

```bash
git add README.md
git commit -m "Add professional README"
git push

```
## Actualizar rama local
```bash
    git fetch # descarga todas las ramas del repositorio remoto.
    git checkout feature  # Cambiar a tu rama
    git pull origin feature # Bajar cambios remotos
```
## Crear una nueva funcionalidad/rama
```bash
    git checkout -b feature/nueva-funcionalidad # -b crea una nueva rama parte desde develop
    
```
## Guardar cambios

```bash
    git add . #prepara los archivos para el commit.
    git commit -m "feat: login api" #guarda los cambios en la historia de Git.

    git push --set-upstream origin feature/nueva-funcionalidad # sube la rama a GitHub y crea el enlace entre tu rama local y remota.
```

## Instalar Dependencias
```bash
    composer install ## Instalar dependencias PHP
    npm install ## Instalar dependencias frontend
    cp .env.example .env ## Crear archivo de configuración
    php artisan key:generate ## Generar la clave de Laravel
```

# Configuración BD
Configurar la base de datos 
    Editar el archivo: .env
```bash
    DB_CONNECTION=mysql
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    DB_DATABASE=sgaprueba
    DB_USERNAME=root
    DB_PASSWORD=
```

# Ejecutar migraciones
```bash
    php artisan migrate
```

# Instalar Sanctum

Sanctum es el sistema de autenticación API oficial de Laravel.

```bash
    composer require laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    php artisan migrate #Esto crea la tabla: personal_access_tokens
    php artisan make:request LoginRequest # Crear LoginRequest
    php artisan make:controller Api/V1/AuthController #Crear AuthController
```

# Agregar una columna a una tabla

```bash
    php artisan make:migration add_username_to_users_table
    #luego en el archivo de migración
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->unique()->nullable();
    });
    # Luego ejecutar:
    php artisan migrate
```

# Estructura

    Service Layer Architecture con DTO o también Laravel Clean Service Architecture

    El flujo:
    Request → Controller → Service → DTO → Model → Resource

    es básicamente una combinación de:

    Service Layer Pattern

    DTO Pattern

    Clean Architecture aplicada a Laravel

    Muchos equipos simplemente lo llaman:

    Service Layer Architecture

    Controller = orquestador
    Service = lógica
    DTO = transporte de datos
    Model = acceso a datos
    Resource = respuesta API

# Filament
```bash
    composer require filament/filament
    #Si sale error posiblemente sea porque no tienes habilitado la extension zip
        #-- ejecutar php --ini
        #-- ir a ese archivo
        #-- y quita el ; : en extension=zip
        # reinicia laragon

    php artisan filament:install

    #Esto instala:

        # /app/Providers/Filament
        # /config/filament.php


    #Crear el Panel de Filament
    php artisan make:filament-panel admin
        #Verificar que tenga ->default() en app/Providers/Filament/AdminPanelProvider.php

    #Limpiar cache
    php artisan optimize:clear
```
# Crear usuario administrador
```bash
    php artisan make:filament-user
```

# Crear el Login personalizado correctamente
```bash
    php artisan make:filament-page Login #App\Filament\Pages\Auth\Login
    #Reemplazar el Login base de Filament
```

# limpia cache

```bash
    php artisan optimize:clear
```

php artisan vendor:publish --tag=filament-panels-views
