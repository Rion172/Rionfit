<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    
    public function user() {

    	return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'userweight'
    ];


}
