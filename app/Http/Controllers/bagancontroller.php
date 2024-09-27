<?php

namespace App\Http\Controllers;

use App\Models\bagan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class bagancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bagan = bagan::all();
        $title = 'Hapus Data Bagan!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('Admin.bagan.index',compact('bagan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.bagan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_bagan'=>'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'kategori'     => 'required',
            'deskripsi'=>'required'
        ]);

        $bagan = [
            'kategori' => $request->kategori,
            'deskripsi'=>$request->deskripsi
        ];
    
        // Upload gambar_bagan jika ada
        if ($request->hasFile('gambar_bagan')) {
            $image = $request->file('gambar_bagan');
            $image->storeAs('public/bagan', $image->hashName());
            $bagan['gambar_bagan'] = $image->hashName();
          } else {
            // Set default image if no file is selected (optional)
            $bagan['gambar_bagan'] = 'default.png'; // Replace with your actual default image path
          }
    
        // Create penduduk
        bagan::create($bagan);
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('bagan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_bagan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_bagan)
    {
        $bagan = bagan::where('id_bagan',$id_bagan)->first();
        return view('Admin.bagan.edit',compact('bagan'));
    }

    /**
     * Update the specified resource in storage.
     */
     function update(Request $request, string $id_bagan)
    {
        $this->validate($request, [
            'gambar_bagan'=>'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'kategori'     => 'required',
            'deskripsi'=>'required'
         ]);
 
         $bagan = bagan::where('id_bagan',$id_bagan)->first();
 
         if ($request->hasFile('gambar_bagan')) {
 
             $image = $request->file('gambar_bagan');
             $image->storeAs('public/bagan', $image->hashName());
 
             Storage::delete('public/bagan/'.$bagan->gambar_bagan);
 
             $bagan->update([
                 'gambar_bagan'     => $image->hashName(),
                 'kategori'     => $request->kategori,
                 'deskripsi'   => $request->deskripsi,
             ]);
 
         } else {
 
             $bagan->update([
                'kategori'     => $request->kategori,
                'deskripsi'   => $request->deskripsi,
             ]);
         }
 
         Alert::success('success', 'Data Berhasil Diubah!');
         return redirect()->route('bagan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_bagan)
    {
        $bagan = bagan::where('id_bagan',$id_bagan)->first();
        Storage::delete('public/bagan/'. $bagan->gambar_bagan);
        $bagan->delete();
        
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('bagan.index');
    }
    
}
