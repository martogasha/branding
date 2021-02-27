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
Route::get('/','ClientController@index');
Route::get('shop','ClientController@shop');
Route::get('about','ClientController@about');
Route::get('services','ClientController@services');
Route::get('digitalMarketing','ClientController@digitalMarketing');
Route::get('corporate','ClientController@corporate');
Route::get('graphic','ClientController@graphic');
Route::get('large','ClientController@large');
Route::get('promotional','ClientController@promotional');
Route::get('signage','ClientController@signage');
Route::get('digitalPrinting','ClientController@digitalPrinting');
Route::get('offset','ClientController@offset');
Route::get('productDetail/{id}','ClientController@productDetail');
Route::resource('cart','CartController');
Route::post('cartOne','CartController@cartOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('addByOne/{id}','CartController@addByOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('cartRemove/{id}','CartController@removeItem');
Route::get('checkout','ClientController@checkout');
Route::get('success','ClientController@success');
Route::get('ll','ClientController@login');
Route::get('rr','ClientController@register');
Route::get('Login','AuthController@login');
Route::get('Register','AuthController@register');
Route::post('userLogin','AuthController@userLogin')->name('userLogin');
Route::post('userRegister','AuthController@userRegister')->name('userRegister');
Route::get('getProductDetail','ClientController@getProductDetail');

//Admin Controller
Route::get('admin','AdminController@admin');
Route::get('products','AdminController@products');
Route::get('orders','AdminController@orders');
Route::get('reviews','AdminController@reviews');
Route::get('editProduct/{id}','AdminController@edit');
Route::post('editProd','AdminController@editProd');
Route::post('deleteProduct','AdminController@delete');
Route::post('storeCategory','AdminController@storeCategory')->name('storeCategory');
Route::post('storeProducts','AdminController@storeProduct')->name('storeProduct');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
