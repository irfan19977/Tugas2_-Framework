<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Models\Blog;

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
    return view('belajar/home', 
["title" => "Home"]);
});

Route::get('/portofolio', function () {
    return view('belajar/portofolio');
});

Route::get('/about', function () {
    return view('belajar/about', [
        "title" => "About",
        "name" => "Irfan Adi Prastyo", 
        "email" => "irfanadiprasetyo27@gmail.com",
        "gambar" => "bgst.jpg"
    ]);
});
Route::get('/blog', function () {
    return view('belajar.blog2', [
    "title" => "Post",
    "posts" => Blog::all()
    ]);
    });

Route::get('/blog/{slug}', function ($slug) {

        return view('belajar.post', [
        "title" => "Single Post",
        "post" =>Blog::getBySlack($slug)
        ]);
});

// Route::get('/blog', [ArtikelController::class, 'index'])->name('artikel.index');
// Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('artikel.detail');
