<?php

use Illuminate\Support\Facades\Route;
Route::view('/loginuser', 'user.login')->name('login');
Route::view('/daftaruser', 'user.register');

Route::get('/', 'App\Http\Controllers\VillasController@index');
Route::get('/properties/{id}', 'App\Http\Controllers\VillasController@show'); 
Route::get('/tentang', 'App\Http\Controllers\AdminsController@about');
Route::post('/sesi/{id}', 'App\Http\Controllers\PemesananController@sesi');
Route::post('/booking/{id}', 'App\Http\Controllers\PemesananController@store'); 

Route::group(['middleware'=>'auth'], function(){//middleware untuk security
	Route::get('/viewPayment', 'App\Http\Controllers\PembayaransController@tes');
	Route::post('/bayar', 'App\Http\Controllers\PembayaransController@proses_upload');
	Route::get('/bukti_pdf', 'App\Http\Controllers\PembayaransController@cetak_pdf');
	Route::view('/testi', 'user.tambahtesti');
	Route::post('tambahtesti', 'App\Http\Controllers\VillasController@testi');
});

Route::get('/loginadmin', function (){return view('admin.login');});
Route::post('/code', 'App\Http\Controllers\AdminsController@login');
Route::view('/daftaradmin', 'admin.daftar');
Route::post('/daftaradmin', 'App\Http\Controllers\AdminsController@daftar');

Route::group(['middleware'=>'CekLoginAdmin'], function(){ 
// Route::group(['middleware'=>'auth'], function(){//middleware untuk security
	Route::get('/admin', 'App\Http\Controllers\AdminsController@index'); 
	Route::get('editvilla/{id}', 'App\Http\Controllers\AdminsController@editvilla');
	Route::post('editvilla/update/{id}', 'App\Http\Controllers\AdminsController@updatevilla');
	Route::get('hapusvilla/{id}', 'App\Http\Controllers\AdminsController@hapusvilla');
	Route::get('/detail/{id}', 'App\Http\Controllers\VillasController@detail');
	Route::post('tambah', 'App\Http\Controllers\VillasController@store');

	Route::view('/admin/pemesanan', 'admin.pemesanan');
	Route::get('/admin/detailpesanan/{id}', 'App\Http\Controllers\PemesananController@detail');
	
	Route::get('/admin/profil', 'App\Http\Controllers\AdminsController@profil');
	Route::post('admin/editProfil/{id}', 'App\Http\Controllers\AdminsController@editProfil');
	

	Route::get('/hapuspesanan/{id}', 'App\Http\Controllers\AdminsController@hapuspesanan');

	Route::get('/admin/users', 'App\Http\Controllers\AdminsController@user');
	Route::get('/hapusUser/{id}', 'App\Http\Controllers\AdminsController@hapususer');

	Route::get('/logoutadmin', 'App\Http\Controllers\AdminsController@logout');
});

Route::post('loginuser', 'App\Http\Controllers\OtentikasiController@login');
Route::get('/logoutuser', 'App\Http\Controllers\OtentikasiController@logout');
Route::post('/daftaruser', 'App\Http\Controllers\OtentikasiController@daftar');
