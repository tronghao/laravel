<?php
session_start();
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});


Route::post('post', function(){
	echo "zo post";
});
Route::get('goi-view', function(){
	return view('form-post');
});

Route::get('goi-include', function(){
	return view('include');
});
*/

Route::get('', 'ThanhVienController@dangNhap');
Route::post('', 'ThanhVienController@xuLyDangNhap');
Route::get('dang-xuat', 'ThanhVienController@dangXuat');

Route::group(['middleware'=>'user'], function(){
	Route::group(['prefix'=>'user'], function(){
		Route::get('home', 'UserController@home');
	});
});

Route::group(['middleware'=>'user'], function(){
	Route::group(['prefix'=>'admin'], function(){
		Route::get('home','AdminController@home');

		Route::get('delete-tai-khoan/{id}','AdminController@deleteAccount');

		Route::get('them-tai-khoan','AdminController@addAccount');
		Route::post('them-tai-khoan','AdminController@postAddAccount');

		Route::get('edit-tai-khoan/{id}','AdminController@editAccount');
		Route::post('edit-tai-khoan/{id}','AdminController@postEditAccount');
	});
});








