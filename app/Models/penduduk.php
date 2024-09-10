<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama_dusun',
        'nama_aparat',
        'gambar',
        'luas_wilayah',
        'jumah_penduduk',
        'deskripsi'
    ];
}
