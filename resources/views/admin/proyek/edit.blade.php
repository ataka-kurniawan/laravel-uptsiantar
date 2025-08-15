@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen mx-auto">
    <h1 class="text-2xl font-bold mb-6">Edit Proyek</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <form action="{{ route('proyek.update', $proyek->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul Proyek --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Proyek</label>
                <input type="text" name="title" id="title" 
                       value="{{ old('title', $proyek->title) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Masukkan judul proyek" required>
            </div>

            {{-- Tahun --}}
            <div class="mb-4">
                <label for="year" class="block text-gray-700 font-medium mb-2">Tahun</label>
                <input type="text" name="year" id="year" 
                       value="{{ old('year', $proyek->year) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Masukkan tahun proyek" required>
            </div>

            {{-- Gambar --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar Proyek</label>
                @if ($proyek->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $proyek->image) }}" alt="Gambar Proyek" class="w-40 rounded">
                    </div>
                @endif
                <input type="file" name="image" id="image" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       accept="image/*">
                <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
            </div>

            {{-- Tombol --}}
            <div class="flex space-x-3 mt-4">
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Update
                </button>
                <a href="{{ route('proyek.index') }}" 
                   class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
