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
		return redirect('worker/dashboard');
	}elseif(Auth::guard('customers')->check()){
		return redirect('customer/dashboard');
	}
	return view('welcome');

});

Route::post('customer/login','CustomerController@login' );
Route::post('customer/register','CustomerController@postRegister' );

Route::post('worker/login','WorkerController@login' );
Route::post('worker/register','WorkerController@postRegister' );

Route::get('/getLocation', function () {
	return view('Location');
});


Route::get('worker/new', function () {
	return view('worker.index');
});
Route::get('customer/new', function () {
	return view('customer.index');
});

Route::group(['middleware' => ['web']], function () {
	Route::get('worker/logout','WorkerController@logout' );
	Route::get('worker/dashboard','WorkerController@getDashboard' );

});

Route::group(['middleware' => ['web', 'customers']], function () {
	Route::get('customer/logout','CustomerController@logout' );
	Route::get('customer/dashboard','CustomerController@getDashboard' );
	Route::post('customer/search/{type}','CustomerController@getWorkers' );
	Route::get('customer/notify/{id}','CustomerController@notifyWorker' );
	Route::get('customer/send/sms','CustomerController@sendSMS' );

});
