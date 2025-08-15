@extends('admin.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Manager</h1>

        <a href="{{ route('manager.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">
            + Tambah Manager
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
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Tahun</th>
                        <th class="px-4 py-3 w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($managers as $index => $manager)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                @if ($manager->image)
                                    <img src="{{ asset('storage/' . $manager->image) }}" alt="Gambar Manager"
                                        class="w-24 h-auto rounded">
                                @else
                                    <span class="text-gray-400">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $manager->name }}</td>
                            <td class="px-4 py-3">{{ $manager->year }}</td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('manager.edit', $manager->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('manager.destroy', $manager->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm"
                                        onclick="return confirm('Yakin ingin menghapus manager ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($managers->isEmpty())
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">Belum ada manager tersedia.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
