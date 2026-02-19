@echo off
echo Installing dependencies...
composer install
npm install

echo Creating .env...
copy .env.example .env

echo Generating key...
php artisan key:generate

echo Running migrations...
php artisan migrate

echo Done! Project ready.
pause