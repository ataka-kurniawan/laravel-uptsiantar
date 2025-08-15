@extends('admin.layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Edit Manager</h1>

    <form action="{{ route('manager.update', $manager->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name', $manager->name) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Tahun</label>
            <input type="text" name="year" class="w-full border px-3 py-2 rounded" value="{{ old('year', $manager->year) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar</label>
            @if ($manager->image)
                <img src="{{ asset('storage/' . $manager->image) }}" alt="Gambar Manager" class="w-32 h-auto mb-2 rounded">
            @endif
            <input type="file" name="image" class="w-full border px-3 py-2 rounded">
            <small class="text-gray-500">Biarkan kosong jika tidak ingin mengubah gambar</small>
        </div>

        <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">Update</button>
    </form>
</div>
@endsection
