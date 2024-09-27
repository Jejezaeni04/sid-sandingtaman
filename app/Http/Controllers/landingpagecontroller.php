<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\bagan;
use App\Models\Berita;
use App\Models\dusun;
use App\Models\galeri;
use App\Models\Kegiatan;
use App\Models\penduduk;
use App\Models\sejarah;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class landingpagecontroller extends Controller
{
    function home(){
        $dusun = dusun::all();
        $galeri = galeri::all();
        $berita = Berita::orderBy('id', 'DESC')->paginate(3);
        $aparat = Aparatur::all();
        $kegiatan = Kegiatan::orderBy('id','DESC')->paginate(4);
        return view('warga.index',compact('berita','aparat','kegiatan','galeri','dusun'));
    }

    function visimisi(){
        $dusun = dusun::all();
        $vismis = Visimisi::all();
        return view('warga.visimisi', compact('vismis','dusun'));
    }

    function tentang(){
        $dusun = dusun::all();
        $sejarah = sejarah::all();
        return view('warga.tentang',compact('sejarah','dusun'));
    }

    function struktur(){
        $dusun = dusun::all();
        $aparat = Aparatur::all();
        $bagan = bagan::all();
        return view('warga.strukturorganisasi',compact('aparat','dusun','bagan'));
    }

    function perangkatdesa(){
        $dusun = dusun::all();
        $aparatur = Aparatur::all();
        return view('warga.perangkatdesa',compact('aparatur','dusun'));
    }

    function berita(){
        $dusun = dusun::all();
        $berita=berita::all();
        return view('warga.berita',compact('berita','dusun'));
    }

    function kegiatan(){
        $dusun = dusun::all();
        $kegiatan=kegiatan::all();
        return view('warga.kegiatan',compact('kegiatan','dusun'));
    }
    function id_berita($id){
        $dusun = dusun::all();
        $berita = Berita::find($id);
        return view('warga.berita_id', compact('berita','dusun'));
    }
    function id_kegiatan($id){
        $dusun = dusun::all();
        $kegiatan = Kegiatan::find($id);
        return view('warga.kegiatan_id', compact('kegiatan','dusun'));
    }
    function wilayah(){
        $dusun = dusun::all();
        $wilayah = penduduk::all();
        return view('warga.wilayah',compact('wilayah','dusun'));
    }
    function id_wilayah(String $id){
        $dusun = dusun::all();
        $aparat = Aparatur::all();
        $galeri = galeri::all();
        $wilayah = penduduk::findOrFail($id);
        return view('warga.wilayah_id', compact('wilayah','galeri','aparat','dusun'));
    }
    function album(){
        $dusun = dusun::all();
        $galeri = galeri::all();
        return view('warga.galeri',compact('galeri','dusun'));
    }
    function lembaga_desa(){
        $dusun = dusun::all();
        $bagan = bagan::all();
        return view('warga.lembaga_desa',compact('dusun','bagan'));
    }
}
