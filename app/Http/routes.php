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

Route::get('/admin', ['as' => 'login', 'uses' => 'PageController@getLogin']);
Route::get('/login', ['as' => 'login', 'uses' => 'PageController@getLogin']);
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'PageController@dashboard']);
Route::get('give-me-token', ['as' => 'token', 'uses' => 'PageController@token']);

// session login
Route::group(['namespace' => 'Auth', 'prefix' => 'api/v1'], function () {
    Route::get('get-login', 'AuthController@getLogin');
    Route::get('post-login', 'AuthController@getLogin');
    Route::post('post-login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
});

// Anggota

Route::get('/', ['as' => 'page.useranggota', function () {
    return view('pages.index');
}]);
Route::get('/kategori', ['as' => 'page.kategori', function () {
    return view('pages.anggota.kategori');
}]);

Route::get('/buku', ['as' => 'page.buku', function () {
    return view('pages.anggota.buku');
}]);

Route::get('/peminjaman', ['as' => 'page.peminjaman', function () {
    return view('pages.anggota.peminjaman');
}]);

Route::get('/petugas', ['as' => 'page.petugas', function () {
    return view('pages.anggota.petugas');
}]);

Route::get('/anggota', ['as' => 'page.anggota', function () {
    return view('pages.anggota.anggota');
}]);

Route::get('/data-peminjaman', ['as' => 'page.pengembalian', function () {
    return view('pages.anggota.pengembalian');
}]);

// Admin

Route::get('/home', ['as' => 'page.admin', function () {
    return view('pages.admin.index');
}]);
Route::get('/kategori2', ['as' => 'page.kategori2', function () {
    return view('pages.admin.kategori');
}]);

Route::get('/buku2', ['as' => 'page.buku2', function () {
    return view('pages.admin.buku');
}]);

Route::get('/peminjaman2', ['as' => 'page.peminjaman2', function () {
    return view('pages.admin.peminjaman');
}]);

Route::get('/petugas2', ['as' => 'page.petugas2', function () {
    return view('pages.admin.petugas');
}]);

Route::get('/anggota2', ['as' => 'page.anggota2', function () {
    return view('pages.admin.anggota');
}]);

Route::get('/data-peminjaman-admin', ['as' => 'page.pengembalian2', function () {
    return view('pages.admin.pengembalian');
}]);

Route::group(['prefix' => 'api/v1'], function () {

    Route::resource('petugas', 'PetugasController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('buku', 'BukuController');
    Route::resource('anggota', 'AnggotaController');
    Route::resource('peminjaman', 'PeminjamanController');
    Route::resource('detail-pinjam', 'DetailPinjamController');
    Route::resource('kelas', 'KelasController');
    Route::put('kembalikan-buku/{id}', 'PeminjamanController@kembali');


});
Route::get('/data-kategori', 'KategoriController@getData');
Route::get('/data-buku', 'BukuController@getData');

Route::get('/data-peminjaman', 'PeminjamanController@getData');
Route::get('/data-detail-pinjam', 'DetailPinjamController@getData');
Route::get('/data-petugas', 'PetugasController@getData');
Route::get('/data-anggota-x', 'AnggotaController@getPageList1');
Route::get('/data-anggota-xi', 'AnggotaController@getPageList2');
Route::get('/data-anggota-xii', 'AnggotaController@getPageList3');
Route::get('/data-anggota-by-kelas/{kelas}', 'AnggotaController@getListByKelas');
Route::get('/data-buku-by-kategori/{kategori}', 'BukuController@getListByKategori');
Route::get('/data-petugas', 'PetugasController@getData');
Route::get('/data-kelas', 'KelasController@getData');