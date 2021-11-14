<?php

use Illuminate\Support\Facades\Route;
Route::view('/login', 'user.login')->name('login');
Route::post('login', 'App\Http\Controllers\OtentikasiController@login');

Route::view('/daftaruser', 'user.register');
Route::post('/daftaruser', 'App\Http\Controllers\OtentikasiController@daftar');

// Route::view('/daftarAdmin', 'admin.daftar');
// Route::post('/daftaradmin', 'App\Http\Controllers\AdminsController@daftar');


Route::get('/', 'App\Http\Controllers\VillasController@index');
Route::get('/properties/{id}', 'App\Http\Controllers\VillasController@show'); 
Route::get('/tentang', 'App\Http\Controllers\AdminsController@about'); 
Route::post('/sesi/{id}', 'App\Http\Controllers\PemesananController@sesi');

Route::view('/loginadmin', 'admin.login');
Route::post('loginadmin', 'App\Http\Controllers\AdminsController@login');


Route::group(['middleware'=>'auth'], function(){
	Route::group(['middleware'=>'CekLogin:user'], function(){
		Route::view('/user-booking',  'user.booking-informations');
		Route::post('/booking/{id}', 'App\Http\Controllers\PemesananController@store'); 

		Route::get('/viewPayment', 'App\Http\Controllers\PembayaransController@tes');
		Route::post('lanjutBayar/{id}', 'App\Http\Controllers\PembayaransController@lanjut');
		Route::post('cancelBayar/{id}', 'App\Http\Controllers\PembayaransController@cancel');
		Route::post('ubahStatus/{id}', 'App\Http\Controllers\PembayaransController@ubahStatus');
		Route::post('bayar', 'App\Http\Controllers\PembayaransController@proses_upload');
		Route::get('/bukti_pdf', 'App\Http\Controllers\PembayaransController@cetak_pdf');
		Route::get('/testi', 'App\Http\Controllers\PembayaransController@testi');
		Route::post('tambahtesti', 'App\Http\Controllers\VillasController@testi');
		Route::get('/riwayat/{id}', 'App\Http\Controllers\PembayaransController@riwayat')->name('riwayat');
		Route::get('/logoutuser', 'App\Http\Controllers\OtentikasiController@logout');
	});

});
Route::group(['middleware'=>'CekLoginAdmin'], function(){ 
	Route::get('/admin', 'App\Http\Controllers\AdminsController@index');
	Route::get('/admin/villa', 'App\Http\Controllers\VillasController@tampilkanvilla'); 
	Route::get('editvilla/{id}', 'App\Http\Controllers\VillasController@editvilla');
	Route::post('editvilla/update/{id}', 'App\Http\Controllers\VillasController@updatevilla');
	Route::get('hapusvilla/{id}', 'App\Http\Controllers\VillasController@hapusvilla');
	Route::get('/detail/{id}', 'App\Http\Controllers\VillasController@detail');
	Route::post('tambah', 'App\Http\Controllers\VillasController@store');

	Route::get('/admin/pemesanan', 'App\Http\Controllers\PembayaransController@transaksi');
	Route::get('/admin/detailtransaksi/{id}', 'App\Http\Controllers\PembayaransController@detailtransaksi');

	Route::get('/admin/profil', 'App\Http\Controllers\AdminsController@profil');
	Route::post('admin/editProfil/{id}', 'App\Http\Controllers\AdminsController@editProfil');

	Route::get('/hapuspesanan/{id}', 'App\Http\Controllers\AdminsController@hapuspesanan');

	Route::get('/admin/users', 'App\Http\Controllers\AdminsController@user');
	Route::get('/hapusUser/{id}', 'App\Http\Controllers\AdminsController@hapususer');

	Route::get('/logoutadmin', 'App\Http\Controllers\AdminsController@logout');
});


