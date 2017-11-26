<?php

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

Route::get('/', 'ProductController@list');

Auth::routes();

Route::post('/validation','ValidationController@register');

// product add, edit
Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('manage_product', 'ProductController@list')->name('manage_product');
        Route::get('create_product/{product_id?}', 'ProductController@create')->name('create_product');

        Route::post('create_product', 'ProductController@store')->name('store_product');
        Route::post('update_product/{product_id}', 'ProductController@update')->name('update_product');
        Route::get('delete_product/{product_id}', 'ProductController@delete')->name('delete_product');
    });
    Route::prefix('category')->group(function () {
    	Route::get('show', 'CategoryController@show')->name('show_category');
    	Route::post('create', 'CategoryController@create')->name('create_category');
    	Route::get('delete/{id}', 'CategoryController@delete')->name('delete_category');
    });
});
Route::get('view_category/{id}', 'CategoryController@view')->name('view_category');
Route::get('product/{product_id}', 'ProductController@show')->name('view_product');

Route::get('/demo', function(){
    return view('body');
});
Route::get('/product-detail', function(){
    return view('demo.product');
});

Route::get('/order', function(){
    return view('demo.order');
});

