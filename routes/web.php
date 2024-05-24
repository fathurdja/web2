<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\kontak;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Profile;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'index'],);
Route::get('/profile',[users::class,'index'],);
Route::get('/kontak',[kontak::class,'index'],);
Route::get('/produk',[ProdukController::class,'index'],);


