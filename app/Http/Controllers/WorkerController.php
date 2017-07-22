<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\WorkerProfile;
use App\SecondarySkills;
use App\Location;
use Auth;
use File;
use Carbon\Carbon;

class WorkerController extends Controller
{
	protected function getToken()
	{
		return hash_hmac('sha256', str_random(40), config('app.key'));
	}

	public function postRegister(Request $request)
	{
		$email = $request['reg_w_email'];
		$fname = $request['reg_w_first_name'];
		$lname = $request['reg_w_last_name'];
		$contact = $request['reg_w_contact_no'];
		$password = bcrypt($request['reg_w_password']);
		$primary = $request['reg_w_primary'];
		$secondary = $request['reg_w_secondary'];
		$rank = $request['reg_w_rank'];
		$address = $request['reg_w_address'];
		$city = $request['reg_w_city'];
		$lat = $request['w_lat'];
		$lng = $request['w_lng'];

		if($request->hasFile('reg_w_cv') && $request->hasFile('reg_w_id')){
			$cvName = $request['reg_w_first_name'] .'-'.$request['reg_w_last_name'] . '.' . $request->file('reg_w_cv')->getClientOriginalExtension();
			$request->file('reg_w_cv')->move(public_path('files/cv/') , $cvName);

			$idName = $request['reg_w_first_name'] .'-'.$request['reg_w_last_name'] . '.' . $request->file('reg_w_cv')->getClientOriginalExtension();
			$request->file('reg_w_id')->move(public_path('files/id/') , $idName);
		}
		
		$worker = new Worker();

		$worker->first_name = $fname;
		$worker->last_name = $lname;
		$worker->email = $email;
		$worker->mobile_number = '+639'.$contact;
		$worker->password = $password;
		$worker->ip_address = request()->ip();
		$worker->created_at =  Carbon::now();
		$worker->updated_at = Carbon::now();
		$worker->remember_token = $this->getToken();

		$worker->save();

		$profile = new WorkerProfile;

		$profile->complete_address = $address;
		$profile->rank_pic = $rank.'.png';
		$profile->rank = $rank;
		$profile->primary_skill = $primary;
		$profile->skill_rate = 0;
		$profile->xp = 0;
		$profile->created_at = Carbon::now();
		$profile->updated_at = Carbon::now();

		$profile->save();

		foreach ($secondary as $key => $value) {
			$secondarySkill = new SecondarySkills;

			$secondarySkill->worker_id = $worker->id;
			$secondarySkill->skill_name = $value;
			$secondarySkill->created_at = Carbon::now();
			$secondarySkill->updated_at = Carbon::now();

			$secondarySkill->save();
		}

		$location = new Location;

		$location->locality = $city;
		$location->longitude = $lng;
		$location->latitude = $lat;
		$location->created_at = Carbon::now();
		$location->updated_at = Carbon::now();

		$location->save();
		return view('responses.success_register')->with('user', 'worker');
		
	}

	public function login(Request $request)
	{
		$this->validate($request, [
		                'email' => 'required|max:255',
		                'password' => 'required|min:4',
		                ]);

		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return redirect('customer/dashboard');
		}else{
			return redirect()->back()->with('invalid','Invalid Login Credentials.');
		}

		return redirect()->back();

	}

	public function logout()
	{
		Auth::logout();
		return redirect('/')->header('Clear-Site-Data','cache','storage','executionContexts');
	}

	public function getDashboard()
	{
		return view('worker.dashboard');
	}

}
