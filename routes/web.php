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

//Route Guru
Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');

//Route Pengguna
Route::get('/pengguna','PenggunaController@index');             // Load data pengguna

//Route Article
Route::get('/article', 'WebController@index');

//Route Many to Many Relationship
Route::get('/anggota', 'DikiController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Encrypt and Decrypt
Route::get('/enkripsi', 'DikiController@enkripsi');
Route::get('/data', 'DikiController@data');
Route::get('/data/{data_rahasia}', 'DikiController@data_proses');

//Route hash
Route::get('/hash', 'DikiController@hash');
Route::get('/verify', 'DikiController@verify');
