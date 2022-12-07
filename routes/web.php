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

Route::get('/', 'App\Http\Controllers\HomePageController@index');
Route::get('/product-inner', 'App\Http\Controllers\ProductController@index');
Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::post('/contact', 'App\Http\Controllers\ContactController@store');
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/shop/{category}', 'App\Http\Controllers\ShopController@category');
Route::get('/shop/{category}/{product}', 'App\Http\Controllers\ShopController@product');
