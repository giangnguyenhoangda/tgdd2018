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


Route::get('nhan-vien/trang-chu','EmployeeController@getHome')->name('getEmployeeHome');

Route::get('nhan-vien/dang-nhap','EmployeeController@getLogin')->name('getLogin');

Route::get('nhan-vien/san-pham/them','ProductsController@getAddProductPage')->name('getAddProductPage');

Route::get('nhan-vien/san-pham/','ProductsController@getProductList')->name('getProductList');

Route::get('nhan-vien/dang-bai/','NewsController@getPostNews')->name('getPostNews');

Route::get('nhan-vien/thong-tin','EmployeeController@getInfo')->name('getInfo');


Route::get('admin/dang-nhap','AdminController@getLogin')->name('getAdminLogin');

Route::get('admin/trang-chu','AdminController@getHome')->name('getAdminHome');

Route::get('admin/them-nhan-vien','EmployeeController@getAddEmployee')->name('getAddEmployee');

Route::get('admin/nhan-vien','EmployeeController@getEmployees')->name('getEmployees');

Route::get('thong-ke/doanh-so','StatisticController@getSaleStatistic')->name('getSaleStatistic');

Route::post('admin/them-nhan-vien','EmployeeController@postAddEmployee')->name('postAddEmployee');

Route::get('admin/sua-nhan-vien/{id}','EmployeeController@getEditEmployee')->name('getEditEmployee');

Route::post('admin/sua-nhan-vien','EmployeeController@postEditEmployee')->name('postEditEmployee');


