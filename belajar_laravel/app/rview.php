<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rview extends Model
{
    protected $table="rviews";

    public function review(){
        return $this->belongsToMany('App\rview');
    }
        
}
