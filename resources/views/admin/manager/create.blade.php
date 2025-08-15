@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Tambah Manager</h1>

    <form action="{{ route('manager.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Tahun</label>
            <input type="text" name="year" class="w-full border px-3 py-2 rounded" value="{{ old('year') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar</label>
            <input type="file" name="image" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">Simpan</button>
    </form>
</div>
@endsection
