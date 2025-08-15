@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[70vh]" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
        <!-- Background Image -->
        <img src="{{ asset('images/profile.svg') }}" alt="PLN Pematangsiantar"
            class="absolute inset-0 w-full h-full object-cover brightness-25">

        <!-- Overlay Content -->
        <div
            class="relative container mx-auto h-full flex flex-col justify-center items-center md:justify-end md:items-start space-y-3 px-4 md:px-6 pb-10 md:pb-20 text-white text-center md:text-left lg:ml-10">

            <h3>Beranda/Publikasi</h3>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                Publikasi
            </h1>

            <p class="text-base sm:text-lg max-w-3xl">
                Informasi terkini seputar kegiatan, program, dan perkembangan UPT PLN Pematang Siantar. Melalui halaman kami
            </p>
        </div>
    </section>

    <section x-data="{ tab: 'berita' }" class="w-full mx-auto p-6" data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <!-- Tab buttons -->
        <div class="flex justify-between border-b-2 border-gray-300 mb-6">
            <button :class="tab === 'berita' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'berita'">
                Berita & Kegiatan
            </button>
            <button :class="tab === 'galeri' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'galeri'">
                Galeri
            </button>
        </div>

        <!-- Konten tab -->
        <div class="flex flex-col items-center">
            <template x-if="tab === 'berita'">
    <div class="pt-5 max-w-6xl w-full">
        <h2 class="text-3xl text-left font-bold mb-6">Berita Dan Kegiatan</h2>

        @php
            $headline = $news->first();
            $smallCards = $news->skip(1)->take(4);
            $bottomCards = $news->skip(5);
        @endphp

        <!-- Top Section -->
        <div class="flex flex-col md:flex-row gap-4 mb-8">
            <!-- Large Headline -->
            <div class="md:w-2/3">
                @if ($headline)
                    <div class="h-full overflow-hidden bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <a href="{{ route('news.show', $headline->id) }}">
                            <img src="{{ $headline->image ? asset('storage/' . $headline->image) : asset('images/berita.svg') }}"
                                alt="{{ $headline->title }}" class="object-cover w-full h-48">

                            <div class="p-4 space-y-2">
                                <span class="block text-sm text-blue-600">{{ $headline->created_at->format('d M Y') }}</span>
                                <h3 class="text-2xl font-bold leading-tight hover:text-blue-700 transition">{{ $headline->title }}</h3>
                                <p class="text-gray-700 line-clamp-3">{{ $headline->content }}</p>
                            </div>
                        </a>
                    </div>
                @endif
            </div>

            <!-- 4 Small Cards -->
            <div class="md:w-1/3 grid grid-cols-2 gap-4">
                @foreach ($smallCards as $item)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <a href="{{ route('news.show', $item->id) }}">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/berita.svg') }}"
                                alt="{{ $item->title }}" class="w-full h-32 object-cover">

                            <div class="p-3">
                                <span class="text-xs text-gray-500">{{ $item->created_at->format('d M Y') }}</span>
                                <h4 class="text-sm font-semibold mt-1 line-clamp-2 hover:text-blue-600">{{ $item->title }}</h4>
                                <p class="text-xs text-gray-600 mt-1 line-clamp-3">{{ Str::limit($item->content, 100) }}</p>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            @foreach ($bottomCards as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <a href="{{ route('news.show', $item->id) }}">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/berita.svg') }}"
                            alt="{{ $item->title }}" class="w-full h-40 object-cover">

                        <div class="p-4">
                            <span class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</span>
                            <h4 class="text-md font-semibold mt-1 hover:text-blue-600">{{ $item->title }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $news->links() }}
        </div>
    </div>
</template>



            <template x-if="tab === 'galeri'">
                <div class="pt-5 max-w-6xl w-full">
                    <h2 class="text-3xl font-bold mb-6 text-left">Galeri</h2>

                    <!-- Container for 3 images in one row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Project 1 -->
                        @foreach ($galleries as $gallery)
                            <div class="overflow-hidden rounded-lg shadow-md bg-gray-100">
                                <div class="aspect-[4/3] overflow-hidden">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </template>


        </div>
    </section>
@endsection
