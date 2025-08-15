@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 mt-40 px-4">
    {{-- Judul Berita --}}
    <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>

    {{-- Tanggal Publikasi --}}
    <span class="text-sm text-gray-500 mb-6 block">
        Dipublikasikan pada: {{ $news->created_at->format('d M Y') }}
    </span>

    {{-- Gambar --}}
    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-auto rounded mb-6">
    @endif

    {{-- Konten Berita --}}
    <div class="text-gray-700 leading-relaxed text-justify space-y-4">
        {!! nl2br(e($news->content)) !!}
    </div>

    {{-- Tombol Kembali --}}
    <div class="mt-8">
        <a href="{{ route('home.publikasi') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Kembali ke Berita
        </a>
    </div>
</div>
@endsection
