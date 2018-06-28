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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/dangnhap','UserController@getLogin');
Route::post('admin/dangnhap','UserController@postLogin');
Route::get('admin/dangxuat','UserController@getLogout');
Route::group(['prefix' => 'admin' /*, 'middleware' => 'checklogin'*/], function () {
    Route::get('/', 'UserController@getList');
    Route::group(['prefix' => 'users'], function () {
        Route::get('list', 'UserController@getList');
        Route::get('add', 'UserController@getAdd');
        Route::post('add', 'UserController@postAdd');
        Route::get('edit/{id}', 'UserController@getEdit');
        Route::post('edit/{id}', 'UserController@postEdit');
        Route::get('delete/{id}', 'UserController@getDel');
    });

});