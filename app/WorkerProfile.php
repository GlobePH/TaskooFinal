<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkerProfile extends Model
{
    
    protected $table = 'worker_profile';
    
    public function primaryService()
    {
    	return $this->hasOne('App\Services');
    }

    public function secondaryService()
    {
    	return $this->hasMany('App\Services');
    }

}
