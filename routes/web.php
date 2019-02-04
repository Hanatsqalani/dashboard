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

Route::prefix('admin/operation')->group(function(){
	Route::get('/', 'OperationController@index');
	Route::post('/uploadfoto', 'PhotooperationController@store')->name('operation');
	Route::post('/karyawan', 'KaryawanoperationController@store')->name('karyawan');
	Route::post('/prestasi', 'PrestasioperationController@store')->name('prestasi');
	Route::resource('/delete', 'PhotooperationController');
	Route::resource('/deletekaryawan', 'KaryawanoperationController');
	Route::resource('/deleteprestasi', 'PrestasioperationController');
});

Route::prefix('admin/maintenance')->group(function(){
	Route::get('/', 'MaintenanceController@index');
	Route::post('/uploadfoto', 'PhotomaintenanceController@store')->name('maintenance');
	Route::post('/karyawan', 'KaryawanmaintenanceController@store')->name('karyawan');
	Route::post('/prestasi', 'PrestasimaintenanceController@store')->name('prestasi');
	Route::resource('/delete', 'PhotomaintenanceController');
	Route::resource('/deletekaryawan', 'KaryawanmaintenanceController');
	Route::resource('/deleteprestasi', 'PrestasimaintenanceController');
});

Route::prefix('admin/engineering')->group(function(){
	Route::get('/', 'EngineeringController@index');
	Route::post('/uploadfoto', 'PhotoengineeringController@store')->name('engineering');
	Route::post('/karyawan', 'KaryawanengineeringController@store')->name('karyawan');
	Route::post('/prestasi', 'PrestasiengineeringController@store')->name('prestasi');
	Route::resource('/delete', 'PhotoengineeringController');
	Route::resource('/deletekaryawan', 'KaryawanengineeringController');
	Route::resource('/deleteprestasi', 'PrestasiengineeringController');
});

Route::prefix('admin/logistik')->group(function(){
	Route::get('/', 'EngineeringController@index');
	Route::post('/uploadfoto', 'PhotologistikController@store')->name('logistik');
	Route::post('/karyawan', 'KaryawanlogistikController@store')->name('karyawan');
	Route::post('/prestasi', 'PrestasilogistikController@store')->name('prestasi');
	Route::resource('/delete', 'PhotologistikController');
	Route::resource('/deletekaryawan', 'KaryawanlogistikController');
	Route::resource('/deleteprestasi', 'PrestasilogistikController');
});

Route::prefix('admin/keuangan')->group(function(){
	Route::get('/', 'EngineeringController@index');
	Route::post('/uploadfoto', 'PhotokeuanganController@store')->name('keuangan');
	Route::post('/karyawan', 'KaryawankeuanganController@store')->name('karyawan');
	Route::post('/prestasi', 'PrestasikeuanganController@store')->name('prestasi');
	Route::resource('/delete', 'PhotokeuanganController');
	Route::resource('/deletekaryawan', 'KaryawankeuanganController');
	Route::resource('/deleteprestasi', 'PrestasikeuanganController');
});

Route::prefix('admin/bakorsiroh')->group(function(){
	Route::get('/', 'AnggotabakorsirohController@index');
	Route::post('/uploadfoto', 'BakorsirohController@store')->name('bakorsiroh');
	Route::post('/', 'AnggotabakorsirohController@store')->name('karyawan');
	Route::post('/updatekaryawan', 'AnggotabakorsirohController@update')->name('updateanggota');
	Route::resource('/delete', 'BakorsirohController');
	Route::resource('/deletekaryawan', 'AnggotabakorsirohController');

});

Route::prefix('admin/pik')->group(function(){
	Route::get('/', 'AnggotapikController@index');
	Route::post('/uploadfoto', 'PikController@store')->name('pik');
	Route::post('/', 'AnggotapikController@store')->name('karyawan');
	Route::post('/updatekaryawan', 'AnggotapikController@update')->name('updateanggota');
	Route::resource('/delete', 'PikController');
	Route::resource('/deletekaryawan', 'AnggotapikController');
});

Route::prefix('admin/lk3')->group(function(){
	Route::get('/', 'Anggotalk3Controller@index');
	Route::post('/uploadfoto', 'Lk3Controller@store')->name('lk3');
	Route::post('/', 'Anggotalk3Controller@store')->name('karyawan');
	Route::post('/updatekaryawan', 'Anggotalk3Controller@update')->name('updateanggota');
	Route::resource('/delete', 'Lk3Controller');
	Route::resource('/deletekaryawan', 'Anggotalk3Controller');
});

Route::prefix('admin/csr')->group(function(){
	Route::get('/', 'AnggotacsrController@index');
	Route::post('/uploadfoto', 'CsrController@store')->name('csr');
	Route::post('/', 'AnggotacsrController@store')->name('karyawan');
	Route::post('/updatekaryawan', 'AnggotacsrController@update')->name('updateanggota');
	Route::resource('/delete', 'CsrController');
	Route::resource('/deletekaryawan', 'AnggotacsrController');
});

Route::prefix('admin/sppjb')->group(function(){
	Route::get('/', 'AnggotasppjbController@index');
	Route::post('/uploadfoto', 'SppjbController@store')->name('sppjb');
	Route::post('/', 'AnggotasppjbController@store')->name('karyawan');
	Route::post('/updatekaryawan', 'AnggotasppjbController@update')->name('updateanggota');
	Route::resource('/delete', 'SppjbController');
	Route::resource('/deletekaryawan', 'AnggotasppjbController');
});

Route::prefix('admin/sppjbs')->group(function(){
	Route::get('/', 'AnggotasppjbsController@index');
	Route::post('/uploadfoto', 'SppjbsController@store')->name('sppjbs');
	Route::post('/', 'AnggotasppjbsController@store')->name('karyawan');
	Route::post('/updatekaryawan', 'AnggotasppjbsController@update')->name('updateanggota');
	Route::resource('/delete', 'SppjbsController');
	Route::resource('/deletekaryawan', 'AnggotasppjbsController');
});

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
});
