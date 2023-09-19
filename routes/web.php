<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

// rute untuk halaman login
Route::get('/login', function () {
    return view('login');
});

// rute untuk halaman beranda
Route::get('/beranda', function () {
    return view('beranda');
});

// rute untuk halaman peminjaman
Route::get('/peminjaman', function () {
    return view('peminjaman');
});

// rute untuk halaman pengembalian
Route::get('/pengembalian', function () {
    return view('pengembalian');
});

