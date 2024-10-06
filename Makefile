db-migrate:
	php artisan migrate

db-fresh:
	php artisan m:fresh

db-seed:
	php artisan db:seed

db-migrate-seed: db-migrate db-seed

dmfs: db-fresh db-seed 

up:
	php artisan serve