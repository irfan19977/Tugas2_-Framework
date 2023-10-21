<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function show()
    {
        $articles = Artikel::table('artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }

   public function index() {
    $data_artikel=Artikel::all();
    return view('belajar/blog',compact('data_artikel'));
   }
   
   public function detail($id)
    {
        $article = Artikel::all()->where('id', $id)->first();
        return view('belajar/detail', ['article'=>$article]);
    }
}
