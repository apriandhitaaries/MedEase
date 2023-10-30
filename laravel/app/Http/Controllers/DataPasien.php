<?php
// Contoh di dalam sebuah kontroler
use App\Models\DataPasien;

class PasienController extends Controller
{
    public function showNamaPasien()
    {
        $datapasien = DataPasien::find(1);
        $nama = $datapasien->nama;

        return view('nama_pasien', ['nama' => $nama]);
    }
}
