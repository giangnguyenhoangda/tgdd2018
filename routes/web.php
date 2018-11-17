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

Route::get('tin-tuc/{id}','NewsController@getNew')->name('getNew');

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

Route::post('nhan-vien/dang-bai','NewsController@postPostNews')->name('postPostNews');

Route::get('nhan-vien/danh-sach-tin-tuc','NewsController@getListNews')->name('getListNews');

Route::get('nhan-vien/sua-tin-tuc/{id}','NewsController@getEditNew')->name('getEditNew');

Route::post('nhan-vien/sua-tin-tuc','NewsController@postEditNews')->name('postEditNew');

Route::get('nhan-vien/xoa-tin-tuc/{id}','NewsController@getDeleteNew')->name('getDeleteNew');

Route::get('nhan-vien/dien-thoai/them','SmartPhoneController@getAddSmartPhone')->name('getAddSmartPhone');

Route::post('nhan-vien/them-dien-thoai','SmartPhoneController@postAddSmartPhone')->name('postAddSmartPhone');

Route::get('nhan-vien/dien-thoai/{id}','SmartPhoneController@getEditSmartPhone')->name('getEditSmartPhone');

Route::post('nhan-vien/sua-dien-thoai','SmartPhoneController@postEditSmartPhone')->name('postEditSmartPhone');

Route::get('nhan-vien/dien-thoai','SmartPhoneController@getListSmartPhone')->name('getListSmartPhone');

Route::get('nhan-vien/xoa-dien-thoai/{id}','SmartPhoneController@getDeleteSmartPhone')->name('getDeleteSmartPhone');

Route::get('nhan-vien/them-laptop','LaptopController@getAddLaptop')->name('getAddLaptop');

Route::post('nhan-vien/them-laptop','LaptopController@postAddLaptop')->name('postAddLaptop');

Route::get('nhan-vien/sua-laptop/{id}','LaptopController@getEditLaptop')->name('getEditLaptop');

Route::post('nhan-vien/sua-laptop','LaptopController@postEditLaptop')->name('postEditLaptop');

Route::get('nhan-vien/xoa-laptop/{id}','LaptopController@getDeleteLaptop')->name('getDeleteLaptop');

Route::get('nhan-vien/laptop','LaptopController@getListLaptop')->name('getListLaptop');

Route::get('nhan-vien/may-tinh-bang/{id}','TabletController@getEditTablet')->name('getEditTablet');

Route::post('nhan-vien/may-tinh-bang','TabletController@postEditTablet')->name('postEditTablet');

Route::get('nhan-vien/them-may-tinh-bang','TabletController@getAddTablet')->name('getAddTablet');

Route::post('nhan-vien/them-may-tinh-bang','TabletController@postAddTablet')->name('postAddTablet');

Route::get('nhan-vien/may-tinh-bang','TabletController@getListTablet')->name('getListTablet');

Route::get('nhan-vien/xoa-may-tinh-bang/{id}','TabletController@getDeleteTablet')->name('getDeleteTablet');

Route::get('nhan-vien/them-phu-kien','AccessoryController@getAddAccessory')->name('getAddAccessory');

Route::post('nhan-vien/them-phu-kien','AccessoryController@postAddAccessory')->name('postAddAccessory');

Route::get('nhan-vien/phu-kien/{id}','AccessoryController@getEditAccessory')->name('getEditAccessory');

Route::post('nhan-vien/phu-kien','AccessoryController@postEditAccessory')->name('postEditAccessory');

Route::get('nhan-vien/phu-kien','AccessoryController@getListAccessory')->name('getListAccessory');

Route::get('nhan-vien/xoa-phu-kien/{id}','AccessoryController@getDeleteAccessory')->name('getDeleteAccessory');

Route::post('nhan-vien/doi-mat-khau','EmployeeController@postChangePass')->name('postChangePass');

Route::post('nhan-vien/sua-thong-tin','EmployeeController@postChangeInfoE')->name('postChangeInfoE');

Route::get('admin/dang-nhap','AdminController@getLogin')->name('getAdminLogin');

Route::get('admin/trang-chu','AdminController@getHome')->name('getAdminHome');

Route::get('admin/them-nhan-vien','EmployeeController@getAddEmployee')->name('getAddEmployee');

Route::get('admin/nhan-vien','EmployeeController@getEmployees')->name('getEmployees');

Route::get('thong-ke/doanh-so','StatisticController@getSaleStatistic')->name('getSaleStatistic');

Route::post('admin/them-nhan-vien','EmployeeController@postAddEmployee')->name('postAddEmployee');

Route::get('admin/sua-nhan-vien/{id}','EmployeeController@getEditEmployee')->name('getEditEmployee');

Route::post('admin/sua-nhan-vien','EmployeeController@postEditEmployee')->name('postEditEmployee');

Route::post('tin-tuc/them-binh-luan','CommentController@postAddCommentNew')->name('postAddCommentNew');


