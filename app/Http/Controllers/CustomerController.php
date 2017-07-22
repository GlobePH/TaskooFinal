<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use Carbon\Carbon;

class CustomerController extends Controller
{

	function get_gravatar( $email, $s = 256, $d = 'identicon', $r = 'g', $img = false, $atts = array() ) {
		$url = 'https://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= "?s=$s&d=$d&r=$r";
		if ( $img ) {
			$url = '<img src="' . $url . '"';
			foreach ( $atts as $key => $val )
				$url .= ' ' . $key . '="' . $val . '"';
			$url .= ' />';
		}
		return $url;
	}

	protected function getToken()
	{
		return hash_hmac('sha256', str_random(40), config('app.key'));
	}

	public function postRegister(Request $request)
	{
		$this->validate($request, [
		                'email' => 'required|unique:customer_acc|max:255',
		                'contact_number' => 'required|min:9',
		                'password' => 'required|min:8|confirmed',
		                ]);

		$email = $request['email'];
		$fname = $request['first_name'];
		$lname = $request['last_name'];
		$contact = $request['contact_number'];
		$password = bcrypt($request['password']);
		$gravatar = $this->get_gravatar( $email, $s = 256, $d = 'identicon', $r = 'g', $img = false, $atts = array());
		
		$customer = new Customer;

		$customer->first_name = $fname;
		$customer->last_name = $lname;
		$customer->email = $email;
		$customer->mobile_number = '+639'.$contact;
		$customer->password = $password;
		$customer->gravatar = $gravatar;
		$customer->created_at = Carbon::now();
		$customer->updated_at = Carbon::now();
		$customer->remember_token = $this->getToken();

		$customer->save();

		if (Auth::guard('customers')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return view('responses.success_register')->with('user', 'customer');
		}else{
			return redirect()->back()->with('invalid','Invalid Login Credentials.');
		}

	}

	public function login(Request $request)
	{	
		$this->validate($request, [
		                'email' => 'required|max:255',
		                'passsword' => 'required|min:8',
		                ]);

		if (Auth::guard('customers')->attempt(['email' => $request['email'], 'password' => $request['passsword']])) {
			return redirect('customer/dashboard');
		}else{
			return redirect()->back()->with('invalid','Invalid Login Credentials.');
		}

		return redirect()->back();
	}

	public function logout()
	{
		Auth::guard('customers')->logout();
		return redirect('/')->header('Clear-Site-Data','cache','storage','executionContexts');
	}

	public function getDashboard()
	{
		return view('customer.dashboard');
	}
}
