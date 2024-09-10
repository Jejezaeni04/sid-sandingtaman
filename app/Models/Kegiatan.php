<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama_admin',
        'gambar',
        'nama_kegiatan',
        'lokasi_kegiatan',
        'deskripsi',
        'tanggal_upload'
    ];
}
