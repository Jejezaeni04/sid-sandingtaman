<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class pengaduancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = pengaduan::all();
        $title = 'Hapus Data Berita!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('Admin.pengaduan.index',compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Admin.pengaduan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'nama_pengadu'     => 'required',
            'alamat_pengadu'   => 'required',
            'jenis_keterangan'   => 'required',
            'isi_keterangan'   => 'required',
            'nohp'   => 'required'
        ]);

        $pendudukData = [
            'nama_pengadu'     => $request->nama_pengadu,
            'alamat_pengadu'     => $request->alamat_pengadu,
            'jenis_keterangan'   => $request->jenis_keterangan,
            'isi_keterangan'   => $request->isi_keterangan,
            'nohp'   => $request->nohp
        ];
    
        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/pengaduan', $image->hashName());
            $pendudukData['gambar'] = $image->hashName();
          } else {
            // Set default image if no file is selected (optional)
            $pendudukData['gambar'] = 'default.png'; // Replace with your actual default image path
          }
    
        // Create penduduk
        pengaduan::create($pendudukData);
        Alert::success('success', 'Pengaduan Berhasil Dikirim');
        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengaduan=pengaduan::findOrFail($id);
        return view('admin.pengaduan.show',compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengaduan = pengaduan::findOrFail($id);

        //delete image
        Storage::delete('public/pengaduan/'. $pengaduan->gambar);

        //delete post
        $pengaduan->delete();

        //redirect to index
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('pengaduan.index');
    }
}
