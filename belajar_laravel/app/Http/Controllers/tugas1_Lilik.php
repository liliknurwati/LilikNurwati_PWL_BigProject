<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas1_Lilik extends Controller
{
    //
    public function penjumlahan(){
        $a=1;
        $b=3;
        $c=$a+$b;
        return "nilai dari penjumlahan ".$a."+".$b." adalah ".$c;
    }
}
