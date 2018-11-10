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

Route::get('/', function(){
    return view('welcome');
})->name('index');
Route::get('/i', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');

// Auth Created Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Edited Auth Routes
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');
});

// Products
Route::get('/products', [
    'uses' => 'ProductsController@index',
    'as' => 'store.products'
]);

Route::get('/product', [
    'uses' => 'ProductsController@viewDetails',
    'as' => 'store.product'
]);
