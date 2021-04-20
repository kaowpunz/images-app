# Lumen PHP Framework

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Set up database

1. clone project `https://github.com/kaowpunz/images-app.git`
2. create database `cd /images-app/docker/`
3. run docker-compose to start mariadb `docker-compose up -d`
4. database host:127.0.0.1:3306 -u root -p root

## Set up API

1. `cd /images-app`
2. migrate databaes `php artisan migrate`
3. seeder database `php artisan:seed db`
4. start API `php -S 127.0.0.1:8000 -t public`
5. running on 127.0.0.1:8000
