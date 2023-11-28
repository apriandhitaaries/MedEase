<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Pasien;

class JumlahController extends Controller
{
    public function countArtikel()
    {
        $artikels = Artikel::all();
        $jumlahArtikel = Artikel::getJumlahArtikel();

        return view('dashboard', compact('artikels', 'jumlahArtikel'));
    }

    public function countPasien()
    {
        $jumlahPasien = Pasien::count();

        return view('dashboard', ['jumlahPasien' => $jumlahPasien]);
    }
}
