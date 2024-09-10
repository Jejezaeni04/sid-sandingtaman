<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    // use HasFactory;
    protected $fillable = [
        'gambar',
        'nama_pengadu',
        'alamat_pengadu',
        'jenis_keterangan',
        'isi_keterangan',
        'nohp'
    ];
}
