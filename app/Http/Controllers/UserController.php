<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::first()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|required',
            'email' => 'unique:users,email|string|email|required',
            'password' => 'string|required'
        ]);

        User::create($validated);
        return redirect()->route('users.index')->with('success', 'admin berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6', // nullable = boleh kosong
        ]);

        // Update data
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Kalau password diisi, hash baru
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Admin berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $user = User::findOrFail($id);

    // Cegah user menghapus dirinya sendiri (opsional)
    if (auth()->id() == $user->id) {
        return redirect()->route('users.index')
            ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
    }

    $user->delete();

    return redirect()->route('users.index')
        ->with('success', 'Admin berhasil dihapus.');
}

}
