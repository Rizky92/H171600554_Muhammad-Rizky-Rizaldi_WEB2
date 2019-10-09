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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/refresh-captcha', function () {
    return captcha_src();
})->name('refresh-captcha');

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('kategori', 'KategoriController');

Route::resource('/kategori_artikel', 'KategoriArtikelController');
Route::resource('/kategori_berita', 'KategoriBeritaController');
Route::resource('/kategori_galeri', 'KategoriGaleriController');
Route::resource('/kategori_pengumuman', 'KategoriPengumumanController');

Route::resource('/artikel', 'ArtikelController');
Route::resource('/berita', 'BeritaController');
Route::resource('/galeri', 'GaleriController');
Route::resource('/pengumuman', 'PengumumanController');

Route::get('/foto-test', function () {
    echo Form::file('submit');
});
