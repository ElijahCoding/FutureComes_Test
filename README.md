# FutureComes_Test

Docker
1. git clone git@github.com:ElijahCoding/FutureComes_Test.git
2. cd FutureComes_Test
3. docker run --rm -v $(pwd):/app composer install
4. docker-compose up -d
5. docker-compose exec app php config:cache
6. docker-compose exec app php artisan migrate
7. docker-compose exec app php artisan db:seed

Localhost
1. git clone git@github.com:ElijahCoding/FutureComes_Test.git
2. cd FutureComes_Test
3. composer install
4. configure .env
5. php artisan migrate && php artisan db:seed
6. php artisan serve

Login test@test.com
Password password

