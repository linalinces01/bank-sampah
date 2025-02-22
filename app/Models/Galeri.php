<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    /** @use HasFactory<\Database\Factories\GaleriFactory> */
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = [
        'gambar',
        'deskripsi',
        'tanggal',
    ];
}
