<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data=['judul'=>'ini adalah halaman Home',
    'nama'=>'Fathur Rizqi S.Djafar'];

    return view('home')->with($data);
    }
}
