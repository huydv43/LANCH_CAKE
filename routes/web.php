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


Route::get('/', 'App\Http\Controllers\PageController@getHome');
Route::get('/home', 'App\Http\Controllers\PageController@getHome');
Route::get('/about', 'App\Http\Controllers\PageController@getAbout');
Route::get('/shop', 'App\Http\Controllers\PageController@getShop');
Route::get('/blog', 'App\Http\Controllers\PageController@getBlog');
Route::get('/contact', 'App\Http\Controllers\PageController@getContact');
Route::get('/pages/product-detail', 'App\Http\Controllers\PageController@getProductDetail');
Route::get('/pages/blog-detail', 'App\Http\Controllers\PageController@getBlogDetail');
Route::get('/pages/shopping-cart', 'App\Http\Controllers\PageController@getShoppingCart');
Route::get('/pages/checkout', 'App\Http\Controllers\PageController@getCheckout');
Route::get('/pages/wishlist', 'App\Http\Controllers\PageController@getWishlist');
Route::get('/pages/courses', 'App\Http\Controllers\PageController@getCourses');



// admin
Route::get('/admin', 'App\Http\Controllers\AdminController@getIndex');
