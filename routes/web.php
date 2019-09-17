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

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'],function(){
	
	Route::resource('admin','AdminController');
	Route::resource('slide','SlideController');
	Route::resource('doitac','DoitacController');
	Route::resource('source','SourceController');
	Route::resource('contact','ContactController');
	Route::resource('calendar','CalendarController');



	Route::resource('customer','CustomerController');

	Route::resource('video','VideoController');


	Route::resource('slide2','Slide2Controller');

	Route::resource('page','PageController');
	Route::resource('subcribe','SubcribeController');
	//trang danh muc
	Route::resource('cate','CateController');
	//quang cao
	Route::resource('adcate','AdCateController');
	Route::get('qcdanhmuc/{id}/{status}','AdCateController@edits');
	//trang quan ly thong tin
	Route::resource('info','InfoController');
	//trang quan ly cai dat hien thi
	Route::get('','HomeController@index');
	//trang quan ly bai viet
	Route::resource('post','PostController');

	//quan ly menu
    Route::get('/register-file', 'RegisterFileController@index');
	Route::get('menu','PageController@menu');
	Route::get('menu/{id}/{status}','PageController@menu_show');
	Route::get('menu2/{id}/{status}','PageController@menu_show2');
	Route::get('menu3/{id}/{status}','SubcribeController@menu_show');
	Route::get('menu4/{id}/{status}','VideoController@menu_show');

});

//dang nhap
Route::group(['namespace'=>'Admin'],function(){
	//login va logout
	Route::get('admin/login','LoginController@getLogin');
	Route::post('admin/login','LoginController@postLogin');
	Route::get('admin/logout','LoginController@logout');
	//reset password
	Route::get('password/reset','LoginController@getReset');
	Route::post('password/reset','LoginController@postReset');
});


//khu vuc frontend
Route::post('subcribe','SubcribeController@index');
Route::post('subcribe2','SubcribeController@index2');

Route::get('','HomeController@index');
Route::get('tien-do/{page}.html','HomeController@tiendo');
Route::get('lien-he.html','HomeController@contact');
Route::post('lien-he.html','HomeController@postContact');
Route::get('{page}.html','HomeController@page');
Route::get('{page}/{detail}.html','HomeController@post');
Route::post('{page}/{detail}.html','HomeController@post');




