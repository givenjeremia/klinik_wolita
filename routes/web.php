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

Route::get('/', function () {
    return view('layouts.conquer2');
});

//Pasien
// Route::get('pasien_baru', function () {
//     return view('pasien.baru');
// });

// Route::get('data_pasien', function () {
//     return view('pasien.data');
// });
Route::resource('pasien', PasienController::class);

//Pemeriksaan
// Route::get('pemeriksaan_baru', function () {
//     return view('pemeriksaan.baru');
// });

// Route::get('pemeriksaan_data', function () {
//     return view('pemeriksaan.riwayat');
// });
Route::resource('pemeriksaan', PemeriksaanController::class);

//Persalinan
// Route::get('persalinan_baru', function () {
//     return view('persalinan.baru');
// });

// Route::get('persalinan_data', function () {
//     return view('persalinan.riwayat');
// });
Route::resource('persalinan', Persalinan::class);


