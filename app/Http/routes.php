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

Route::get('/', function () {
    return view('pages.index');
//    return view('layouts.master');
});
Route::get('give-me-token',['as'=>'token','uses'=>'PageController@token']);
Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('buku', 'BukuController');
    Route::resource('anggota', 'AnggotaController');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('detail-pinjam', 'DetailPinjamController');

});
//    Route::group(['namespace' => 'BiometricPejabat'], function () {
//        Route::resource('biometric-pejabat', 'BiometricPejabatController');
//    });
