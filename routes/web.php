<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/jenismobil', function () {
    return view('jenis');
});
Route::get('/footer', function () {
    return view('footer');
});