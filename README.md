# confirmation-test

##環境構築

###Dockerビルド

 1. [git clone リンク](git@github.com:saki-330/confirmation-test.git)
 2. docker-compose up -d build

###Laravel環境構築

 1. docker-compose exec php bash
 2. composer install
 3. .env.exampleファイルから.envを作成し、環境変数を変更
 4. php artisan key:generate
 5. php artisan migrate
 6. php artisan db:seed

##使用技術

 ・ php 7.4.9
 ・ Laravel 8.8329
 ・ MySQL 8.0.26

 ##URL

 ・開発環境：http://localhost/
 # confirmation-test

##環境構築
###Dockerビルド
 1. [git clone リンク](git@github.com:saki-330/confirmation-test.git)
 2. docker-compose up -d build

###Laravel環境構築
 1. docker-compose exec php bash
 2. composer install
 3. .env.exampleファイルから.envを作成し、環境変数を変更
 4. php artisan key:generate
 5. php artisan migrate
 6. php artisan db:seed

##使用技術
 ・ php 7.4.9
 ・ Laravel 8.8329
 ・ MySQL 8.0.26

 ##URL
 ・開発環境：http://localhost/
 ・phpMyAdmin：http://localhost:8080/