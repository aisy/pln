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

// =============================================================================
//  PENGADUAN
// =============================================================================
Route::resource('pengaduan', 'PengaduanController');
Route::post('pengaduan', 'PengaduanController@create');

// =============================================================================
// PASANG DAYA
// =============================================================================
Route::resource('pasang-daya', 'PengajuanDayaController');
Route::post('pasang-daya', 'PengajuanDayaController@create');

// =============================================================================
// ADMIN
// =============================================================================



Route::get('ubah-daya', function (){
	return view('ubah_daya/index');
});



// ADMIN
Route::get('administrator/', function (){
	return view('admin/admin_template');
});

// Route::get('administrator/', function (){
// 	return view('ubah_daya/index');
// });
