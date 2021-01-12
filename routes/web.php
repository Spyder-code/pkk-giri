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


// Auth::routes();
Auth::routes(['register' => false]);
Route::get('/', 'UserController@index')->name('user.home');
Route::get('/berita', 'UserController@berita')->name('user.berita');
Route::get('/hukum', 'UserController@hukum')->name('user.hukum');
Route::get('/kunjung', 'UserController@kunjung')->name('user.kunjung');
Route::get('/kontak', 'UserController@kontak')->name('user.kontak');
Route::get('/pertanian', 'UserController@pertanian')->name('user.pertanian');
Route::get('/apb', 'UserController@apb')->name('user.apb');
Route::get('/rkp', 'UserController@rkp')->name('user.rkp');
Route::get('/rpjm', 'UserController@rpjm')->name('user.rpjm');
Route::get('/kesehatan', 'UserController@kesehatan')->name('user.kesehatan');
Route::get('/penduduk', 'UserController@penduduk')->name('user.penduduk');
Route::get('/wisata', 'UserController@wisata')->name('user.wisata');
Route::get('/produk', 'UserController@produk')->name('user.produk');
Route::get('/bum', 'UserController@bum')->name('user.bum');
Route::get('/berita/{berita}', 'UserController@beritaShow')->name('user.berita.show');
Route::get('/produk/{produk}', 'UserController@produkShow')->name('user.produk.show');
Route::get('/wisata/{wisata}', 'UserController@wisataShow')->name('user.wisata.show');
Route::post('/kontak', 'UserController@kontakStore')->name('user.kontak.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::resource('catatan-keluarga', 'Admin\CatatanKeluargaController');
    Route::resource('data-kegiatan', 'Admin\DataKegiatanController');
    Route::resource('data-keluarga', 'Admin\DataKeluargaController');
    Route::resource('ibu-hamil', 'Admin\IbuHamilController');
    Route::resource('tp-pkk', 'Admin\TpPkkController');
    Route::get('/profile', 'HomeController@profile')->name('profile');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
