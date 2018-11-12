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

//// Edited Auth Routes
//Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
//    Route::get('/', function(){
//        return view('admin.index');
//    })->name('admin.index');
//});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('user.dashboard');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    // Login/Logout
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    // Password Reset Routes
    Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset','Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    // Dashboard
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

// Products
Route::get('/products', 'ProductsController@index')->name('store.products');
Route::get('/products/view/{id}', 'ProductsController@viewDetails')->name('product.view');

Route::get('/products/index', 'ProductsController@adminIndex')->name('admin.products');
Route::get('/products/create', 'ProductsController@create')->name('product.create');
Route::post('/products/create', 'ProductsController@createPost')->name('product.create-post');

Route::resource('category','CategoriesController');

// Shopping Cart
Route::get('/add-to-cart/{id}', 'ProductsController@getAddToCart')->name('product.addToCart');
Route::get('/reduce/{id}', 'ProductsController@getReduceOne')->name('product.removeOne');
Route::get('/remove/{id}', 'ProductsController@getRemoveItem')->name('product.removeAll');
Route::get('/shoppingCart', 'ProductsController@getCart')->name('product.shoppingCart');

//Check out
Route::get('/checkout', 'ProductsController@getCheckout')->name('checkout');
Route::post('/checkout', 'ProductsController@postCheckout')->name('checkout');
