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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');


// Admin Route....

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'LoginController@login');
    Route::get('home', 'AdminController@index');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});
