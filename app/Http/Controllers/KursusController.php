<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class KursusController extends Controller
{
    
    public function index()
    {
    	$kursus = Kursus::paginate(5);
    	return view('admin.kursus', ['kursus' => $kursus]);
    }
 
    public function tambah()
    {
    	return view('admin.tkursus');
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_kursus' => 'required',
    		'isi_kursus' => 'required'
    	]);
 
        Kursus::create([
    		'nama_kursus' => $request->nama_kursus,
    		'isi_kursus' => $request->isi_kursus
    	]);
 
    	return redirect('admin/kursus');
    } 

    public function edit($id)
    {
        $kursus = Kursus::find($id);
        return view('admin.ekursus', ['kursus' => $kursus]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama_kursus' => 'required',
        'isi_kursus' => 'required'
        ]);

        $kursus = Kursus::find($id);
        $kursus->nama_kursus = $request->nama_kursus;
        $kursus->isi_kursus = $request->isi_kursus;
        $kursus->save();
        return redirect('admin/kursus');
    }

    public function delete($id)
    {
        $kursus = Kursus::find($id);
        $kursus->delete();
        return redirect('admin/kursus');
    }


    public function materi()
    {
        $kursus = Kursus:: All();
        return view('member.materi',  ['kursus' => $kursus]);
     }
}
