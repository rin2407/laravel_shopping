<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return redirect()->route('home');
});
//user
Auth::routes();
Route::get('/contact',function(){
    // dd( Config::get('app.locale'));
    return view('home.contact');
});
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
Route::get('/home.html', 'HomeController@index')->name('home')->middleware('locale');
Route::group(['prefix' =>'home','middleware' => 'locale'], function () {
    Route::get('/product/{name}.html','HomeController@show')->name('product.show');
    Route::get('/product-all.html','HomeController@all')->name('product.all');
    Route::post('/product-search-ajax','AjaxController@search');
    Route::post('/select-category-ajax','AjaxController@select_category');
    Route::get('/product-search.html','HomeController@product_search')->name('product.search');
    Route::get('/post-all.html','PostController@index')->name('post.all');
    Route::get('/post/{id}','PostController@show')->name('post.show');
});

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::group(['prefix' => 'user','middleware'=>'auth'], function () {
    Route::post('/cart','CartController@store');
    Route::get('/cart-detail.html','CartController@show')->name('cart.show');
    Route::post('/cart/quantity-inc','CartController@update')->name('cart.update');
    Route::delete('/cart/cart-delete','CartController@destroy')->name('cart.destroy');
    Route::get('/checkout/{id}','UserCheckoutController@edit')->name('checkout.edit');
    Route::post('/checkout.html','UserCheckoutController@update')->name('checkout.update');
    Route::post('/feedback.html','FeedbackController@store')->name('feedback.store');
});
// admin
Route::get('admin/login', 'Admin\LoginController@form_login')->name('login.form');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::group(['prefix' => 'admin','middleware'=>'checkadmin'], function () {
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
    Route::get('/post-add','Admin\PostController@create')->name('post.create');
    Route::post('/post-add','Admin\PostController@store')->name('post.store');
    Route::get('/post-list','Admin\PostController@index')->name('post.index');
    Route::get('/post-edit/{id}','Admin\PostController@edit')->name('post.edit');
    Route::post('/post-edit/{id}','Admin\PostController@update')->name('post.update');
    Route::delete('/post-delete','Admin\PostController@destroy')->name('post.destroy');
    Route::get('/banner-list','BannerController@index')->name('banner.index');
    Route::post('/banner-add','BannerController@store')->name('banner.store');
    Route::delete('/banner-delete','BannerController@destroy')->name('banner.destroy');
    Route::post('/banner/banner-action','BannerController@update')->name('banner.update');
    Route::get('/order-list','Admin\OrderController@index')->name('order.index');
    Route::post('/order-management/order','Admin\OrderController@update');
 });
