<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index (){
        $data=['judul'=>'ini adalah halaman profile','nama'=>'fathur Rizqi S.Djafar','nim'=>'60200122038','email'=>'fathurrizqis.djafar@gmail.com','alamat'=>'hertasning Baru'];
        return view('profile')->with($data);
    }//
}
