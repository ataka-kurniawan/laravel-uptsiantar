@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen  mx-auto">
    <h1 class="text-2xl font-bold mb-6">Tambah Foto Gallery</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-medium mb-2">Foto</label>
                <input type="file" name="image" id="photo" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       accept="image/*" required>
            </div>

            <div class="flex space-x-3 mt-4">
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Simpan
                </button>
                <a href="{{ route('gallery.index') }}" 
                   class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
