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
Route::get('/home', 'App\Http\Controllers\PageController@getHome')->name('home');
Route::get('/about', 'App\Http\Controllers\PageController@getAbout')->name('about');
Route::get('/shop', 'App\Http\Controllers\PageController@getShop')->name('shop');
Route::get('/blog', 'App\Http\Controllers\PageController@getBlog')->name('blog');
Route::get('/contact', 'App\Http\Controllers\PageController@getContact')->name('contact');
Route::get('/pages/product-detail', 'App\Http\Controllers\PageController@getProductDetail')->name('pages.product.detail');
Route::get('/pages/blog-detail', 'App\Http\Controllers\PageController@getBlogDetail')->name('pages.blog.detail');
Route::get('/pages/shopping-cart', 'App\Http\Controllers\PageController@getShoppingCart')->name('pages.shop.cart');
Route::get('/pages/checkout', 'App\Http\Controllers\PageController@getCheckout')->name('pages.checkout');
Route::get('/pages/wishlist', 'App\Http\Controllers\PageController@getWishlist')->name('pages.wishlist');
Route::get('/pages/courses', 'App\Http\Controllers\PageController@getCourses')->name('pages.courses');



//category
// Route::get('/all-category', 'App\Http\Controllers\Product\CategoryProductController@getAllCategoryProduct')->name('all.category.product');
// Route::get('/add-category', 'App\Http\Controllers\Product\CategoryProductController@addCategoryProductForm')->name('add.category.product');
// Route::post('/add-category', 'App\Http\Controllers\Product\CategoryProductController@storeCategoryProduct')->name('store.category.product');
// Route::get('/detail-category/{category_id}', 'App\Http\Controllers\Product\CategoryProductController@detailCategoryProduct')->name('detail.category.product');
// Route::get('/edit-category/{category_id}', 'App\Http\Controllers\Product\CategoryProductController@editCategoryProductForm')->name('edit.category.product');
// Route::post('/update-category/{category_id}', 'App\Http\Controllers\Product\CategoryProductController@updateCategoryProduct')->name('update.category.product');
// Route::get('/delete-category/{category_id}', 'App\Http\Controllers\Product\CategoryProductController@destroyCategoryProduct')->name('destroy.category.product');
// // Route::get('/search', 'App\Http\Controllers\Product\CategoryProductController@searchCategoryProduct')->name('search.category.product');
// Route::post('search/name', 'App\Http\Controllers\Product\CategoryProductController@getSearchAjax')->name('search');

Route::resource('/category-cake', 'App\Http\Controllers\Cake\CategotyCakeController');
Route::resource('/slider', 'App\Http\Controllers\SliderController');
