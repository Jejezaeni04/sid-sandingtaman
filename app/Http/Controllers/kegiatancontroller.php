<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class kegiatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        $title = 'Hapus Data Berita!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('Admin.kegiatan.index',compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.kegiatan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'nama_kegiatan' => 'required',
            'lokasi_kegiatan' => 'required',
            'deskripsi' => 'required',
            'tanggal_upload' => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/kegiatan',$image->hashName());

        Kegiatan::create([
            'nama_admin' => $request->nama_admin,
            'gambar'     => $image->hashName(),
            'nama_kegiatan' => $request->nama_kegiatan,
            'lokasi_kegiatan' => $request->lokasi_kegiatan,
            'deskripsi' => $request->deskripsi,
            'tanggal_upload' => $request->tanggal_upload
        ]);

        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('kegiatan');

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
        $kegiatan = Kegiatan::findOrFail($id);
        return view('Admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_admin' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:2048',
            'nama_kegiatan' => 'required',
            'lokasi_kegiatan' => 'required',
            'deskripsi' => 'required',
            'tanggal_upload' => 'required'
        ]);
        $kegiatan = Kegiatan::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/kegiatan', $image->hashName());

            //delete old image
            Storage::delete('public/kegiatan/'.$kegiatan->gambar);

            //update berita with new image
            $kegiatan->update([
                'nama_admin'     => $request->nama_admin,
                'gambar'     => $image->hashName(),
                'nama_kegiatan'     => $request->nama_kegiatan,
                'lokasi_kegiatan'     => $request->lokasi_kegiatan,
                'deskripsi'   => $request->deskripsi,
                'tanggal_upload'   => $request->tanggal_upload
            ]);

        } else {

            //update kegiatan without image
            $kegiatan->update([
               'nama_admin'     => $request->nama_admin,
                'nama_kegiatan'     => $request->nama_kegiatan,
                'lokasi_kegiatan'     => $request->lokasi_kegiatan,
                'deskripsi'   => $request->deskripsi,
                'tanggal_upload'   => $request->tanggal_upload
            ]);
        }

        //redirect to index
        Alert::success('success', 'Data Berhasil Diubah!');
        return redirect()->route('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        //delete image
        Storage::delete('public/kegiatan/'. $kegiatan->gambar);

        //delete post
        $kegiatan->delete();

        //redirect to index
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('kegiatan');
    }
}
