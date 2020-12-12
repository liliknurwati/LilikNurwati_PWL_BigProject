<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table="pegawais";

    protected $fillable=['username', 'password','namaLengkap', 'jabatan', 'alamat', 'noHandp', 'status', 'file'];

    public function pgw(){
        return $this->belongsToMany('App\pegawai');
    }
}
