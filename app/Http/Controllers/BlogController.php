<?php

namespace App\Http\Controllers;
use App\Models\Kursus;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	$kursus = Kursus::paginate(5);
    	return view('blog', ['kursus' => $kursus]);
    }

    
    public function show($id)
    {

        $kursus = Kursus::find($id);

        return view ('vblog', ['kursus'=> $kursus]);

    }
}


