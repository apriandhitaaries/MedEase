<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapasien extends Model
{
    use HasFactory;

    protected $table = 'datapasien';
    public $timestamps = false; // Tambahkan baris ini untuk menonaktifkan timestamps

    protected $fillable = ['nama', 'nik']; // Tambahkan kolom yang dapat diisi di sini

    // ...
}
