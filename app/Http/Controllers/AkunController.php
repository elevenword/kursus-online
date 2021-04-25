<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = User::all();
    	return view('admin.akun', ['akun' => $akun]);
    }

    public function edit($id)
    {
        $akun = User::find($id);
        return view('admin.eakun', ['akun' => $akun]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'alamat' => 'required',
        'no_tlp' => 'required',
        'tujuan' => 'required',
        'pendidikan' => 'required'
        ]);

        $akun = Detail::find($id);
        $akun->alamat = $request->alamat;
        $akun->no_tlp = $request->no_tlp;
        $akun->tujuan = $request->tujuan;
        $akun->pendidikan = $request->pendidikan;
        $akun->save();
        return redirect('admin/eakun');
    }

    public function delete($id)
    {
        $akun = Detail::find($id);
        $akun->delete();
        return redirect('admin/eakun');
    }


    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   

  
}
