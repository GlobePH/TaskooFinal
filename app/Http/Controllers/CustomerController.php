<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{

	protected function getToken()
	{
		return hash_hmac('sha256', str_random(40), config('app.key'));
	}

	public function login(Request $request)
	{	
		$this->validate($request, [
		                'email' => 'required|max:255',
		                'password' => 'required|min:4',
		                ]);

		if (Auth::guard('customers')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
			
		}else{
			die($request['password']);
		}
		return redirect()->back();
	}
}
