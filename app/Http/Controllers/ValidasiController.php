<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function index()
    {
        $validasi = User:: where('role', 'member')->get();
    	return view('admin.validasi', ['validasi' => $validasi]);
    }

    public function edit($id)
    {
        $validasi = User::find($id);
        return view('admin.evalidasi', ['validasi' => $validasi]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'name' => 'required',
        'link' => 'required'
        ]);

        $validasi = User::find($id);
        $validasi->name = $request->name;
        $validasi->link = $request->link;
        $validasi->save();
        return redirect('admin/validasi');
    }

    public function delete($id)
    {
        $validasi = User::find($id);
        $validasi->delete();
        return redirect('admin/validasi');
    }



}
