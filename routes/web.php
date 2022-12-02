<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;

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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/product-inner', [ProductController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/{category}', [ShopController::class, 'category']);
Route::get('/shop/{category}/{product}', [ShopController::class, 'product'])->name('product.show');
// Route::get('/shop', 'App\Http\Controllers\ShopController::class, 'index']);

Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::post('/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
