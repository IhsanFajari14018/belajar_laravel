# Tutorial 20 - Eloquent
https://www.malasngoding.com/eloquent-laravel/

 - create model
 php artisan model make:model Pegawai -m
 - create seeder
 php artisan make:seed PegawaiSeeder
 php artisan db:seed --class=PegawaiSeeder

 - call Eloquent
 NOTES:
 ::all() can be print out using @foreach
 ::first() cannot be print out using @foreach, just directly call the variable name
 ::find(2), and so the rules apply like using ::first()
