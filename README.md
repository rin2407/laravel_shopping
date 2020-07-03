composer install
npm install
cp .env.example .env
=====config .env =======
-------DB----------
DB_DATABASE=laravel_shopping
DB_USERNAME=root
DB_PASSWORD=
-------end DB ------------
--------MAIL-------------
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=noreplyshoppinglyn@gmail.com
MAIL_PASSWORD=Linh2510
MAIL_ENCRYPTION=tls
----------END MAIL-----------

php artisan key:generate
php artisan config:clear
php artisan config:cache
php artisan migrate
php artisan db:seed
php artisan serve 