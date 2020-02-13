# Tutorial 19 - Migration Laravel
https://www.malasngoding.com/migration-laravel/

 - create migration table and setting the table column
  php artisan make:migration create_mahasiswa_table
  php artisan migrate
 - rename migration table and setting the table name
  php artisan make:migration rename_table
  php artisan migrate
  - drop table and setting the targeted table to be deleted
  php artisan make:migration drop_table
  php artisan migrate
  - rollback database
  php artisan migrate:rollback  /OR/  php artisan migrate:rollback --step=5
