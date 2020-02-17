<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo! Selamat datang di tutorial laravel.";
});

Route::get('blog', function() {
  return view('blog');
});

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

// Route blog:
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//Route CRUD:
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');       // retrieve
Route::post('/pegawai/store','PegawaiController@store');        // add
Route::get('/pegawai/edit/{id}','PegawaiController@edit');      // load edit view
Route::post('/pegawai/update','PegawaiController@update');      // process edit
Route::get('/pegawai/delete/{id}','PegawaiController@delete');  // delete
Route::get('/pegawai/cari','PegawaiController@cari');           // search

//Route Input Validation:
Route::get('/input','MalasngodingController@input');            // Load input form
Route::post('/proses','MalasngodingController@proses');           // process

//Route CRUD Eloquent
Route::put('/pegawai/update/{id}', 'PegawaiController@update');

//Route Pengguna
Route::get('/pengguna','PenggunaController@index');             // Load data pengguna 
