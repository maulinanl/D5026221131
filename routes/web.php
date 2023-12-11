<?php

use Illuminate\Support\Facades\Route;

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
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

//pertemuan 1
Route::get('hello2', function () {
    return view('hello2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('news', function () {
    return view('news');
});

Route::get('style', function () {
    return view('style');
});


//pertemuan 2
Route::get('pagination', function () {
    return view('pagination');
});

Route::get('responsive', function () {
    return view('responsive');
});


//pertemuan5
Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('validasi1', function () {
    return view('validasi1');
});


//linktree
Route::get('linktree', function () {
    return view('linktree');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('websiteku', function () {
    return view('websiteku');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show','App\Http\Controllers\DosenController@showBlog');


// Route::get('/tambah/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/views/{id}','App\Http\Controllers\PegawaiController@views');

// Route::get('/pegawai', [PegawaiController::class, 'index']);
// Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
// Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
// Route::post('/pegawai/update', [PegawaiController::class, 'update']);
// Route::post('/pegawai/store', [PegawaiController::class, 'store']);
// Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

//route CRUD
Route::get('/tumbuhan','App\Http\Controllers\tumbuhanController@index');
Route::get('/tumbuhan/tambah','App\Http\Controllers\tumbuhanController@tambah');
Route::post('tumbuhan/store','App\Http\Controllers\tumbuhanController@store');
Route::get('tumbuhan/edit/{id}','App\Http\Controllers\tumbuhanController@edit');
Route::post('tumbuhan/update','App\Http\Controllers\tumbuhanController@update');
Route::get('tumbuhan/hapus/{id}','App\Http\Controllers\tumbuhanController@hapus');
Route::get('/tumbuhan/cari','App\Http\Controllers\tumbuhanController@cari');
Route::get('tumbuhan/views/{id}','App\Http\Controllers\tumbuhanController@view');

//route CRUD
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//route CRUD
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/cari','App\Http\Controllers\KaryawanController@cari');
Route::get('karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');


