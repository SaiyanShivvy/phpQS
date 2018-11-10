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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/product', 'IndexController@product')->name('product');
Route::get('/products', 'IndexController@products')->name('products');

// Auth Created Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Edited Auth Routes
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');
});
