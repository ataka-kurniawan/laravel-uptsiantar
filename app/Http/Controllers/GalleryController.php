<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Tampilkan semua gallery
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    // Form tambah gallery
    public function create()
    {
        return view('admin.gallery.create');
    }

    // Simpan foto baru
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image' => $path
        ]);

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil ditambahkan!');
    }

    // Form edit foto
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    // Update foto
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        // Hapus foto lama
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $path = $request->file('image')->store('gallery', 'public');

        $gallery->update([
            'image' => $path
        ]);

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil diupdate!');
    }

    // Hapus foto
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil dihapus!');
    }
}
