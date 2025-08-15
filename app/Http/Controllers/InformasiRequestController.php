<?php

namespace App\Http\Controllers;
use App\Models\InformasiRequest;
use Illuminate\Http\Request;

class InformasiRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomorhp' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'rincian' => 'required|string',
        ]);

        InformasiRequest::create($request->all());

        return back()->with('success', 'Permintaan informasi berhasil dikirim.');
    }

    public function index()
    {
        $data = InformasiRequest::latest()->paginate(10);
        return view('admin.informasi.index', compact('data'));
    }
}
