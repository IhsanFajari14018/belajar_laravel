


# Tutorial 36 - Verifikasi Email User Laravel
https://www.malasngoding.com/verifikasi-email-user-laravel
- Setup the email in .env
- set attribute verified in controller `__construct`
- model must implements `MustVerifyEmail`

# Tutorial 35 - Kirim Email Dengan Laravel
https://www.malasngoding.com/kirim-email-dengan-laravel
- Setup the email in .env
- Using Mailable class from Laravel
- Create the blade for the body of the email. It includes passing value.
- Setup receiver from Controller

# Tutorial 34 - Error Handling Laravel
https://www.malasngoding.com/error-handling-laravel/
- Disable displaying error log to web by setting APP_DEBUG value to true
- All error log available in ../storage/logs/laravel.log
- Custom error throw with return abort()

# Tutorial 33 - Notifikasi Dengan Session Laravel
https://www.malasngoding.com/notifikasi-dengan-session-laravel/
- Create Flash Session
- Used to notify activity

# Tutorial 32 - Session Laravel
https://www.malasngoding.com/session-laravel/
- Tutorial to show, add, remove session

# Tutorial 31 - Hapus File Dengan Laravel
https://www.malasngoding.com/hapus-file-dengan-laravel
- Delete from DB (record) and Server (file)

# Tutorial 30 - Membuat Upload File Laravel
https://www.malasngoding.com/membuat-upload-file-laravel
- First tutorial, create simple upload method
- Uploaded file saved in public folder and will create new folder if the folder is not exist
- Second tutorial, upload file and record the name to DB

# Tutorial 29 - Hashing Pada Laravel
https://www.malasngoding.com/hashing-pada-laravel
- use Illuminate\Support\Facades\Hash
- hashing options can be changed in hashing.php
- hash can be used in storing password and password verificator

# Tutorial 28 - Encrypt and Decrypt Laravel
https://www.malasngoding.com/encrypt-dan-decrypt-laravel/
- use Illuminate\Support\Facades\Crypt;
- Call Encrypt: Crypt::encryptString('String')
- Call Decrypt: Crypt::decrypt($variable)
- Array can also be encrypt and decrypt

# Tutorial 27 - Membuat Reset Password Laravel Via Email
https://www.malasngoding.com/reset-password-laravel-email/
- setup .env with current mailtrap.io configuration
- type then submit in cmd: php artisan config:cache
- when successfuly sent, check your inbox in mailtrap.io

# Tutorial 26 - Membuat Login dan Register Dengan Laravel
https://www.malasngoding.com/membuat-login-dan-register-laravel/
- implement laravel Auth using: php artisan make:auth
- if command "make:auth" is not defined, do this:
  1. composer require laravel/ui
  2. php artisan ui bootstrap --auth
  3. php artisan migrate

# Tutorial 25 - Relasi Many To Many Eloquent
https://www.malasngoding.com/tutorial-laravel-25-relasi-many-to-many-eloquent/
- The Connector table (Normalization for Many to Many relationship) name, must be with _ , like 'anggota' with 'hadiah', so it named 'anggota_hadiah'
- Both models use belongsToMany()
- Multi loop in foreach, will return the relationship data
- You also can count each ammount of hadiah (array)

# Tutorial 24 - Relasi One To Many Eloquent
https://www.malasngoding.com/relasi-one-to-many-eloquent/
- Article using hasMany() then Tag using belongsTo()
- Can directly access each column of joined table, by doing foreach at variable $a->tags

# Tutorial 23 - Relasi One To One Eloquent
https://www.malasngoding.com/relasi-one-to-one-eloquent/
- Create table using migration and create dummy with seeder. ex: php artisan make:migration create_telepon_table ex: php artisan make:seeder TeleponSeeder ex: php artisan db:seed --class=TeleponSeeder
- Create model pengguna & Telepon ex: php artisan make:model Pengguna
- Create Controller Pengguna ex: php artisan make:controller ControllerPengguna
- Call phone data from table pengguna. It's possible because linked by hasOne() and belongsTo()

# Tutorial 22 - Soft Deletes Laravel
https://www.malasngoding.com/soft-deletes-laravel/
- Delete data by updating deleted_at
- Retrieve all data without retrieve the deleted_at
- Restore deleted data by setting the deleted_at to NULL
- Able to Restore Trashed Data
- Able to Delete Permanently Trashed Data

