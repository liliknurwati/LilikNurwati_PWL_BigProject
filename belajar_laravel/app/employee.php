<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'pegawai';

    public function pegawai(){
        return $this->belongsToMany('App\employee');
    }
}
