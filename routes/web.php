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
    Route::get('manage_product', 'ProductController@list')->name('manage_product');
    Route::get('create_product', 'ProductController@create')->name('create_product');
    Route::post('create_product', 'ProductController@store')->name('store_product');
    Route::get('delete_product/{product_id}', 'ProductController@delete')->name('delete_product');
});

Route::get('product/{product_id}', 'ProductController@show')->name('view_product');