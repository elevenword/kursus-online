<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class ApiKursusController extends Controller
{
    

    public function allkursus()
    {
        return response()->json(Kursus::all(), 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {   
        $data = Kursus::with('id')->where('id', $id)->get();
        return $data;
        //
    }

    public function showByNama($nama)
    {   
        $data= Kursus::where('nama_kursus','LIKE', '%'.$nama. '%')->get();
        return $data;
        //
    }

   
    

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
