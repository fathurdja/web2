<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontak extends Controller
{
public function index(){

    $data=['nomor'=>'082278316363',
'judul'=>'Ini adalah halaman Kontak'];
    return view('kontak')->with($data);
}    //
}
