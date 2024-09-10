<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama_admin',
        'gambar',
        'nama_berita',
        'deskripsi',
        'tanggal_upload'
    ];
}
