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

Route::get('/', 'PortalController@index');


Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');	
	Route::get('/file', 'AdminController@index');
	Route::post('/upload', 'AdminController@store')->name('upload');
	Route::post('/delete','AdminController@destroy')->name('delete');
	Route::get('/event', 'EventsController@index');
	Route::post('/event/create', 'EventsController@store')->name('create');
	Route::get('/bakorsiroh', 'BakorsirohController@index');
	Route::post('/bakorsiroh/upload', 'BakorsirohController@store')->name('bakorsiroh');
});


