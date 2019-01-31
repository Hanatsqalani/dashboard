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

Route::prefix('/')->group(function(){
	Route::get('/', 'PortalController@index');
});

Route::get('/bakorsiroh', 'BakorsirohPortalController@index');
Route::get('/csr', 'CsrPortalController@index');
Route::get('/keuangan', 'KeuanganPortalController@index');
Route::get('/lk3', 'Lk3PortalController@index');
Route::get('/logistik', 'LogistikPortalController@index');
Route::get('/maintenance', 'MaintenancePortalController@index');
Route::get('/operation', 'OperationPortalController@index');
Route::get('/pik', 'PikPortalController@index');
Route::get('/sppjb', 'SppjbPortalController@index');
Route::get('/sppjbs', 'SppjbsPortalController@index');


Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	//PhotoIntroRoute
	Route::get('/file', 'AdminController@index');
	Route::post('/upload', 'AdminController@store')->name('upload');
	Route::resource('/delete','AdminController');

	//EventRoute
	Route::get('/event', 'EventsController@index');
	Route::post('/event/create', 'EventsController@store')->name('create');
	Route::resource('/event/delete', 'EventsController');

	//BakorsirohRoute
	Route::get('/bakorsiroh', 'BakorsirohController@index');
	Route::post('/bakorsiroh/upload', 'BakorsirohController@store')->name('bakorsiroh');
	Route::resource('/bakorsiroh/delete', 'BakorsirohController');

	//BPPRoute
	Route::get('/bpp', 'BppController@index');
	Route::post('/bpp/upload', 'BppController@store')->name('bpp');
	Route::resource('/bpp/delete', 'BppController');

	//PhotoeventRoute
	Route::get('/photosevent', 'PhotoEventController@index');
	Route::post('/photosevent/upload', 'PhotoEventController@store')->name('photoevent');
	Route::resource('/photosevent/delete', 'PhotoEventController');

	//OperationRoute
	Route::get('/operation', 'OperationController@index');
	Route::post('/operation/create', 'OperationController@store')->name('operation');

	//MaintenanceRoute
	Route::get('/maintenance', 'MaintenanceController@index');
	Route::post('/maintenance/create', 'MaintenanceController@store')->name('maintenance');

	//EngineeringRoute
	Route::get('/engineering', 'EngineeringController@index');
	Route::post('/engineering/create', 'EngineeringController@store')->name('engineering');

	//LogistikRoute
	Route::get('/logistik', 'LogistikController@index');
	Route::post('/logistik/create', 'LogistikController@store');

	//KeuanganRoute
	Route::get('/keuangan', 'KeuanganController@index');
	Route::post('/keuangan/create', 'KeuanganController@store')->name('keuangan');
});
