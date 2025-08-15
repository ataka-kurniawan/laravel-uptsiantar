@extends('admin.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Berita</h1>

        <a href="{{ route('news.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">
            + Tambah Berita
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
                        <th class="px-4 py-3">Gambar</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Konten</th>
                        <th class="px-4 py-3 w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $index => $item)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita"
                                        class="w-24 h-auto rounded">
                                @else
                                    <span class="text-gray-400">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $item->title }}</td>
                            <td class="px-4 py-3">{{ Str::limit($item->content, 50) }}</td>


                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('news.edit', $item->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm"
                                        onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
