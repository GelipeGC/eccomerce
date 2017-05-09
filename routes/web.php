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

Route::get('/', [
		'uses' => 'ProductController@getIndex',
		'as'	=> 'product.index' 
	]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{id}', [
		'uses' => 'ProductController@getAddToCart',
		'as'	=> 'product.addToCart'
	]);
Route::get('/shooping-cart', [
		'uses' => 'ProductController@getCart',
		'as'	=> 'product.shoopingCart'
	]);
Route::get('/checkout', [
	'uses'	=> 'ProductController@getCheckout',
	'as'	=> 'checkout'
	]);
Route::post('/checkout', [
	'uses'	=> 'ProductController@postCheckout',
	'as'	=> 'checkout'
	]);