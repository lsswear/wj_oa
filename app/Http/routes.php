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

Route::auth();
Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@index');
});

Route::post('admin/login','Admin\AdminController@login');
Route::group(['as'=>'admin::','namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::get('/login', 'AdminController@showLogin');
    Route::get('/','IndexController@index');
    Route::get('/logout', 'AdminController@logout');
});


Route::group(['middleware' => 'admin','namespace'=>'Admin','prefix'=>'admin_login'], function () {
    Route::get('/userInfo', 'IndexController@userInfo');
});
