<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/login',[\App\Http\Controllers\UserController::class,'showLogin'])->name('user.show_login');
Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('user.login');
Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');



