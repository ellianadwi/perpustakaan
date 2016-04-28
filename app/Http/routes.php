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
});

Route::get('/create-kategori', function () {
    return view('pages.kategori.create');
});
Route::get('/create-peminjaman', function () {
    return view('pages.kategori.create');
});
Route::get('/create-detail-pinjam', function () {
    return view('pages.detailpinjam.create');
});

Route::get('kategori', 'KategoriController@index');

Route::get('kategori/{id}', 'KategoriController@show');

Route::get('detail-kategori/{id}', 'KategoriController@detail');

Route::get('edit-kategori/{id}', 'KategoriController@edit');

Route::post('kategori', 'KategoriController@store');

Route::put('kategori/{id}', 'KategoriController@update');

Route::delete('hapus-kategori/{id}', 'KategoriController@destroy');

Route::get('/data-kategori', 'KategoriController@getData');


Route::get('/kategori', ['as' => 'page.kategori', function () {
    return view('pages.kategori.index');
}]);



Route::get('peminjaman', 'PeminjamanController@index');

Route::get('peminjaman/{id}', 'PeminjamanController@show');

Route::get('detail-peminjaman/{id}', 'PeminjamanController@detail');

Route::get('edit-peminjaman/{id}', 'PeminjamanController@edit');

Route::post('peminjaman', 'PeminjamanController@store');

Route::put('peminjaman/{id}', 'PeminjamanController@update');

Route::delete('hapus-peminjaman/{id}', 'PeminjamanController@destroy');

Route::get('/data-peminjaman', 'PeminjamanController@getData');

Route::get('/peminjaman', ['as' => 'page.peminjaman', function () {
    return view('pages.peminjaman.index');
}]);


Route::get('detail-pinjam', 'DetailPinjamController@index');

Route::get('detail-pinjam/{id}', 'DetailPinjamController@show');

Route::get('detail-detail-pinjam/{id}', 'DetailPinjamController@detail');

Route::post('detail-pinjam', 'DetailPinjamController@store');

Route::put('detail-pinjam/{id}', 'DetailPinjamController@update');

Route::delete('hapus-detail-pinjam/{id}', 'DetailPinjamController@destroy');

Route::get('/data-detail-pinjam', 'DetailPinjamController@getData');
Route::get('/detail-pinjam', ['as' => 'page.detail-pinjam', function () {
    return view('pages.detailpinjam.index');
}]);


Route::get('petugas', 'PeminjamanController@index');

Route::get('petugas/{id}', 'PetugasController@show');

Route::get('detail-petugas/{id}', 'PetugasController@detail');

Route::get('edit-petugas/{id}', 'PetugasController@edit');

Route::post('petugas', 'PetugasController@store');

Route::put('petugas/{id}', 'PetugasController@update');

Route::delete('hapus-petugas/{id}', 'PetugasController@destroy');

Route::get('/data-petugas', 'PetugasController@getData');

Route::get('/petugas', ['as' => 'page.petugas', function () {
    return view('pages.petugas.index');
}]);

Route::get('/anggota-kelasx', ['as' => 'page.kelasx', function () {
    return view('pages.anggota.kelasx');
}]);
Route::get('/anggota-kelasxi', ['as' => 'page.kelasxi', function () {
    return view('pages.anggota.kelasxi');
}]);
Route::get('/anggota-kelasxii', ['as' => 'page.kelasxii', function () {
    return view('pages.anggota.kelasxii');
}]);

Route::get('/data-anggota-x', 'AnggotaController@getPageList1');
Route::get('/data-anggota-xi', 'AnggotaController@getPageList2');
Route::get('/data-anggota-xii', 'AnggotaController@getPageList3');

Route::get('/data-petugas', 'PetugasController@getData');

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
