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
	if(Auth::check()){

	}elseif(Auth::guard('customers')->check()){
		return redirect('customer/dashboard');
	}
	return view('welcome');

});

Route::post('customer/login','CustomerController@login' );

Route::get('/getLocation', function () {
	return view('Location');
});

Route::group(['middleware' => ['web', 'customers']], function () {
	Route::get('customer/logout','CustomerController@logout' );
	Route::get('customer/dashboard','CustomerController@getDashboard' );

});
