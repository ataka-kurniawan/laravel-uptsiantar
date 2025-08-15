<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::latest()->get();
        return view('admin.proyek.index', compact('proyeks'));
    }

    public function create()
    {
        return view('admin.proyek.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'required|string|max:300',
            'year' => 'required|string|max:10'
        ]);

        // Simpan gambar
        $imagePath = $request->file('image')->store('proyek', 'public');

        // Masukkan path gambar ke array validated
        $validated['image'] = $imagePath;

        // Simpan ke database
        Proyek::create($validated);

        return redirect()
            ->route('proyek.index')
            ->with('success', 'Proyek berhasil ditambah');
    }

    public function destroy(Request $request, $id)
    {
        $proyek = Proyek::findOrFail($id);
        $proyek->delete();

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dihapus');
    }

    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);

        return view('admin.proyek.edit', compact('proyek'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'image' => 'nullable|image|max:2048',
            'title' => 'required|string|max:300',
            'year' => 'required|string|max:10'
        ]);

        // Ambil data proyek
        $proyek = Proyek::findOrFail($id);

        // Jika ada gambar baru, simpan dan hapus gambar lama
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($proyek->image && \Storage::disk('public')->exists($proyek->image)) {
                \Storage::disk('public')->delete($proyek->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('proyek', 'public');
            $validated['image'] = $imagePath;
        } else {
            // Jika tidak upload gambar, gunakan gambar lama
            $validated['image'] = $proyek->image;
        }

        // Update data di database
        $proyek->update($validated);

        return redirect()
            ->route('proyek.index')
            ->with('success', 'Proyek berhasil diperbarui');
    }


}
