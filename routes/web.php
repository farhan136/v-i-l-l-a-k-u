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

Route::get('/', function () {
    return view('admin.login');
});
// Route::get('/', 'App\Http\Controllers\VillasController@index');

Route::get('/admin', 'App\Http\Controllers\AdminsController@index');

// Route::get('/login', 'App\Http\Controllers\VillasController@index');

Route::get('/properties/{id}', 'App\Http\Controllers\VillasController@show');

Route::get('/booking/{id}', 'App\Http\Controllers\PemesananController@store');

// Route::get('/booking-information/{id}', 'App\Http\Controllers\PemesananController@create');

Route::get('/payment/{id}', 'App\Http\Controllers\PemesananController@show');

// Route::get('/bayar/{id}', 'App\Http\Controllers\PemesananController@bayar');

Route::post('/bayar', 'App\Http\Controllers\PembayaransController@proses_upload');

Route::get('/code', 'App\Http\Controllers\AdminsController@login');

// Route::get('/', 'App\Http\Controllers\AdminsController@index');

Route::get('/admin/pemesanan', 'App\Http\Controllers\AdminsController@pesanan');

Route::post('tambah', 'App\Http\Controllers\VillasController@store');

Route::get('/detail/{id}', 'App\Http\Controllers\VillasController@detail');

Route::get('/admin/detailpesanan/{id}', 'App\Http\Controllers\PemesananController@detail');