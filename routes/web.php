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

Route::get('/', 'GuestController@getHome')->name('getHome');

Route::get('trang-dang-phat-trien', 'GuestController@getDevelopingPage')->name('getDevelopingPage');

Route::get('san-pham/1','ProductsController@getProduct')->name('getProduct');

Route::get('tim-kiem','ProductsController@getSearch')->name('getSearch');

Route::get('tin-tuc','NewsController@getNews')->name('getNews');

Route::get('tin-tuc/1','NewsController@getNew')->name('getNew');

Route::get('gio-hang','CartController@getCart')->name('getCart');

Route::get('uu-dai',function (){
	return view('guest.pages.nothing-found');
});
