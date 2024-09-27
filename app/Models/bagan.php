<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bagan extends Model
{
    // use HasFactory;
    protected $fillable = [
        'gambar_bagan',
        'kategori',
        'deskripsi'
    ];

    protected $primaryKey = 'id_bagan';
}
