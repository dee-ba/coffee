<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users' , [UserController::class, 'index']);
Route::get("edit/{id}", [UserController::class,'edit']);
Route::post("/edit", [UserController::class,'update']);
Route::get("delete/{id}", [UserController::class,'delete']);
Route::get("users/create", [UserController::class,'create']);
Route::post("/users", [UserController::class,'store']);





Route::get('/hot_products', [ProductController::class, 'hot_index']);
Route::get('/cold_products', [ProductController::class, 'cold_index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');