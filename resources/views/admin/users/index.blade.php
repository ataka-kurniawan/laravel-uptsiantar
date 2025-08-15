{{-- resources/views/admin/users/index.blade.php --}}
@extends('admin.layouts.app')

@section('content')
    <div class="max-w-screen mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Kelola Admin</h1>

        <a href="{{ route('users.create') }}" 
           class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">
            + Tambah Admin
        </a>

        @if (session('success'))
            <div class="text-white bg-green-500 py-3 mt-2 px-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="px-4 py-3 w-16">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3 w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $index => $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">{{ $user->name }}</td>
                            <td class="px-4 py-3">{{ $user->email }}</td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm"
                                        onclick="return confirm('Yakin ingin menghapus admin ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                                Belum ada admin tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
