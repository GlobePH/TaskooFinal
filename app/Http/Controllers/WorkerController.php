<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\WorkerProfile;
use App\SecondarySkills;
use App\Location;
use App\Transactions;
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

		$pic = "";
		if($primary == 'Mechanic'){
			$pic = 'wrench.png';
		}else if($primary == 'Carpenter'){
			$pic = 'hammer.png';
		}else if($primary == 'Electrcian'){
			$pic = 'bolt.png';
		}else if($primary == 'Programmer'){
			$pic = 'coding.png';
		}else if($primary == 'Tutor'){
			$pic = 'tutorial.png';
		}else if($primary == 'House Keeper'){
			$pic = 'broom.png';
		}else if($primary == 'Plumber'){
			$pic = 'plumbering.png';
		}else if($primary == 'Encoder'){
			$pic = 'typewriter.png';
		}

		$profile = new WorkerProfile;

		$profile->complete_address = $address;
		$profile->prof_pic = $pic;
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

		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			return view('responses.success_register')->with('user', 'worker');
		}else{
			return redirect()->back()->with('invalid','Invalid Login Credentials.');
		}

	}

	public function login(Request $request)
	{
		$this->validate($request, [
		                'email' => 'required|max:255',
		                'password' => 'required|min:4',
		                ]);

		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return redirect('worker/dashboard');
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
		$confirms = Transactions::where('worker_id', Auth::user()->id)->where('status', 'Finished')->where('w_accepted', '0')->where('c_accepted', '1')->get();
		$pendings = Transactions::where('worker_id', Auth::user()->id)->where('status', 'Pending')->get();
		$ongoings = Transactions::where('worker_id', Auth::user()->id)->where('status', 'Active')->get();
		$previous = Transactions::where('worker_id', Auth::user()->id)->where('status', 'Finished')->where('c_accepted', '1')->where('w_accepted', '1')->get();

		return view('worker.dashboard')->with(['confirms' => $confirms, 'pendings' => $pendings, 'ongoings' => $ongoings, 'previous' => $previous]);
	}

	public function moveToFinish(Request $request)
	{

		$transaction = Transactions::find($request['id']);

		// die($transaction);
		if($transaction->amount != 0){
			$transaction->w_accepted = '1';
			$transaction->save();

			if($transaction->c_accepted == 1 && $transaction->w_accepted == 1){
				$profile = WorkerProfile::find(Auth::user()->id);
				$profile->xp = $profile->xp + $transaction->remarks;
				$profile->save();

				return $profile;
			}	

		// return $transaction;		
		}

	}

}
