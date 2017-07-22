<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Worker extends Authenticatable
{
    
    protected $table = 'worker_acc';

    public function profile()
    {
    	return $this->hasOne('App\WorkerProfile');
    }

}
