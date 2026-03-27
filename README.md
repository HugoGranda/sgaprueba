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
composer create-project laravel/laravel dante-sga
composer require filament/filament  --with-all-dependencies #using 5.4
php artisan key:generate #solo una vez por proyecto

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
# --Reinicio
```bash
    composer remove filament/filament filament/* #eliminar filament
```
2️⃣ BORRA MANUAL
    carpeta vendor/
    archivo composer.lock
```bash
    composer clear-cache #limpiar cache
    composer install
```
EN composer.json eliminar "@php artisan filament:upgrade"
```json
    "scripts": {
        "post-autoload-dump": [
            "@php artisan filament:upgrade"
        ]
    }
```
4️⃣ INSTALA FORZANDO VERSIÓN
```bash
    composer require filament/filament:"^4.2" --with-all-dependencies
```
5️⃣ VERIFICA (ANTES DE SEGUIR)
```bash
    composer show filament/filament
```
5️⃣ RECIÉN AHÍ
```bash
    php artisan filament:install --panels
```
# --Instalación
```bash
    
    composer require filament/filament:^4.2 --with-all-dependencies
    #Si sale error posiblemente sea porque no tienes habilitado la extension zip
        #-- ejecutar php --ini
        #-- ir a ese archivo
        #-- y quita el ; : en extension=zip
        # reinicia laragon

     php artisan filament:install --panels

    #Esto instala:

        # /app/Providers/Filament
        # /config/filament.php


    #Crear el Panel de Filament
    php artisan make:filament-panel admin
        #Verificar que tenga ->default() en app/Providers/Filament/AdminPanelProvider.php

    php artisan make:controller Api/V1/AuthController #Crear AuthController
    php artisan make:request LoginRequest # Crear LoginRequest
    #creación de rutas api y api_v1

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

php artisan vendor:publish --tag=filament-panels-views #posiblemente

# Crear Nueva Página
```bash
    php artisan make:filament-page MenuPrincipal
    #En AdminPanelProvider
        ->pages([
            \App\Filament\Pages\MenuPrincipal::class,
        ])

    app/Filament/Pages/MenuPrincipal.php #editar
    # Cambiar vista
    public function getView(): string
    {
        return 'filament.pages.dashboard';
    }

    resources/views/filament/pages/dashboard.blade.php # Crear Blade
```
