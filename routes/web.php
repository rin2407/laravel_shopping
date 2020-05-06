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

Route::get('/', function () {
    return view('welcome');
});
//user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/{id}','HomeController@show')->name('product.show');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::group(['prefix' => 'user'], function () {
    Route::post('/cart','CartController@store');
    Route::get('/cart-detail','CartController@show')->name('cart.show');
    Route::post('/cart/quantity-inc','CartController@update')->name('cart.update');
    Route::delete('/cart/cart-delete','CartController@destroy')->name('cart.destroy');
    Route::get('/checkout/{id}','UserCheckoutController@edit')->name('checkout.edit');
    Route::post('/checkout/{id}','UserCheckoutController@update')->name('checkout.update');
});
// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Admin\LoginController@form_login')->name('login.form');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login');
    Route::get('/logout','Admin\LoginController@logout')->name('admin.logout');
    Route::get('/dashboard','Admin\UserController@dashboard')->name('dashboard');
    Route::get('/user-management','Admin\UserController@index')->name('user.index');
    Route::delete('/user-delete', 'Admin\UserController@destroy')->name('user.destroy');
    Route::get('/category-management','Admin\CategoryController@index')->name('category.index');
    Route::post('/category-create','Admin\CategoryController@store')->name('category.store');
    Route::post('/category-update','Admin\CategoryController@update')->name('category.update');
    Route::delete('/category-delete','Admin\CategoryController@destroy')->name('category.destroy');
    Route::get('/color-management','Admin\ColorController@index')->name('color.index');
    Route::post('/color-create','Admin\ColorController@store')->name('color.store');
    Route::post('/color-update','Admin\ColorController@update')->name('color.update');
    Route::delete('/color-delete','Admin\ColorController@destroy')->name('color.destroy');
    Route::get('/size-management','Admin\SizeController@index')->name('size.index');
    Route::post('/size-create','Admin\SizeController@store')->name('size.store');
    Route::post('/size-update','Admin\SizeController@update')->name('size.update');
    Route::delete('/size-delete','Admin\SizeController@destroy')->name('size.destroy');
    Route::get('/product-list','Admin\ProductController@index')->name('product.index');
    Route::get('/product-create','Admin\ProductController@create')->name('product.create');
    Route::post('/product-create','Admin\ProductController@store')->name('product.store');
    Route::get('/product-edit/{id}','Admin\ProductController@edit')->name('product.edit');
    Route::post('/product-edit/{id}','Admin\ProductController@update')->name('product.update');
    Route::delete('/product-delete','Admin\ProductController@destroy')->name('product.destroy');
 });
