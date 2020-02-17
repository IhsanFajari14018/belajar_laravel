# Tutorial 23 - Relasi One To One Eloquent
https://www.malasngoding.com/relasi-one-to-one-eloquent/

 - Create table using migration and create dummy with seeder.
   ex: php artisan make:migration create_telepon_table
   ex: php artisan make:seeder TeleponSeeder
   ex: php artisan db:seed --class=TeleponSeeder
 - Create model pengguna & Telepon
   ex: php artisan make:model Pengguna
 - Create Controller Pengguna
   ex: php artisan make:controller ControllerPengguna
 - Call phone data from table pengguna. It's possible because linked by hasOne() and belongsTo()
