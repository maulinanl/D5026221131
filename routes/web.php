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


Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
