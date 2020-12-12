<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\pegawai;


class bPcontroller extends Controller
{
    public function signup(){
        return view ('register');
    }

    public function appetizer(){
        return view ('appetizer');
    }
    public function pertama(){
        return view ('halamanawal');
    }
    public function review(){
        return view ('review');
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
            'namaLengkap'=>'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'noHandp'=>'required',
            'file'=>'required',
            'status'=>'required',
        ]);

        //menyimpan data file yang diupload ke variabel $file
        $file=$request->file('file');
        $nama_file=$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'Uploads';
 
        // upload file
        $file->move($tujuan_upload, $nama_file);
        
        pegawai::create([
            'username'=>$request->username,
            'password'=>$request->password,
            'namaLengkap'=>$request->namaLengkap, 
            'jabatan'=>$request->jabatan, 
            'alamat'=>$request->alamat, 
            'noHandp'=>$request->noHandp, 
            'status'=>$request->status,
            'file' =>$nama_file,
        ]);
        return redirect()->back();
    }
    
    public function auth_login(Request $request){
        $this->validate($request, 
            ['username'=>'required'],
            ['password'=>'required']
        );
        
        $user= $request->input('username');
        $pass=$request->input('password');

        $users=DB::table('pegawais')->where(['username'=>$user])->first();
        

            if($users->username == $user AND $users->password == $pass){

                if($users->jabatan=='Admin'){
                session()->put('login', 'selamat anda berhasil login');
                return redirect('/awaladmin');
            }
                else{
                    return redirect('/satu');
                }
        }
            else{
                return redirect('/satu')->with('failed', 'login gagal');
            }
       
            
    }
    
}
