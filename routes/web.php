<?php

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
Route::group(['middleware' => ['guest']], function () {
    //pengunjung
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/cekLogin', 'AuthController@cekLogin')->name('login');
    Route::get('/', 'VisitorController@homeVisit');
    Route::get('/hasilCari', 'VisitorController@hasilCari');
    Route::get('/detail/{id}', 'PageController@detailProduk');
    Route::get('/register', 'VisitorController@register');
    Route::post('/registersimpan', 'VisitorController@simpanregis');
});

Route::group(['middleware'=>['auth']],function() {
    //admin
    Route::get('/dashboard', 'PageController@dashboard');
    Route::get('/parfums', 'PageController@parfums');
    Route::get('/keranjang', 'PageController@keranjang');
    Route::get('/pemesanan', 'PageController@pemesanan');
    Route::get('/parfums/tambahParfum', 'PageController@tambahParfum');
    Route::post('/parfums/save', 'PageController@saveParfum');

    Route::get('/parfums/editParfum/{id}', 'PageController@editParfum');
    Route::put('/parfums/update/{id}', 'PageController@updateParfum');
    Route::get('/parfums/delete/{id}', 'PageController@deleteParfum');

    Route::get('/users', 'PageController@users');
    Route::get('/users/addform', 'PageController@usersaddform');
    Route::post('/users/save', 'PageController@userssave');
    Route::get('/users/delete/{id}', 'PageController@usersdelete');

    Route::get('/changespass', 'PageController@changespass');
    Route::put('/updatepass', 'PageController@updatepass');

    // Autentiasi login
    Route::get('/logout', 'AuthController@logout');

});
