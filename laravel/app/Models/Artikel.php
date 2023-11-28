<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'judul', 'konten'];

    /**
     * Ambil jumlah artikel (baris) dalam tabel.
     *
     * @return int
     */
    public static function getJumlahArtikel()
    {
        return self::count();
    }
}
