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
//welcom route
Route::get('/', function () {
    return view('welcome');
});

//pegawai route
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get ('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post ('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');    
Route::get('/pegawai/cari','PegawaiController@cari');

// //form validasi 
// Route::get('/pegawai/validasiform','PegawaiController@validasiform');
// Route::post('/pegawai/proses', 'PegawaiController@proses');