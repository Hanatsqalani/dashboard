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
Route::get('/engineering', 'EngineeringPortalController@index');


Auth::routes();

Route::prefix('admin/operation')->group(function(){
	Route::get('/', 'OperationController@index');
	Route::post('/uploadfoto', 'PhotooperationController@store')->name('operation');
	Route::post('/karyawan', 'KaryawanoperationController@store')->name('karyawanoperation');
	Route::post('/prestasi', 'PrestasioperationController@store')->name('prestasioperation');
	Route::resource('/delete', 'PhotooperationController');
	Route::resource('/deletekaryawan', 'KaryawanoperationController');
	Route::resource('/deleteprestasi', 'PrestasioperationController');
});

Route::prefix('admin/maintenance')->group(function(){
	Route::get('/', 'MaintenanceController@index');
	Route::post('/uploadfoto', 'PhotomaintenanceController@store')->name('maintenance');
	Route::post('/karyawan', 'KaryawanmaintenanceController@store')->name('karyawanmaintenance');
	Route::post('/prestasi', 'PrestasimaintenanceController@store')->name('prestasimaintenance');
	Route::resource('/delete', 'PhotomaintenanceController');
	Route::resource('/deletekaryawan', 'KaryawanmaintenanceController');
	Route::resource('/deleteprestasi', 'PrestasimaintenanceController');
});

Route::prefix('admin/engineering')->group(function(){
	Route::get('/', 'EngineeringController@index');
	Route::post('/uploadfoto', 'PhotoengineeringController@store')->name('engineering');
	Route::post('/karyawan', 'KaryawanengineeringController@store')->name('karyawanengineering');
	Route::post('/prestasi', 'PrestasiengineeringController@store')->name('prestasiengineering');
	Route::resource('/delete', 'PhotoengineeringController');
	Route::resource('/deletekaryawan', 'KaryawanengineeringController');
	Route::resource('/deleteprestasi', 'PrestasiengineeringController');
});

Route::prefix('admin/logistik')->group(function(){
	Route::get('/', 'LogistikController@index');
	Route::post('/uploadfoto', 'PhotologistikController@store')->name('logistik');
	Route::post('/karyawan', 'KaryawanlogistikController@store')->name('karyawanlogistik');
	Route::post('/prestasi', 'PrestasilogistikController@store')->name('prestasilogistik');
	Route::resource('/delete', 'PhotologistikController');
	Route::resource('/deletekaryawan', 'KaryawanlogistikController');
	Route::resource('/deleteprestasi', 'PrestasilogistikController');
});

Route::prefix('admin/keuangan')->group(function(){
	Route::get('/', 'KeuanganController@index');
	Route::post('/uploadfoto', 'PhotokeuanganController@store')->name('keuangan');
	Route::post('/karyawan', 'KaryawankeuanganController@store')->name('karyawankeuangan');
	Route::post('/prestasi', 'PrestasikeuanganController@store')->name('prestasikeuangan');
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
	Route::post('/', 'AnggotapikController@store')->name('karyawanpik');
	Route::post('/updatekaryawan', 'AnggotapikController@update')->name('updatepik');
	Route::resource('/delete', 'PikController');
	Route::resource('/deletekaryawan', 'AnggotapikController');
});

Route::prefix('admin/lk3')->group(function(){
	Route::get('/', 'Lk3Controller@index');
	Route::post('/create', 'Lk3Controller@store')->name('lk3');
	Route::resource('/delete', 'Lk3Controller');
});

Route::prefix('admin/csr')->group(function(){
	Route::get('/', 'CsrController@index');
	Route::post('/create', 'CsrController@store')->name('csr');
	Route::resource('/delete', 'CsrController');
});

Route::prefix('admin/sppjb')->group(function(){
	Route::get('/', 'AnggotasppjbController@index');
	Route::post('/uploadfoto', 'SppjbController@store')->name('sppjb');
	Route::post('/', 'AnggotasppjbController@store')->name('karyawansppjb');
	Route::post('/updatekaryawan', 'AnggotasppjbController@update')->name('updatesppjb');
	Route::resource('/delete', 'SppjbController');
	Route::resource('/deletekaryawan', 'AnggotasppjbController');
});

Route::prefix('admin/sppjbs')->group(function(){
	Route::get('/', 'AnggotasppjbsController@index');
	Route::post('/uploadfoto', 'SppjbsController@store')->name('sppjbs');
	Route::post('/', 'AnggotasppjbsController@store')->name('karyawansppjbs');
	Route::post('/updatekaryawan', 'AnggotasppjbsController@update')->name('updatesppjbs');
	Route::resource('/delete', 'SppjbsController');
	Route::resource('/deletekaryawan', 'AnggotasppjbsController');
});

Route::prefix('admin/chart')->group(function(){
	Route::get('/', 'ChartController@index');
	Route::post('/storeeaf', 'CharteafController@store')->name('charteaf');
	Route::post('/storenphr', 'ChartnphrController@store')->name('chartnphr');
	Route::post('/storeefor', 'CharteforController@store')->name('chartefor');
	Route::post('/storeps', 'ChartpsController@store')->name('chartps');
	Route::post('/storepemeliharaan', 'ChartpemeliharaanController@store')->name('chartpemeliharaan');
	Route::post('/storeinvestasi', 'ChartinvestasiController@store')->name('chartinvestasi');
	Route::resource('/deleteeaf', 'CharteafController');
	Route::resource('/deletenphr', 'ChartnphrController');
	Route::resource('/deleteefor', 'CharteforController');
	Route::resource('/deleteps', 'ChartpsController');
	Route::resource('/deletepemeliharaan', 'ChartpemeliharaanController');
	Route::resource('/deleteinvestasi', 'ChartinvestasiController');
});

Route::prefix('admin')->group(function(){
	Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	//PhotoIntroRoute
	Route::get('/photosintro', 'PhotoIntroController@index');
	Route::post('/upload', 'PhotoIntroController@store')->name('upload');
	Route::resource('/delete','PhotoIntroController');

	//EventRoute
	Route::get('/event', 'EventsController@index');
	Route::post('/event/create', 'EventsController@store')->name('create');
	Route::resource('/event/delete', 'EventsController');
	Route::post('/updateevent', 'EventsController@update')->name('updateevent');

	//BPPRoute
	Route::get('/bpp', 'BppController@index');
	Route::post('/bpp/upload', 'BppController@store')->name('bpp');
	Route::resource('/bpp/delete', 'BppController');

	//PhotoeventRoute
	Route::get('/photosevent', 'PhotoEventController@index');
	Route::post('/photosevent/upload', 'PhotoEventController@store')->name('photoevent');
	Route::resource('/photosevent/delete', 'PhotoEventController');

	Route::get('/createadmin', 'CreateadminController@index');
	Route::post('/createadmin', 'CreateadminController@store')->name('createadmin');
	Route::resource('/createadmin/delete', 'CreateadminController');
});
