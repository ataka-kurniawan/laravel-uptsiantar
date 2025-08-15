<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagerController extends Controller
{
    // Tampilkan daftar manager
    public function index()
    {
        $managers = Manager::latest()->get();
        return view('admin.manager.index', compact('managers'));
    }

    // Tampilkan form tambah manager
    public function create()
    {
        return view('admin.manager.create');
    }

    // Simpan manager baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'year' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('managers', 'public');

        Manager::create([
            'name' => $request->name,
            'image' => $imagePath,
            'year' => $request->year,
        ]);

        return redirect()->route('manager.index')->with('success', 'Manager berhasil ditambahkan');
    }

    // Tampilkan form edit manager
    public function edit(Manager $manager)
    {
        return view('admin.manager.edit', compact('manager'));
    }

    // Update manager
    public function update(Request $request, Manager $manager)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'year' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($manager->image && Storage::disk('public')->exists($manager->image)) {
                Storage::disk('public')->delete($manager->image);
            }
            $manager->image = $request->file('image')->store('managers', 'public');
        }

        $manager->name = $request->name;
        $manager->year = $request->year;
        $manager->save();

        return redirect()->route('manager.index')->with('success', 'Manager berhasil diperbarui');
    }

    // Hapus manager
    public function destroy(Manager $manager)
    {
        if ($manager->image && Storage::disk('public')->exists($manager->image)) {
            Storage::disk('public')->delete($manager->image);
        }

        $manager->delete();
        return redirect()->route('manager.index')->with('success', 'Manager berhasil dihapus');
    }
}
