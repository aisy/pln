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
Route::post('pengaduan', 'PengaduanController@store');

// BERITA & KOMENTAR
Route::resource('berita', 'BeritaController');

Route::post('komentar', 'KomentarController@store');
Route::patch('komentar', 'KomentarController@update');

// LAYANAN
Route::resource('layanan', 'LayananController');
Route::post('layanan-tambah', 'LayananController@store');




// =============================================================================
// ADMIN
// =============================================================================
Route::resource('administrator/', 'HalamanAdminController');

// BERITA
Route::get('administrator/berita', 'BeritaController@admin');
Route::post('administrator/berita-tambah', 'BeritaController@create');
Route::patch('administrator/berita-ubah/{id}', 'BeritaController@update');
Route::delete('administrator/berita-hapus/{id}', 'BeritaController@destroy');
// BERITA

// PENGADUAN
Route::get('administrator/pengaduan', 'PengaduanController@admin');
Route::post('administrator/pengaduan-tambah', 'PengaduanController@create');
Route::patch('administrator/pengaduan-ubah/{id}', 'PengaduanController@update');
Route::delete('administrator/pengaduan-hapus/{id}', 'PengaduanController@destroy');
// PENGADUAN

// Kelola Daya
Route::get('administrator/tambah-daya', 'PengajuanDayaController@admin');
Route::post('administrator/tambah-daya-tambah', 'PengajuanDayaController@create');
Route::patch('administrator/tambah-daya-ubah/{id}', 'PengajuanDayaController@update');
Route::delete('administrator/tambah-daya-hapus/{id}', 'PengajuanDayaController@destroy');
