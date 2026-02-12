<!-- create migration -->
docker exec shit_management-app-1 php artisan migrate

<!-- to create admin -->
docker exec shit_management-app-1 php artisan db:seed --class=DatabaseSeeder
