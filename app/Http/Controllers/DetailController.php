<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function edit($id)
    {
        $detail = Detail::find($id);
        return view('member.edetail', ['detail' => $detail]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'alamat' => 'required',
        'no_tlp' => 'required',
        'tujuan' => 'required',
        'pendidikan' => 'required'
        ]);

        $detail = Detail::find($id);
        $detail->alamat = $request->alamat;
        $detail->no_tlp = $request->no_tlp;
        $detail->tujuan = $request->tujuan;
        $detail->pendidikan = $request->pendidikan;
        $detail->save();
        return redirect('member/detail');
    }

    public function delete($id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect('member/detail');
    }
}
