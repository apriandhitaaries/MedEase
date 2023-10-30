<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'poliklinik_id',
        'tanggal_daftar',
        'nomor_antrean'
    ];

    // Relasi dengan Poliklinik
    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class);
    }
}
