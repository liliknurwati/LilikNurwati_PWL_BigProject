<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empmodel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
