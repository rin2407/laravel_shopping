composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan config:clear
php artisan config:cache
php artisan migrate
php artisan db:seed