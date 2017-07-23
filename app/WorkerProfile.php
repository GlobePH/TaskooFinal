<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkerProfile extends Model
{
    
    protected $table = 'worker_profile';
    
    public function primaryService()
    {
    	return $this->hasOne('App\Skills');
    }

    public function worker()
    {
    	return $this->belongsTo('App\Worker', 'id');
    }

    public function secondaryService()
    {
    	return $this->hasMany('App\SecondarySkills');
    }

    public function location()
    {
    	return $this->belongsTo('App\Location', 'id');
    }

}
