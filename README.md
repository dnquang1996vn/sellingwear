# sellingwear
1. Needed application list
  - xampp
  - composer
2. installing step
  	step 1: download or clone code

  	step 2: go to localhost/phpmyadmin, create new database name sellingweb, then import sellingweb.sql file

  	step 3: rename file .env.example to .env, then config db with server credential
  	DB_DATABASE=homestead
	DB_USERNAME=homestead
	DB_PASSWORD=secret

	to 
	DB_DATABASE="sellingWeb"
	DB_USERNAME="root"
	DB_PASSWORD=
	
	step 4:
	- composer install
	- php artisan key:generate
	- php artisan migrate
	- sudo chmod 777 storage
	- php artisan serve