# Tutorial 21 - CRUD Laravel Menggunakan Eloquent
https://www.malasngoding.com/crud-laravel-menggunakan-eloquent/
- Change Query builder to Eloquent
- Implement CRUD with Eloquent
- Disable previous method with query builder by changing the name method with `_old`

# Tutorial 20 - Eloquent
https://www.malasngoding.com/eloquent-laravel/
- create model php artisan model make:model Pegawai -m
- create seeder php artisan make:seed PegawaiSeeder php artisan db:seed --class=PegawaiSeeder
- call Eloquent NOTES: ::all() can be print out using `@foreach` ::first() cannot be print out using `@foreach`, just directly call the variable name ::find(2), and so the rules apply like using ::first()

# Tutorial 19 - Migration Laravel
https://www.malasngoding.com/migration-laravel/
- create migration table and setting the table column `php artisan make:migration create_mahasiswa_table` `php artisan migrate`
- rename migration table and setting the table name php artisan make:migration rename_table php artisan migrate
- drop table and setting the targeted table to be deleted php artisan make:migration drop_table php artisan migrate
- rollback database php artisan migrate:rollback /OR/ php artisan migrate:rollback --step=5

# Tutorial 18 - Membuat Form Validasi Pada Laravel
https://www.malasngoding.com/membuat-form-validasi-pada-laravel/
https://laravel.com/docs/5.8/validation https://laravel-news.com/blade-error-directive
- Validate input from form
- Set validation rules
Implement the old version of blade error directive using `@if ($errors->has('email'))`
- Customize UI of form response by implement 'if else' in HTML CSS Classes to display a better information

# Tutorial 17 - Menggunakan Bootstrap Di Laravel
https://www.malasngoding.com/menggunakan-bootstrap-di-laravel/
- import bootstrap css & js
- load css styling and js script

# Tutorial 16 - Membuat Pencarian Pada Laravel
https://www.malasngoding.com/membuat-pencarian-pada-laravel/
- Doing search by submitting text into form
- Execute %LIKE% query
- Display previous search by putting the value in session and old() laravel function

# Tutorial 15 - Pagination
https://www.malasngoding.com/membuat-pagination-pada-laravel/
- Collect data with limited range using pagination()
- Display data with pagination so the data is not displayed all, but already being breakdown

# Tutorial 14 - Seeding & Faker
https://www.malasngoding.com/seeding-dan-faker-pada-laravel/
- Insert data automaticaly using class and it's method, that is already set with certain amuount or specific data, or create random data (dummy)
- Sample command to execute the seeder and faker: php artisan db:seed --class=PegawaiSeeder

# Tutorial 12 - CRUD - Delete
https://www.malasngoding.com/crud-laravel/
- Delete pegawai based on id

# Tutorial 11 - CRUD - Edit
https://www.malasngoding.com/tutorial-crud-laravel/
- Load pegawai based on id
- Put loaded data into edit form
- Update pegawai based on id

# Tutorial 10 - CRUD - Add (Input Data)
https://www.malasngoding.com/membuat-crud-dengan-laravel-part-2/
- Create form to add new pegawai
- Insert form value to table pegawai
- Redirect to page of list pegawai

# Tutorial 9 - CRUD - Get
https://www.malasngoding.com/tutorial-membuat-crud-dengan-laravel/
- Create database and table pegawai
- Retrieve data from table pegawai
- Display data to index.blade.php

# Tutorial 8 - Sistem Blade Pada Laravel
https://www.malasngoding.com/sistem-template-blade-laravel/
- create template (page that containing header, main, footer)
- passing value / page content with `@yield` to call the value / content

# Tutorial 7 - Konfigurasi Dasar Pada Laravel
https://www.malasngoding.com/konfigurasi-dasar-pada-laravel/

# Tutorial 6 - Maintenance Mode Pada Laravel
https://www.malasngoding.com/maintenance-mode-pada-laravel/

# Tutorial 5 - Request Data Pada Laravel
https://www.malasngoding.com/request-data-pada-laravel/
- passing data from URI
- learn how to use get and post

# Tutorial 4 - Passing Data Contoller Ke View Laravel
https://www.malasngoding.com/passing-data-controller-ke-view-laravel/

# Tutorial 3 - Tutorial Membuat Controller Pada Laravel
https://www.malasngoding.com/tutorial-membuat-controller-pada-laravel/

# Tutorial 2 - Belajar Route dan View Pada Laravel
https://www.malasngoding.com/belajar-route-dan-view-pada-laravel/

# Tutorial 1 - Pengertian dan Cara Install Laravel
https://www.malasngoding.com/pengertian-dan-cara-install-laravel/
