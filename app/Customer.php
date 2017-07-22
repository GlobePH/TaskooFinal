<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    
    protected $guard = 'customers';
    protected $table = 'customer_acc';
    
    public function profile()
    {
    	return $this->hasOne('App\CustomerProfile');
    }
}
