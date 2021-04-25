<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Detail;
use App\Models\User;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = User:: where('role', 'member')->get();
    	return view('admin.listdaftar', ['akun' => $akun]);
    }
    public function detailadmin()
    {
    $user = DB :: table('users')
                ->join('details','users.id','=','details.id')
                -> get ();
        return view('admin.detail')->with('user', $user);
    }

    //detail member
    public function detail()
    {
    $user = DB :: table('users')
                ->join('details','users.id','=','details.id')
                -> get ();
        return view('member.detail')->with('user', $user);
    }



    public function indexuser()
    {
        $akun = User:: where('role', 'member')->get();
    	return view('user.listdaftar', ['akun' => $akun]);
    }
    public function detailuser()
    {
    $user = DB :: table('users')
                ->join('details','users.id','=','details.id')
                -> get ();
        return view('user.detail')->with('user', $user);
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
