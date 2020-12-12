<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table="menus";
    protected $fillable=['nama','harga','filenama','keterangan','stock'];
    
     public function menu(){
        return $this->belongsToMany('App\menu');
    }
}
