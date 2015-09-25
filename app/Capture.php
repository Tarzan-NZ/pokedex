<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
    
	public function pokemon() {
		return $this->belongsTo('App\Pokemon');
	}
	public function user() {
		return $this->belongsTo('App\User');
	}
}