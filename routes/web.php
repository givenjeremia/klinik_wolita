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
    return view('layouts.conquer2');
});

Route::get('pasien_baru', function () {
    return view('pasien.baru');
});

Route::get('data_pasien', function () {
    return view('pasien.data');
});
