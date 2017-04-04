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
Route::post('pengaduan', 'PengaduanController@create');
// PENGADUAN

// PASANG DAYA
Route::resource('pasang-daya', 'PengajuanDayaController');
Route::post('pasang-daya', 'PengajuanDayaController@create');
// PASANG DAYA

// UBAH DAYA
Route::get('ubah-daya', function (){
	return view('ubah_daya/index');
});
// UBAH DAYA


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

// TAMBAH DAYA
Route::get('administrator/tambah-daya', 'PengajuanDayaController@admin');
Route::post('administrator/tambah-daya-tambah', 'PengajuanDayaController@create');
Route::patch('administrator/tambah-daya-ubah/{id}', 'PengajuanDayaController@update');
Route::delete('administrator/tambah-daya-hapus/{id}', 'PengajuanDayaController@destroy');
// TAMBAH DAYA

// UBAH DAYA
Route::get('administrator/ubah-daya', 'ubahDayaController@admin');
Route::post('administrator/ubah-daya-tambah', 'ubahDayaController@create');
Route::patch('administrator/ubah-daya-ubah/{id}', 'ubahDayaController@update');
Route::delete('administrator/ubah-daya-hapus/{id}', 'ubahDayaController@destroy');
// UBAH DAYA
