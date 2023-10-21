<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
   public function index() {
    $data_artikel=Artikel::all();
    return view('belajar/blog',compact('data_artikel'));
   }
}
