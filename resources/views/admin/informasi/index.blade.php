@extends('admin.layouts.app')

@section('content')
<div class="p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Permintaan Informasi</h1>

    <table class="w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Nomor HP</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Rincian</th>
                <th class="border px-4 py-2">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->nama }}</td>
                <td class="border px-4 py-2">{{ $item->nomorhp }}</td>
                <td class="border px-4 py-2">{{ $item->email }}</td>
                <td class="border px-4 py-2">{{ $item->rincian }}</td>
                <td class="border px-4 py-2">{{ $item->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $data->links() }}
    </div>
</div>
@endsection
