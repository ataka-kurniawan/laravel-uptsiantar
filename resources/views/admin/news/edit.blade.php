@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen mx-auto">
    <h1 class="text-2xl font-bold mb-6">Edit Berita</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
                <input type="text" name="title" id="title" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('title', $news->title) }}" required>
            </div>

            {{-- Konten --}}
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Konten</label>
                <textarea name="content" id="content" rows="6"
                          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          required>{{ old('content', $news->content) }}</textarea>
            </div>

            {{-- Gambar --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar</label>
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Berita" class="w-48 h-auto mb-2 rounded">
                @endif
                <input type="file" name="image" id="image" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       accept="image/*">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
            </div>

            {{-- Tombol aksi --}}
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
