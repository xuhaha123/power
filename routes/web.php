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

Auth::routes();

Route::get('/home', 'HomeController@index');
//
Route::get('admin/login','Admin\IndexController@showLoginForm');
Route::get('admin/forgetpass','Admin\IndexController@forgetpass');
Route::post('admin/forgetpass','Admin\IndexController@sendEmail');
Route::post('admin/login','Admin\IndexController@login');
Route::get('admin/index','Admin\IndexController@index');
Route::get('admin/useradd','Admin\UserController@useradd');
Route::post('admin/useradddo','Admin\UserController@useradddo');
Route::get('admin/userlist','Admin\UserController@userlist');
Route::get('admin/userdel','Admin\UserController@userdel');
Route::get('admin/useredit','Admin\UserController@useredit');
Route::post('admin/userupdate','Admin\UserController@userupdate');
Route::get('admin/userpass','Admin\UserController@userpass');


//Route::get('admin/login','Auth\LoginController@showLoginForm');
//Route::post('admin/dologin','Auth\LoginController@login');

