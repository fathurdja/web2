<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(){

        $data=Book::all();
        return view('book',['data'=>$data]);
    }
}
