<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function index(){
        $berita = Berita::all();
        $kegiatan = Kegiatan::all();
        $aparatur = Aparatur::all();
        return view('Admin.index',compact('berita','kegiatan','aparatur'));
    }
}
