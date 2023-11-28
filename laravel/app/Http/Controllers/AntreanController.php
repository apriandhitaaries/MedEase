<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapasien;
use App\Models\Pasien;
use Carbon\Carbon; 

class AntreanController extends Controller
{
    public function cekAntrean(Request $request)
    {
        $nik = $request->input('nik');
        $datapasien = Datapasien::where('nik', $nik)->first();
    
        $nama = null; // Inisialisasi $nama di luar blok if
    
        if ($datapasien) {
            $antrean = Pasien::where('nik', $nik)->latest('updated_at')->first();
    
            if ($antrean) {
                $nama = $datapasien->nama; // Ambil nama pasien
    
                // Inisialisasi kolom tanggal jika belum ada
                if (!$antrean->tanggal) {
                    $antrean->tanggal = Carbon::now(); // Gunakan waktu saat ini
                    $antrean->save();
                }

                return view('nomor_antrean', [
                    'nomor_antrean' => $antrean->nomor_antrean,
                    'nama' => $nama,
                    'tanggal' => $antrean->tanggal,
                ]);
            } else {
                return view('cekantrean', ['error_message' => 'Belum ada antrean']);
            }
        } else {
            return view('cekantrean', ['error_message' => 'NIK atau Nama tidak terdaftar dalam database', 'nama' => $nama]);
        }
    }
    public function dashboardJumlahAntrean()
    {
        $jumlahPasien = 0; // Inisialisasi $jumlahPasien

        // Menghitung jumlah pasien untuk ditampilkan di dashboard
        $jumlahPasien = Pasien::count();

        return view('dashboard', ['jumlah_pasien' => $jumlahPasien]);
    }
}
