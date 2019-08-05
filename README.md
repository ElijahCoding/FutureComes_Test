# FutureComes_Test

1. git clone git@github.com:ElijahCoding/FutureComes_Test.git
2. cd FutureComes_Test
3. docker run --rm -v $(pwd):/app composer install
4. docker-compose up -d
5. docker-compose exec app php config:cache
6. docker-compose exec app php artisan migrate
7. docker-compose exec app php artisan db:seed


Login test@test.com
Password password
