<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class users extends Controller
{
    public function index(){
        $data = User::all();

        return view('profile',['data'=>$data]); 
    }
}
