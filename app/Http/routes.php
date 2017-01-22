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


// USER

Route::get('/', function (){
    return view('halaman_awal/index');
});

Route::get('/halaman-utama', function (){
    return view('halaman_awal/index');
});

Route::get('keluhan', function (){
	return view('pengaduan/index');
});

Route::get('ubah-daya', function (){
	return view('ubah_daya/index');
});

Route::get('pasang-baru', function (){
	return view('pemasangan/index');
});


// ADMIN
Route::get('administrator/', function (){
	return view('ubah_daya/index');
});

Route::get('administrator/', function (){
	return view('ubah_daya/index');
});