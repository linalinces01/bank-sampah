<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabungan extends Model
{
    /** @use HasFactory<\Database\Factories\TabunganFactory> */
    use HasFactory;

    protected $table = 'tabungan';

    protected $fillable = ['nama', 'alamat', 'nomor_telepon', 'jenis_sampah', 'berat_sampah', 'total_harga', 'tanggal'];
}
