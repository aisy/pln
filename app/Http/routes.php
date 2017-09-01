<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// =============================================================================
// HALAMAN UTAMA
// =============================================================================
Route::resource('/', 'HalamanUtamaController');
Route::resource('halaman-utama', 'HalamanUtamaController');

// PENGADUAN
Route::resource('pengaduan', 'PengaduanController');
Route::get('pengaduan/menu/{id}', 'PengaduanController@form');
Route::post('pengaduan/', 'PengaduanController@store');
Route::post('pengaduan/tunggakan', 'PengaduanController@tunggakan');

// BERITA & KOMENTAR
Route::resource('berita', 'BeritaController');
Route::get('berita/{id}', 'BeritaController@show');
Route::get('berita/detail/{id}', 'BeritaController@detailBerita');
// Route::post('komentar', 'KomentarController@store');
// Route::patch('komentar', 'KomentarController@update');

// LAYANAN
// Route::resource('layanan', 'LayananController');
// Route::post('layanan-tambah', 'LayananController@store');




// =============================================================================
// ADMIN
// =============================================================================
Route::resource('administrator/', 'HalamanAdminController');

// Login
Route::post('administrator/log', 'AdminController@log');
Route::get('administrator/logout', 'AdminController@logout');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postlogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// BERITA
Route::get('administrator/berita', 'BeritaController@admin');
Route::post('administrator/berita-tambah', 'BeritaController@create');
Route::get('administrator/berita-ubah/{id}', 'BeritaController@show');
Route::patch('administrator/berita-ubah/{id}', 'BeritaController@update');
Route::delete('administrator/berita-hapus/{id}', ['as'=>'berita.hapus_data.delete','uses'=>'BeritaController@destroy']);
// BERITA

// PENGADUAN
Route::get('administrator/pengaduan/{id}', 'PengaduanController@data_pengaduan');
Route::get('administrator/ubah-pengaduan/{id}', 'PengaduanController@show');
Route::get('administrator/konf-pengaduan/{id}', 'PengaduanController@konfirmasi');
Route::patch('administrator/konf-pengaduan/proses', 'PengaduanController@prosesKonf');
// Route::patch('administrator/ubah-pengaduan/{id}', 'PengaduanController@update');
Route::delete('administrator/hapus-pengaduan/{id}', ['as'=>'pengaduan.hapus_data.delete','uses'=>'PengaduanController@destroy']);
// PENGADUAN

// ANTRIAN
Route::get('administrator/antrian', 'AntrianController@index');

// Kelola Daya
// Route::get('administrator/tambah-daya', 'PengajuanDayaController@admin');
// Route::post('administrator/tambah-daya-tambah', 'PengajuanDayaController@create');
// Route::patch('administrator/tambah-daya-ubah/{id}', 'PengajuanDayaController@update');
// Route::delete('administrator/tambah-daya-hapus/{id}', 'PengajuanDayaController@destroy');
