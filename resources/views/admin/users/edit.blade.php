{{-- resources/views/admin/users/edit.blade.php --}}
@extends('admin.layouts.app')

@section('content')
<div class="max-w-screen mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Edit Admin</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="name" 
                   class="w-full border px-3 py-2 rounded" 
                   value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Email</label>
            <input type="email" name="email" 
                   class="w-full border px-3 py-2 rounded" 
                   value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Password</label>
            <input type="password" name="password" 
                   class="w-full border px-3 py-2 rounded">
            <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengubah password</p>
        </div>

        <button type="submit" 
                class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 transition">
            Update
        </button>
    </form>
</div>
@endsection
