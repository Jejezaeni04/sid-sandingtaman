<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\dusun;
use App\Models\galeri;
use App\Models\penduduk;
use App\Models\sejarah;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\String_;
use RealRashid\SweetAlert\Facades\Alert;

class aparaturcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aparatur = Aparatur::all();
        $title = 'Hapus Data Berita!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('Admin.kepengurusan.index',compact('aparatur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dusun = dusun::all();
        return view('Admin.kepengurusan.add_aparatur',compact('dusun'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'nik' => 'required',
            'nohp'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'jabatan'=>'required',
            'tgl_lahir'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000' 
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/aparatur', $image->hashName());

        //create post
        Aparatur::create([
            'nama'     => $request->nama,
            'nik' => $request->nik,
            'nohp'=>$request->nohp,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'jabatan'=>$request->jabatan,
            'tgl_lahir'=>$request->tgl_lahir,
            'foto'=>$image->hashName(),
        ]);

        //redirect to index
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('aparatur');
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
        $aparatur = Aparatur::find($id);
        $dusun = dusun::all();
        return view('Admin.kepengurusan.editaparatur', compact('aparatur','dusun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'nik' => 'required',
            'nohp'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'jabatan'=>'required',
            'tgl_lahir'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png,JPG,JPEG|max:2048'
         ]);
 
         //get post by ID
         $aparatur = Aparatur::findOrFail($id);
 
         //check if image is uploaded
         if ($request->hasFile('foto')) {
 
             //upload new image
             $image = $request->file('foto');
             $image->storeAs('public/aparatur', $image->hashName());
 
             //delete old image
             Storage::delete('public/aparatur/'.$aparatur->foto);
 
             //update berita with new image
             $aparatur->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'nohp' => $request->nohp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
                'tgl_lahir' => $request->tgl_lahir,
                'foto' => $image->hashName()
             ]);
 
         } else {
 
             //update berita without image
             $aparatur->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'nohp' => $request->nohp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
                'tgl_lahir' => $request->tgl_lahir
             ]);
         }
 
         //redirect to index
         Alert::success('success', 'Data Berhasil Diubah!');
         return redirect()->route('aparatur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aparatur = Aparatur::findOrFail($id);

        //delete image
        Storage::delete('public/aparatur/'. $aparatur->foto);

        //delete post
        $aparatur->delete();

        //redirect to index
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('aparatur');
    }


    function visimisi(){
        $vismis = Visimisi::all();
        return view('Admin.kepengurusan.visimisi',compact('vismis'));
    }
    function editvisimisi(Request $request, string $id){
        $vismis = Visimisi::findOrFail($id);
        $vismis->update([
            'visi' => $request->visi,
            'misi' => $request->misi
            ]);
            Alert::success('success', 'Data Berhasil Diubah!');
            return redirect()->back();
    }
    
    function sejarah(){
        $sejarah = sejarah::all();
        return view('Admin.kepengurusan.sejarah',compact('sejarah'));
    }
    function ubahsejarah(Request $request, string $id){
        $sejarah = sejarah::findOrFail($id);
        $sejarah->update([
            'deskripsi' => $request->deskripsi
            ]);
            Alert::success('success', 'Data Berhasil Diubah!');
            return redirect()->back();
    }

    function aduan(){
        return view('admin.pengaduan.index');
    }

    function penduduk(){
        $wilayah =penduduk::all();
        $title = 'Hapus Data Berita!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('admin.kependudukan.index',compact('wilayah'));
    }
    function add_penduduk(){
        $dusun = dusun::all();
        $aparat = Aparatur::all();
        return view('admin.kependudukan.add',compact('dusun','aparat'));
    }

    function edit_penduduk(string $id){
        $penduduk = penduduk::find($id);
        $dusun= dusun::all();
        $aparat = Aparatur::all();
        return view('Admin.kependudukan.edit', compact('penduduk','dusun','aparat'));
    }

    function penduduk_update(Request $request, String $id){
        $penduduk = penduduk::find($id);
        $this->validate($request, [
            'nama_dusun'     => 'required',
            'nama_aparat' => 'required',
            'gambar'=>'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'luas_wilayah'=>'required',
            'jumah_penduduk'=>'required',
            'deskripsi'=>'required'
        ]);
    
        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/penduduk', $image->hashName());
            //delete old image
            Storage::delete('public/penduduk/'.$penduduk->gambar);
            //update berita with new image
            $penduduk->update([
                'nama_dusun' => $request->nama_dusun,
                'nama_aparat' => $request->nama_aparat,
                'gambar'     => $image->hashName(),
                'luas_wilayah'=>$request->luas_wilayah,
                'jumah_penduduk'=>$request->jumah_penduduk,
                'deskripsi'=>$request->deskripsi
            ]);

        } else {

            //update berita without image
            $penduduk->update([
                'nama_dusun' => $request->nama_dusun,
                'nama_aparat' => $request->nama_aparat,
                'luas_wilayah'=>$request->luas_wilayah,
                'jumah_penduduk'=>$request->jumah_penduduk,
                'deskripsi'=>$request->deskripsi
            ]);
        }
        Alert::success('success', 'Data Berhasil Diubah');
        return redirect()->route('penduduk.index');
    }

    function penduduk_store(Request $request){
        $this->validate($request, [
            'nama_dusun'     => 'required',
            'nama_aparat' => 'required',
            'gambar'=>'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'luas_wilayah'=>'required',
            'jumah_penduduk'=>'required',
            'deskripsi'=>'required'
        ]);

        $pendudukData = [
            'nama_dusun' => $request->nama_dusun,
            'nama_aparat' => $request->nama_aparat,
            'luas_wilayah'=>$request->luas_wilayah,
            'jumah_penduduk'=>$request->jumah_penduduk,
            'deskripsi'=>$request->deskripsi
        ];
    
        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/penduduk', $image->hashName());
            $pendudukData['gambar'] = $image->hashName();
          } else {
            // Set default image if no file is selected (optional)
            $pendudukData['gambar'] = 'default.png'; // Replace with your actual default image path
          }
    
        // Create penduduk
        penduduk::create($pendudukData);
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('penduduk.index');
    }
    function penduduk_delete(String $id){
        $penduduk = penduduk::findOrFail($id);
        Storage::delete('public/penduduk/'. $penduduk->gambar);
        $penduduk->delete();
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('penduduk.index');
    }

    function galeri(){
        $galeri = galeri::all();
        $title = 'Hapus Data Galeri!';
        $text = "Apakah Anda Yakin Akan Menghapusnya?";
        confirmDelete($title, $text);
        return view('admin.kepengurusan.galeri',compact('galeri'));
    }
    function add_galeri(){
        $dusun = dusun::all();
        return view('admin.kepengurusan.add_galeri',compact('dusun'));
    }
    function galeri_store(Request $request){
        $this->validate($request, [
            'alamat'     => 'required',
            'gambar'=>'image|mimes:jpeg,jpg,png,JPG,JPEG|max:5000',
            'deskripsi'=>'required'
        ]);

        $pendudukData = [
            'alamat' => $request->alamat,
            'deskripsi'=>$request->deskripsi
        ];
    
        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/galeri', $image->hashName());
            $pendudukData['gambar'] = $image->hashName();
          } else {
            // Set default image if no file is selected (optional)
            $pendudukData['gambar'] = 'default.png'; // Replace with your actual default image path
          }
    
        // Create penduduk
        galeri::create($pendudukData);
        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('galeri.index');
    }

    function galeri_delete(String $id_galeri){
        $galeri = galeri::where('id_galeri',$id_galeri);
        Storage::delete('public/galeri/'. $galeri->gambar);
        $galeri->delete();
        
        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->route('galeri.index');
    }
    
}
