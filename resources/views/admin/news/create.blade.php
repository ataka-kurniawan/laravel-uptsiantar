@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen mx-auto">
    <h1 class="text-2xl font-bold mb-6">Tambah Berita</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Berita</label>
                <input type="text" name="title" id="title" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Masukkan judul berita" required>
            </div>

            {{-- Konten --}}
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Konten</label>
                <textarea name="content" id="content" rows="5"
                          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          placeholder="Masukkan isi berita" required></textarea>
            </div>

            {{-- Gambar --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar (opsional)</label>
                <input type="file" name="image" id="image" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       accept="image/*">
            </div>

            {{-- Tombol --}}
            <div class="flex space-x-3 mt-4">
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Simpan
                </button>
                <a href="{{ route('news.index') }}" 
                   class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
