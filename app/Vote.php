<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\user');
    }

    public function capture()
    {
    	return $this->hasMany('App\Capture');
    }

}
