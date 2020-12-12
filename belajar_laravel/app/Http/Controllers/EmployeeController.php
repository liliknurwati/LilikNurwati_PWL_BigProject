<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
class EmployeeController extends Controller
{
    public function index(){
        return view('empmodel');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
            'namaLengkap' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'noHandp' => 'required',
        ]);
        $emps= new employee;

        $emps->username = $request->input('username');
        $emps->password = $request->input('password');
        $emps->namaLengkap = $request->input('namaLengkap');
        $emps->jabatan = $request->input('jabatan');
        $emps->alamat = $request->input('alamat');
        $emps->noHandp = $request->input('noHandp');

        $emps->save();
        return redirect('/pegawai')->with('success', 'Data Saved');
}
}
