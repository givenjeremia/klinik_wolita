<?php

use Illuminate\Support\Facades\Route;
// KLINIK WOLITA
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



//Pasien
// Route::get('pasien_baru', function () {
//     return view('pasien.baru');
// });

// Route::get('data_pasien', function () {
//     return view('pasien.data');
// });


//Pemeriksaan
// Route::get('pemeriksaan_baru', function () {
//     return view('pemeriksaan.baru');
// });

// Route::get('pemeriksaan_data', function () {
//     return view('pemeriksaan.riwayat');
// });


//Persalinan
// Route::get('persalinan_baru', function () {
//     return view('persalinan.baru');
// });

// Route::get('persalinan_data', function () {
//     return view('persalinan.riwayat');
// });


Route::middleware(['auth'])->group(function(){
    Route::resource('pasien', PasienController::class);
    Route::resource('pemeriksaan', PemeriksaanController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('persalinan', PersalinanController::class);
    Route::resource('karyawan', UserController::class);
    Route::resource('notapemeriksaan', NotaPemeriksaanController::class);
    Route::resource('notapersalinan', NotaPersalinanController::class);
    Route::resource('trush', TrushController::class);


    
    Route::post('/pasien/getEditForm','PasienController@getEditForm')->name('pasien.getEditForm');
    Route::post('/obat/getEditForm','ObatController@getEditForm')->name('obat.getEditForm');
    Route::post('/persalinan/getEditForm','PersalinanController@getEditForm')->name('persalinan.getEditForm');
    Route::post('/pemeriksaan/getEditForm','PemeriksaanController@getEditForm')->name('pemeriksaan.getEditForm');
    
    Route::post('/notapemeriksaan/getEditForm','NotaPemeriksaanController@getEditForm')->name("notapemeriksaan.getEditForm");
    Route::post('/notapersalinan/getEditForm','NotaPersalinanController@getEditForm')->name("notapersalinan.getEditForm");
    Route::post('/user/getEditForm','UserController@getEditForm')->name("user.getEditForm");


    Route::get('/addObatToCart/{id}/{keterangan}', 'NotaPemeriksaanController@addObatToCart');
    Route::get('/restore/{type}/{id}', 'TrushController@restore');
    Route::get('/delete/{type}/{id}', 'TrushController@delete');




    Route::resource('/', HomeController::class);
    Route::resource('user', UserController::class);

    // Route::get('/', function () {
    //     return view('layouts.conquer2');
    // });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
