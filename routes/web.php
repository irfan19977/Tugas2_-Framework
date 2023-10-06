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
    return 'Hallo saya irfan adi prastyo NIM 21.31.0012';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Irfan Adi Prastyo", 
        "email" => "irfanadiprasetyo27@gmail.com",
        "gambar" => "bgst.jpg"
    ]);
});

Route::get('blog', function () {
    return view('blog');
});