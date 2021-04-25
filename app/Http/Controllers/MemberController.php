<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Kursus;
use App\Models\Detail;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        return view('member.home', compact('user'));
    }

    public function konfir()
    {
        $user = Auth::user();
        return view('member.konfirmasi', compact('user'));
    }

    
}
