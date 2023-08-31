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
    // return view('welcome');
    return view('index');
});

Route::get('/guru', function () {
    return view('guru/data');
});

Route::get('/siswa', function () {
    return view('siswa/data');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return "Ini adalah aplikasi e-Siswa";
});