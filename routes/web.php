<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\aparaturcontroller;
use App\Http\Controllers\bagancontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\kegiatancontroller;
use App\Http\Controllers\landingpagecontroller;
use App\Http\Controllers\pengaduancontroller;
use App\Http\Controllers\SesiController;
use Faker\Guesser\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('warga.index');
});
// Route::get('/dashboard', function(){
//     return view('Admin.index');
// })->name('dashboard');
// Route::get('/login',function(){
//     return view('auth.login');
// });
// Route::get('/berita', function(){
//     return view('Admin.berita.index');
// })->name('berita');
// Route::get('/kegiatan', function(){
//     return view('Admin.kegiatan.index');
// })->name('kegiatan');

Route::controller(landingpagecontroller::class)->group(function(){
    Route::get('/','home')->name('/');
    Route::get('/visimisi','visimisi')->name('visimisi');
    Route::get('/tentang','tentang')->name('tentang');
    Route::get('/strukturorganisasi','struktur')->name('strukturorganisasi');
    Route::get('/perangkat-desa','perangkatdesa')->name('perangkat.desa');
    Route::get('/berita-terkini','berita')->name('berita.terkini');
    Route::get('/kegiatan-terkini','kegiatan')->name('kegiatan.terkini');
    Route::get('/berita-id/{nama_berita}','id_berita')->name('berita.show');
    Route::get('/kegiatan-id/{nama_kegiatan}','id_kegiatan')->name('kegiatan.show');
    Route::get('/wilayah','wilayah')->name('wilayah.index');
    Route::get('/wilayah-id/{nama_dusun}','id_wilayah')->name('wilayah.show');
    Route::get('/album-desa','album')->name('album.desa');
    route::get('/lembaga-desa','lembaga_desa')->name('lembaga.desa');
});
Route::controller(pengaduancontroller::class)->group(function(){
    Route::post('/pengaduan-add','store')->name('pengaduan.store');
});




Route::middleware(['guest'])->group(function(){
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::post('/login_proses',[SesiController::class,'login'])->name('login_proses');
});

Route::get('/home',function(){
    return redirect('admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[SesiController::class,'logout'])->name('logout');
    Route::get('/admin',[admincontroller::class,'index'])->name('dashboard');

    Route::controller(beritacontroller::class)->group(function(){
        Route::get('/berita','index')->name('berita');
        Route::get('/add_berita','create')->name('add_berita');
        Route::post('/add_berita_proses','store')->name('add_berita_proses');
        Route::delete('/berita/hapus/{id}', 'destroy')->name('berita.destroy');
        Route::get('/berita/edit/{id}', 'edit')->name('berita.edit');
        Route::put('/berita/edit_proses/{id}', 'update')->name('berita.update');

    });
    
    Route::controller(kegiatancontroller::class)->group(function(){
        Route::get('/kegiatan','index')->name('kegiatan');
        Route::get('/add_kegiatan','create')->name('add_kegiatan');
        Route::post('/add_kegiatan_proses','store')->name('add_kegiatan_proses');
        Route::delete('/kegiatan/hapus/{id}', 'destroy')->name('kegiatan.destroy');
        Route::get('/kegiatan/edit/{id}', 'edit')->name('kegiatan.edit');
        Route::put('/kegiatan/edit_proses/{id}', 'update')->name('kegiatan.update');
    
    });
    
    Route::controller(aparaturcontroller::class)->group(function(){
        Route::get('/aparatur','index')->name('aparatur');
        Route::get('/add_aparatur','create')->name('add_aparatur');
        Route::post('/add_aparatur_proses','store')->name('add_aparatur_proses');
        Route::delete('/aparatur/hapus/{id}', 'destroy')->name('aparatur.destroy');
        Route::get('/aparatur/edit/{id}', 'edit')->name('aparatur.edit');
        Route::put('/aparatur/edit_proses/{id}', 'update')->name('aparatur.update');

        Route::get('/visi_misi','visimisi')->name('visi_misi');
        Route::put('/visi_misi/edit/{id}','editvisimisi')->name('visimisi.update');

        Route::get('/sejarah','sejarah')->name('sejarah');
        Route::put('/sejarah/edit/{id}','ubahsejarah')->name('sejarah.update');

        Route::get('/kependudukan','penduduk')->name('penduduk.index');
        Route::get('/add-kependudukan','add_penduduk')->name('penduduk.add');
        Route::post('/add-kependudukan-proses','penduduk_store')->name('penduduk.store');
        Route::get('/kependudukan/edit/{id}','edit_penduduk')->name('penduduk.edit');
        Route::put('/kependudukan/edit-proses/{id}','penduduk_update')->name('penduduk.update');
        Route::delete('/kependudukan/hapus/{id}','penduduk_delete')->name('penduduk.destroy');

        Route::get('/galeri','galeri')->name('galeri.index');
        Route::get('/add-galeri','add_galeri')->name('galeri.create');
        Route::post('/add-galeri-proses','galeri_store')->name('galeri.store');
        Route::delete('/galeri/hapus/{id_galeri}','galeri_delete')->name('galeri.destroy');

    });
    Route::controller(pengaduancontroller::class)->group(function(){
        route::get('/pengaduan','index')->name('pengaduan.index');
        route::get('/pengaduan-add','create')->name('pengaduan.create');
        Route::delete('/pengaduan/hapus/{id}', 'destroy')->name('pengaduan.destroy');
        Route::get('/pengaduan/show/{id}', 'show')->name('pengaduan.show');
    });
    Route::controller(bagancontroller::class)->group(function(){
        route::get('/bagan','index')->name('bagan.index');
        route::get('/bagan-add','create')->name('bagan.create');
        route::post('/bagan-strore','store')->name('bagan.store');
        // route::get('/bagan-show/{id}','show')->name('bagan.show');
        route::get('/bagan-edit/{id_bagan}','edit')->name('bagan.edit');
        route::put('/bagan-edit-proses/{id_bagan}','update')->name('bagan.update');
        route::delete('/bagan/hapus/{id_bagan}','destroy')->name('bagan.delete');
    });
});


