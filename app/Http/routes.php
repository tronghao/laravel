<?php

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

Route::get('goi-dang-nhap', function(){
	return view('dang-nhap/form-dang-nhap');
});

Route::post('goi-dang-nhap', function(){
	return view('dang-nhap/form-dang-nhap');
});



