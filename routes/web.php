<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kontak;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Profile;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'],);
Route::get('/profile', [users::class, 'index'],);
Route::get('/kontak', [kontak::class, 'index'],);
Route::get('/produk', [ProdukController::class, 'index'],);
Route::get('/course', [CoursesController::class, 'index'],);
Route::get('/book', [bookController::class, 'index'],);
Route::get('/order', [OrderController::class, 'index'],);
