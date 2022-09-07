Esta plantilla fue creada con:
    Laravel version 9.27
    Jetstream
    Inertia
    VueJs

Para creala:
laravel new acc1 --jet
Actualir .env con valores correctos de BD/USER/PASS

Actualizar NPM a su ultima version
sudo wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.34.0/install.sh | bash
nvm install 18

Correr las migraciones: 
php artisan migrate

Preparara los js y css con
npm install
npm run build

