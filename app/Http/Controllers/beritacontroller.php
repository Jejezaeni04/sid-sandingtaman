<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        $title = 'Hapus Data Berita!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('Admin.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.berita.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_admin'     => 'required',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'nama_berita'   => 'required',
            'deskripsi'   => 'required',
            'tanggal_upload'   => 'required'
        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/berita', $image->hashName());

        //create post
        Berita::create([
            'nama_admin'     => $request->nama_admin,
            'gambar'     => $image->hashName(),
            'nama_berita'     => $request->nama_berita,
            'deskripsi'   => $request->deskripsi,
            'tanggal_upload'   => $request->tanggal_upload
        ]);

        //redirect to index
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('Admin.berita.edit',compact('berita'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
           'nama_admin'     => 'required',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:2048',
            'nama_berita'   => 'required',
            'deskripsi'   => 'required',
            'tanggal_upload'   => 'required'
        ]);

        //get post by ID
        $berita = Berita::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/berita', $image->hashName());

            //delete old image
            Storage::delete('public/berita/'.$berita->gambar);

            //update berita with new image
            $berita->update([
                'nama_admin'     => $request->nama_admin,
                'gambar'     => $image->hashName(),
                'nama_berita'     => $request->nama_berita,
                'deskripsi'   => $request->deskripsi,
                'tanggal_upload'   => $request->tanggal_upload
            ]);

        } else {

            //update berita without image
            $berita->update([
               'nama_admin'     => $request->nama_admin,
                'nama_berita'     => $request->nama_berita,
                'deskripsi'   => $request->deskripsi,
                'tanggal_upload'   => $request->tanggal_upload
            ]);
        }

        //redirect to index
        Alert::success('success', 'Data Berhasil Diubah!');
        return redirect()->route('berita');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        //delete image
        Storage::delete('public/berita/'. $berita->gambar);

        //delete post
        $berita->delete();

        //redirect to index
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('berita');
    }
}
