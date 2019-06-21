<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
 	public function exercise() {

    	return $this->hasMany('App\Exercise');
    }

}
