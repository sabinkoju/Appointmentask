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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['verify'=>true]);

Route::get('/', 'FrontEndControllers\frontEndController@index')->name('index');


Route::group(['prefix'=>'admin'],function(){
    Route::get('/index', 'AdminControllers\dashboardController@index')->name('admin-dashboard');
    Route::resource('/user', 'AdminControllers\UserController');
});

