<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    /** @use HasFactory<\Database\Factories\PenimbanganFactory> */
    use HasFactory;

    protected $table = 'penimbangan';

    protected $fillable = [
        'jenis_sampah',
        'berat_sampah',
        'total_harga',
    ];
}
