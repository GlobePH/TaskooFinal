<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class WorkerController extends Controller
{
	protected function getToken()
	{
		return hash_hmac('sha256', str_random(40), config('app.key'));
	}

}
