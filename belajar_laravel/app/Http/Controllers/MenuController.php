<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\menu;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilmenu()
    {
        return view('menu');
    }
    public function tampilmaincourse()
    {
        $mc=menu::where('keterangan', 'maincourse')->get();
        return view('mainCourse',compact("mc"));
    }
    public function tampilappetizer()
    {
        $appetizer=menu::where('keterangan', 'appetizer')->get();
        return view('appetizer',compact("appetizer"));
    }
    public function tampildessert()
    {
        $dessert=menu::where('keterangan', 'dessert')->get();
        return view('dessert',compact("dessert"));
    }
    public function tampildrink()
    {
        $cool=menu::where('keterangan', 'dingin')->get();
        return view('drink',compact("cool"));
    }
    public function tampildrink2()
    {
        $hot=menu::where('keterangan', 'panas')->get();
        return view('drink2',compact("hot"));
    }
    public function tampilmenuadmin()
    {
        $menuadmin=menu::all();
        return view('menuadmin',compact("menuadmin"));
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
    public function upload_menu(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required',
            'harga'=>'required',
            'filenama'=>'required',
            'keterangan'=>'required',
            'stock'=>'required',
        ]);

        //menyimpan data file yang diupload ke variabel $file
        $file=$request->file('filenama');
        $nama_file=$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'UploadsMenu';
 
        // upload file
        $file->move($tujuan_upload, $nama_file);
        
        menu::create([
            'nama'=>$request->nama, 
            'harga'=>$request->harga, 
            'keterangan'=>$request->keterangan, 
            'stock'=>$request->stock,
            'filenama'=>$nama_file,
        ]);
        return redirect()->back();
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
    public function data_update($id)
    {
        $menuadmin=menu::where('id',$id)->get();
        return view('editmenu', compact('menuadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        menu::where('id', $request->id)->update([
            'nama'=>$request->nama, 
            'harga'=>$request->harga, 
            'keterangan'=>$request->keterangan, 
            'stock'=>$request->stock
        ]);
        return redirect('/menuadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')->where('id', $id)->delete();
        return redirect('/menuadmin');
    }
}
