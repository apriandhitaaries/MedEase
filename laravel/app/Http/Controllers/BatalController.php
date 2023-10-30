<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class BatalController extends Controller
{
    public function cekBatal(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
        ]);

        $nik = $request->input('nik');
        $pasien = Pasien::where('nik', $nik)->first();

        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien dengan NIK tersebut tidak ditemukan.');
        }

        return view('cekbatal', compact('pasien'));
    }

    public function batalkanPendaftaran($id)
    {
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan.');
        }

        $pasien->delete();

        return redirect()->route('bataldaftar')->with('success', 'Pendaftaran berhasil dibatalkan.');
    }
}
