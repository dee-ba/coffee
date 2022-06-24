<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order_ItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;


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


//Product Controller Routes
Route::get('/all', [ProductController::class, 'products_index']);
Route::get('/hot_products', [ProductController::class, 'hot_index']);
Route::get('/cold_products', [ProductController::class, 'cold_index']);
Route::get('/customize/{prod}', [ProductController::class, 'customize']);
Route::get('/customize/{prod}/{id}', [ProductController::class, 'customize']);


//Cart Controller Routes
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('', [CartController::class, 'store_order_item']);
Route::post('discount', [CartController::class, 'getDiscount'])->name('cart.discount');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Footer
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

//search
Route::get('/search/', [ProductController::class, 'search']);




Route::group(['middleware' => ['auth']], function () {
	 
	//User Routes
	Route::get('/users' , [UserController::class, 'index']);
	Route::get("edit/{id}", [UserController::class,'edit']);
	Route::post("/edit", [UserController::class,'update']);
	Route::get("delete/{id}", [UserController::class,'delete']);
	Route::get("users/create", [UserController::class,'create']);
	Route::post("/users", [UserController::class,'store']);


	//Product Controller Routes
	Route::get('/products', [ProductController::class, 'index']);
	Route::get('/products/create', [ProductController::class, 'create']);
	Route::get('/products/{prod}/edit', [ProductController::class, 'edit']);
	Route::match(['put','patch'], '/products/{prod}/edit', [ProductController::class, 'update']);
	Route::post('/products', [ProductController::class, 'store']);
	Route::delete('/products/{prod}', [ProductController::class, 'destroy']);   





});

//Admin Routes
Route::get('/admins' , [AdminController::class, 'index']);
