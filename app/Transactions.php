<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    
    protected $table = 'transactions';

    public function worker()
    {
    	return $this->belongsTo('App\Worker', 'worker_id', 'id');
    }

    public function customer()
    {
    	return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }


}
