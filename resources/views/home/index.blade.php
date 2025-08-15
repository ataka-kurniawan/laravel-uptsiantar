@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen" data-aos="fade-up" data-aos-once="true" data-aos-duration="3000">
        <!-- Background Image -->
        <img src="{{ asset('images/bg1.png') }}" alt="PLN Pematangsiantar"
            class="absolute inset-0 w-full h-full object-cover brightness-25">

        <!-- Overlay Content -->
        <div
            class="relative container mx-auto h-full flex flex-col justify-center items-center md:justify-end md:items-start space-y-6 px-4 md:px-6 pb-10 md:pb-20 text-white text-center md:text-left lg:ml-10">

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                Membangun Fondasi Energi Untuk Masa Depan
            </h1>

            <p class="text-base sm:text-lg max-w-xl">
                Menjaga Keandalan dan Efisiensi Jaringan Transmisi Listrik untuk Mendorong
                Pertumbuhan dan Kesejahteraan di Pematang Siantar dan Sekitarnya.
            </p>

            <a href="{{ route('home.profile') }}"
                class="inline-flex items-center px-5 py-3 border-2 border-white text-white rounded-full font-semibold hover:bg-yellow-400 transition">
                Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>

        </div>
    </section>



    <section class="bg-white py-16 mt-[103px] mb-[103px]">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <div class="flex justify-center items-center"data-aos="fade-right" data-aos-once="true"
                data-aos-duration="2000">
                <img src="{{ asset('images/Logo.svg') }}" alt="Logo"
                    class="w-full max-w-2xl h-auto rounded-xl  object-contain">
            </div>

            <!-- Kolom Kanan: Teks -->
            <div data-aos="fade-left" data-aos-once="true" data-aos-duration="2000">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Listrik Untuk Kehidupan Yang Lebih Baik
                </h2>
                <p class="text-gray-600 mb-6 text-[16px]">
                    Di setiap rumah yang terang, di setiap usaha yang tumbuh, dan di setiap langkah anak bangsa mengejar
                    cita, listrik memegang peran penting. PLN terus berinovasi untuk menghadirkan listrik yang tidak hanya
                    menyala, tapi juga membawa kehidupan yang lebih baik bagi seluruh masyarakat Indonesia.
                </p>
                <a href="{{ route('home.profile') }}"
                    class="inline-block px-8 py-3 border-2 border-[#475569] text-[#475569] font-semibold rounded-full hover:bg-yellow-500 transition">
                    Selengkapnya
                </a>
            </div>

        </div>
    </section>

    <section class="relative py-16 md:py-24 lg:py-32 xl:py-[133px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/image.png') }}');"data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <!-- Overlay with better opacity control -->
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Content with responsive margins and padding -->
            <div class="max-w-3xl mx-auto lg:ml-12 text-white px-4 sm:px-0">
                <!-- Subheading with responsive sizing -->
                <h3 class="text-xs sm:text-[12px] font-semibold uppercase tracking-wider mb-2 sm:mb-3">
                    Sekilas Tentang
                </h3>

                <!-- Main heading with responsive sizing and line-height -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-snug sm:leading-tight mb-4 sm:mb-5">
                    UPT Pematangsiantar
                </h2>

                <!-- Paragraph with responsive sizing -->
                <p class="mb-6 text-base sm:text-lg leading-relaxed">
                    PT PLN (Persero) UIP3BS UPT Pematang Siantar merupakan Unit Pelaksana Transmisi (UPT) di bawah naungan
                    Unit Induk Pembangunan Pembangkitan dan Jaringan Sumatera Bagian Selatan (UIP3BS). UPT Pematang Siantar
                    bertanggung jawab atas pengoperasian,
                </p>

                <!-- Buttons with responsive sizing and spacing -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="{{ route('home.profile') }}"
                        class="inline-block px-6 py-2 sm:px-8 sm:py-3 border-2 border-white text-white font-semibold rounded-full hover:bg-yellow-500 transition text-sm sm:text-base text-center">
                        Selengkapnya
                    </a>

                    <a href="{{ route('home.profile', ['tab' => 'sertifikasi']) }}"
                        class="inline-block px-6 py-2 sm:px-8 sm:py-3 border-2 border-white text-white font-semibold rounded-full hover:bg-yellow-500 transition text-sm sm:text-base text-center">
                        Penghargaan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:py-12 lg:py-16 bg-white px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <div class="container mx-auto">
            <!-- Heading -->
            <div class="mb-6 md:mb-8 lg:mb-10 px-4 sm:px-6">
                <h3 class="text-blue-500 text-base md:text-lg font-semibold mb-1 md:mb-2">Media Informasi</h3>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">UPT Pematangsiantar News Room</h2>
            </div>

            @php
                $headline = $news->first();
                $smallCards = $news->skip(1)->take(4);
            @endphp

            <!-- Grid Gambar -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3 sm:gap-4 md:gap-5">
                <!-- Gambar Besar -->
                <div class="relative md:col-span-2 rounded-lg overflow-hidden shadow-lg aspect-[4/3]">
                    @if ($headline)
                        <img src="{{ $headline->image ? asset('storage/' . $headline->image) : asset('images/berita.svg') }}"
                            alt="{{ $headline->title }}" class="w-full h-full aspect-auto object-cover">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-3 sm:p-4 text-white bg-gradient-to-t from-black/80 to-transparent">
                            <a href="{{ route('news.show', $headline->id) }}"
                                class="text-sm sm:text-base md:text-lg lg:text-xl font-bold hover:underline">
                                {{ $headline->title }}
                            </a>
                            <p class="text-xs mt-1 line-clamp-2">{{ Str::limit($headline->content, 100) }}</p>
                        </div>
                    @endif
                </div>

                <!-- 4 Gambar Kecil -->
                <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    @foreach ($smallCards as $item)
                        <div class="relative rounded-lg overflow-hidden shadow aspect-[4/3]">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/berita.svg') }}"
                                alt="{{ $item->title }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black/80 to-transparent">
                                <a href="{{ route('news.show', $item->id) }}"
                                    class="text-xs sm:text-sm font-semibold text-white hover:underline">
                                    {{ $item->title }}
                                </a>
                                <p class="text-xs text-gray-200 mt-1 line-clamp-2">{{ Str::limit($item->content, 80) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-8 sm:py-12 mx-auto" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-12 items-center">
                <!-- Left: Maps -->
                <div class="flex justify-center order-2 md:order-1">
                    <div class="rounded-lg overflow-hidden shadow-lg w-full">
                        <div class="aspect-w-1 aspect-h-1"> <!-- Maintain 1:1 aspect ratio -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d601.7004331464259!2d99.10913933301366!3d2.965330646472141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303186a6c10a02b1%3A0x9d3e8f4e8c2493ff!2sPT%20PLN%20(Persero)%20UIP3BS%20UPT%20Pematang%20Siantar!5e0!3m2!1sen!2sid!4v1754890722391!5m2!1sen!2sid"
                                class="w-full h-64 sm:h-80 md:h-96 lg:h-[450px]" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Right: Info -->
                <div class="flex flex-col justify-center text-center md:text-left order-1 md:order-2">
                    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-4 sm:mb-6">Kantor PLN Pematangsiantar</h2>

                    <div class="space-y-4 sm:space-y-6">
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Alamat :
                                <span class="font-light block sm:inline mt-1 sm:mt-0">Jl. Sangnawaluh No.Km.4 5, Marihat
                                    Baris, Kec. Siantar, Kabupaten Simalungun, Sumatera Utara 21151</span>
                            </h3>
                        </div>

                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Wilayah kerja :
                                <span class="font-light block sm:inline mt-1 sm:mt-0">Siantar, Tanah Jawa, Berastagi,
                                    Simalungun, dan sekitarnya</span>
                            </h3>
                        </div>

                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Kontak :
                                <span class="font-light">(0622) 7550874, 7550883</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
