<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Datapasien;


class PasienController extends Controller
{
    public function create(Request $request)
{
    $request->validate([
        'poliklinik' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'nik' => 'required|string|max:255',
    ]);

    // Cek apakah NIK ada di tabel datapasien
    $nik = $request->input('nik');
    $dataPasien = Datapasien::where('nik', $nik)->first();

    if (!$dataPasien) {
        return redirect()->back()->with('error', 'Pastikan NIK Anda benar.');
    }

    // Jika NIK ada dalam datapasien, simpan data pasien
    $pasien = new Pasien;
    $pasien->poliklinik = $request->input('poliklinik');
    $pasien->tanggal = $request->input('tanggal');
    $pasien->nik = $nik;
    $pasien->save();

    return redirect()->back()->with('success', 'Pendaftaran berhasil!');
}


    public function index()
{
    $pasiens = Pasien::all();
    return view('dashboardP', compact('pasiens'));
}


    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasiens.show', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'poliklinik' => 'required|string|max:255',
            'tanggal' => 'required|date',

        ]);
        
        $pasien = Pasien::findOrFail($id);

            // Perbarui data pasien
    $pasien->update([
        'poliklinik' => $request->input('poliklinik'),
        'tanggal' => $request->input('tanggal'),

    ]);

    return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil diperbarui');
}

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil dihapus!');
    }
    
}
