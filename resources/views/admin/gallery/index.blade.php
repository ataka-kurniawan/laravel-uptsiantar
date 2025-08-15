@extends('admin.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Gallery</h1>

        <a href="{{ route('gallery.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">
            + Tambah Foto
        </a>
        @if (session('success'))
            <div class="text-white bg-green-500 py-3 mt-2">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="px-4 py-3 w-16">No</th>
                        <th class="px-4 py-3">Foto</th>
                        <th class="px-4 py-3 w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $index => $gallery)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Foto"
                                    class="w-24 h-auto rounded">
                            </td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('gallery.edit', $gallery->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm"
                                        onclick="return confirm('Yakin ingin menghapus foto ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    {{-- End contoh data --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
