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

Route::resource('/kategori_artikel', 'KategoriArtikelController');
Route::get('/trashed/only/kategori_artikel', 'KategoriArtikelController@onlyTrashed')->name('kategori_artikel.onlyTrashed');
Route::get('/trashed/with/kategori_artikel', 'KategoriArtikelController@withTrashed')->name('kategori_artikel.withTrashed');
Route::patch('/restore/kategori_artikel', 'KategoriArtikelController@restore')->name('kategori_artikel.restore');
Route::delete('/delete/kategori_artikel', 'KategoriArtikelController@delete')->name('kategori_artikel.delete');

Route::resource('/kategori_berita', 'KategoriBeritaController');
// Route::get('/trashed/only/kategori_berita', 'KategoriBeritaController@onlytrashed')->name('kategori_berita.onlyTrashed');
// Route::get('/trashed/with/kategori_berita', 'KategoriBeritaController@withTrashed')->name('kategori_berita.withTrashed');
// Route::patch('/restore/kategori_berita', 'KategoriBeritaController@restore')->name('kategori_berita.restore');

Route::resource('/kategori_galeri', 'KategoriGaleriController');
// Route::get('/trashed/only/kategori_galeri', 'KategoriGaleriController@onlyTrashed')->name('kategori_galeri.onlyTrashed');
// Route::get('/trashed/with/kategori_galeri', 'KategoriGaleriController@withTrashed')->name('kategori_galeri.withTrashed');
// Route::patch('/restore/kategori_galeri', 'KategoriGaleriController@restore')->name('kategori_galeri.restore');

Route::resource('/kategori_pengumuman', 'KategoriPengumumanController');
// Route::get('/trashed/only/kategori_pengumuman', 'KategoriPengumumanController@onlyTrashed')->name('kategori_pengumuman.onlyTrashed');
// Route::get('/trashed/with/kategori_pengumuman', 'KategoriPengumumanController@withTrashed')->name('kategori_pengumuman.withTrashed');
// Route::patch('/restore/kategori_pengumuman', 'KategoriPengumumanController@restore')->name('kategori_pengumuman.restore');


Route::resource('/artikel', 'ArtikelController');
// Route::get('/trashed/only/artikel', 'ArtikelController@onlyTrashed')->name('artikel.onlyTrashed');
// Route::get('/trashed/with/artikel', 'ArtikelController@withTrashed')->name('artikel.withTrashed');
// Route::patch('/restore/artikel', 'ArtikelController@restore')->name('artikel.restore');

Route::resource('/berita', 'BeritaController');
// Route::get('/trashed/only/berita', 'BeritaController@onlytrashed')->name('berita.onlyTrashed');
// Route::get('/trashed/with/berita', 'BeritaController@withTrashed')->name('berita.withTrashed');
// Route::patch('/restore/berita', 'BeritaController@restore')->name('berita.restore');

Route::resource('/galeri', 'GaleriController');
// Route::get('/trashed/only/galeri', 'GaleriController@onlyTrashed')->name('galeri.onlyTrashed');
// Route::get('/trashed/with/galeri', 'GaleriController@withTrashed')->name('galeri.withTrashed');
// Route::patch('/restore/galeri', 'GaleriController@restore')->name('galeri.restore');

Route::resource('/pengumuman', 'PengumumanController');
// Route::get('/trashed/only/pengumuman', 'PengumumanController@onlyTrashed')->name('pengumuman.onlyTrashed');
// Route::get('/trashed/with/pengumuman', 'PengumumanController@withTrashed')->name('pengumuman.withTrashed');
// Route::patch('/restore/pengumuman', 'PengumumanController@restore')->name('pengumuman.restore');

Route::get('/foto-test', function () {
    echo Form::file('submit');
});
