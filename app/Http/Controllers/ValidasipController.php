<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class ValidasipController extends Controller
{
    public function index()
    {
        $validasi = User:: where('role', 'member')->get();
    	return view('user.validasi', ['validasi' => $validasi]);
    }

    public function edit($id)
    {
        $validasi = User::find($id);
        return view('user.evalidasi', ['validasi' => $validasi]);
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
        return redirect('user.validasi');
    }

    public function delete($id)
    {
        $validasi = User::find($id);
        $validasi->delete();
        return redirect('user.validasi');
    }
}
