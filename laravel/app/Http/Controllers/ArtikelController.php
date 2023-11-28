<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function home()
    {
        $artikels = Artikel::all();
        return view('index', compact('artikels'));
    }
    public function artikelview()
    {
        $artikels = Artikel::all();
        return view('artikel', compact('artikels'));
    }
    public function index()
    {
        $artikels = Artikel::all();
        return view('dashboardArtikel', compact('artikels'));
    }

    public function create()
    {
        return view('artikels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);
    
        // Proses gambar jika diunggah
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('gambar_artikel', 'public');
        }
    
        Artikel::create([
            'gambar' => $gambarPath ?? null, // Simpan path gambar ke dalam kolom "gambar"
            'judul' => $request->input('judul'),
            'konten' => $request->input('konten'),
        ]);
    
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil ditambahkan');
    }
    


    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.show', compact('artikel'));
    }
    
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.edit', compact('artikel'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi gambar
        ]);
    
        $artikel = Artikel::findOrFail($id);
    
        // Proses gambar jika diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama sebelum menyimpan yang baru
            if ($artikel->gambar_path) {
                Storage::disk('public')->delete($artikel->gambar_path);
            }
    
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('gambar_artikel', 'public');
            $artikel->update(['gambar_path' => $gambarPath]);
        }
    
        $artikel->update([
            'judul' => $request->input('judul'),
            'konten' => $request->input('konten'),
        ]);
    
        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil dihapus');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $artikels = Artikel::where('judul', 'like', '%' . $keyword . '%')
                           ->orWhere('konten', 'like', '%' . $keyword . '%')
                           ->get();

        return view('search', compact('artikels', 'keyword'));
    }
}
