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

            <h3>Beranda/Tentang Kami</h3>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                Tentang Kami
            </h1>

            <p class="text-base sm:text-lg max-w-3xl">
                PT PLN (Persero) UIP3BS UPT Pematang Siantar merupakan Unit Pelaksana Transmisi (UPT) di bawah naungan Unit
                Induk Pembangunan Pembangkitan dan Jaringan Sumatera Bagian Selatan (UIP3BS).
            </p>
        </div>
    </section>

    <section x-data="{
        tab: 'profil',
        init() {
            const params = new URLSearchParams(window.location.search);
            const t = params.get('tab'); // ambil ?tab=...
            if (t) this.tab = t;
        }
    }" class="w-full mx-auto p-6" data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <!-- Tab buttons -->
        <div class="flex flex-wrap justify-between border-b-2 border-gray-300 mb-6 overflow-x-auto">
            <!-- Tab Buttons -->
            <button :class="tab === 'profil' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'profil'">
                Sekilas Profil
            </button>

            <button :class="tab === 'sertifikasi' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'sertifikasi'">
                Sertifikasi & Penghargaan
            </button>

            <button :class="tab === 'struktur' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'struktur'">
                Struktur Organisasi
            </button>

            <button :class="tab === 'manager' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'manager'">
                Masa Jabatan Manager
            </button>

            <button :class="tab === 'visi' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'visi'">
                Visi & Misi
            </button>

            <button :class="tab === 'tata' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-2 sm:px-3 py-2 font-medium flex-shrink-0 text-sm sm:text-base text-center min-w-max"
                @click="tab = 'tata'">
                Tata Nilai
            </button>
        </div>

        <!-- Konten tab -->
        <div class="flex flex-col items-center">
            <template x-if="tab === 'profil'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-4 ">Sekilas UPT Pematang Siantar</h2>
                    <div class="flex flex-col space-y-6 items-center">
                        <p class="text-gray-700  leading-relaxed text-left">
                            PT PLN (Persero) UIP3BS UPT Pematang Siantar merupakan
                            Unit Pelaksana Transmisi (UPT) di bawah naungan Unit Induk Pembangunan Pembangkitan dan
                            Jaringan Sumatera Bagian Selatan (UIP3BS). UPT Pematang Siantar bertanggung jawab atas
                            pengoperasian,
                            pemeliharaan, dan pengamanan infrastruktur jaringan transmisi listrik, seperti Saluran Udara
                            Tegangan Tinggi (SUTT) dan Gardu Induk, guna menjamin keandalan pasokan listrik di wilayah
                            kerjanya, khususnya kawasan Sumatera Utara. Dengan mengedepankan prinsip Keselamatan dan
                            Kesehatan
                            Kerja (K3), efisiensi operasional, dan komitmen pada pelayanan publik, UPT Pematang Siantar
                            terus
                            mendukung terwujudnya sistem ketenagalistrikan nasional yang andal dan berkelanjutan.
                        </p>
                        <div class="flex justify-start">
                            <img src="{{ asset('images/img2.svg') }}" alt="Gedung UPT Pematang Siantar"
                                class="shadow-md w-full max-w-2xl" />
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="tab === 'sertifikasi'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl font-bold mb-4  text-left">Sertifikasi Dan Penghargaan</h2>
                    <div class="flex flex-col space-y-6 items-center text-left">
                        <p class="text-gray-700 leading-relaxed text-left">
                            Sertifikasi & Penghargaan terbaru yang diraih UPT Pematang Siantar sebagai bentuk komitmen
                            terhadap mutu layanan dan keselamatan kerja, UPT PLN Pematang Siantar telah memperoleh
                            berbagai sertifikasi resmi serta penghargaan dari instansi pemerintah dan lembaga
                            independen. Pencapaian ini menjadi bukti nyata atas dedikasi kami dalam menjunjung tinggi
                            profesionalisme dan standar industri ketenagalistrikan.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 w-full">
                            <!-- Gambar 1 -->
                            <div class="overflow-hidden rounded-lg  ">
                                <!-- Image Container -->
                                <div class="flex justify-center items-center p-2">
                                    <img src="{{ asset('images/1.svg') }}" alt="Gedung PLN 1"
                                        class="max-w-full max-h-48 object-scale-down hover:scale-105 transition-transform duration-300">
                                </div>

                                <!-- Caption Container -->
                                <div class="p-3 text-center">
                                    <!-- Year Badge -->
                                    <span class="inline-block  text-black text-xs font-semibold px-2.5 py-0.5 rounded mb-2">
                                        2023
                                    </span>

                                    <!-- Description -->
                                    <p class="text-gray-700 text-sm mt-1">
                                        Nusantara SR Awards 2025
                                </div>
                            </div>


                            <!-- Gambar 2 -->
                            <div class="overflow-hidden rounded-lg  ">
                                <!-- Image Container -->
                                <div class="flex justify-center items-center p-2">
                                    <img src="{{ asset('images/2.png') }}" alt="Gedung PLN 1"
                                        class="max-w-full max-h-48 object-scale-down hover:scale-105 transition-transform duration-300">
                                </div>

                                <!-- Caption Container -->
                                <div class="p-3 text-center">
                                    <!-- Year Badge -->
                                    <span class="inline-block  text-black text-xs font-semibold px-2.5 py-0.5 rounded mb-2">
                                        2023
                                    </span>

                                    <!-- Description -->
                                    <p class="text-gray-700 text-sm mt-1">
                                        Nusantara SR Awards 2025
                                </div>
                            </div>

                            <!-- Gambar 3 -->
                            <div class="overflow-hidden rounded-lg  ">
                                <!-- Image Container -->
                                <div class="flex justify-center items-center p-2">
                                    <img src="{{ asset('images/3.svg') }}" alt="Gedung PLN 1"
                                        class="max-w-full max-h-48 object-scale-down hover:scale-105 transition-transform duration-300">
                                </div>

                                <!-- Caption Container -->
                                <div class="p-3 text-center">
                                    <!-- Year Badge -->
                                    <span class="inline-block  text-black text-xs font-semibold px-2.5 py-0.5 rounded mb-2">
                                        2023
                                    </span>

                                    <!-- Description -->
                                    <p class="text-gray-700 text-sm mt-1">
                                        Nusantara SR Awards 2025
                                </div>
                            </div>

                            <!-- Gambar 4 -->
                            <div class="overflow-hidden rounded-lg  ">
                                <!-- Image Container -->
                                <div class="flex justify-center items-center p-2">
                                    <img src="{{ asset('images/4.svg') }}" alt="Gedung PLN 1"
                                        class="max-w-full max-h-48 object-scale-down hover:scale-105 transition-transform duration-300">
                                </div>

                                <!-- Caption Container -->
                                <div class="p-3 text-center">
                                    <!-- Year Badge -->
                                    <span class="inline-block  text-black text-xs font-semibold px-2.5 py-0.5 rounded mb-2">
                                        2023
                                    </span>

                                    <!-- Description -->
                                    <p class="text-gray-700 text-sm mt-1">
                                        Nusantara SR Awards 2025
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="tab === 'struktur'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-4 ">Struktur Organisasir</h2>
                    <div class="flex flex-col space-y-20 items-center">
                        <p class="text-gray-700 font-regular  leading-relaxed text-left">
                            Organisasi kami dibentuk secara terstruktur untuk memastikan koordinasi yang efisien, tanggung
                            jawab yang jelas, dan pelayanan yang responsif. Setiap unit dan individu memiliki peran
                            strategis dalam mendukung operasional dan pengembangan layanan kelistrikan.
                        </p>
                        <div class="flex justify-start space-y-10">
                            <img src="{{ asset('images/so.svg') }}" alt="Gedung UPT Pematang Siantar"
                                class="shadow-md w-full max-w-2xl" />
                        </div>
                    </div>
                </div>
            </template>
            <template x-if="tab === 'manager'">
                <div x-data="carousel()" class="pt-5 w-full px-4 max-w-7xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8 text-center">Masa Jabatan Manager</h2>

                    <!-- Carousel Container -->
                    <div class="relative">
                        <!-- Prev Button -->
                        <button @click="scrollLeft()"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full shadow z-10 hover:bg-black/70 transition">
                            &#10094;
                        </button>

                        <!-- Next Button -->
                        <button @click="scrollRight()"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full shadow z-10 hover:bg-black/70 transition">
                            &#10095;
                        </button>

                        <!-- Carousel Items -->
                        <div x-ref="carousel" class="flex overflow-hidden gap-4 md:gap-6 lg:gap-8 py-2 scroll-smooth">
                            @foreach ($managers as $manager)
                                <div class="flex-shrink-0 flex flex-col items-center w-1/2 sm:w-1/3 md:w-1/5">
                                    <div class="w-full aspect-[3/4] overflow-hidden rounded-lg shadow-md bg-gray-50 mb-3">
                                        <img src="{{ $manager->image ? asset('storage/' . $manager->image) : asset('images/manager.svg') }}"
                                            alt="{{ $manager->name }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-center px-2">
                                        <h3 class="font-semibold text-sm md:text-base mb-1">{{ $manager->name }}</h3>
                                        <p class="text-gray-600 text-xs md:text-sm">{{ $manager->year }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </template>



            <template x-if="tab === 'visi'">
                <div class="pt-5 max-w-4xl w-full text-center">
                    <h2 class="text-3xl font-bold mb-4">Visi & Misi</h2>
                    <p class="text-gray-700 text-left">Landasan arah dan tujuan kami dalam memberikan layanan terbaik. Visi
                        dan misi
                        UPT PLN Pematang Siantar menjadi pedoman dalam setiap langkah operasional, pengambilan keputusan,
                        serta upaya peningkatan kualitas layanan kelistrikan yang menyentuh seluruh lapisan masyarakat.</p>

                    <div class="flex justify-center mt-20">
                        <img src="{{ asset('images/vm.svg') }}" alt="Gedung UPT Pematang Siantar"
                            class="shadow-md w-full max-w-2xl" />
                    </div>
                </div>
            </template>

            <template x-if="tab === 'tata'">
                <div class="pt-5 max-w-4xl w-full text-center">
                    <h2 class="text-3xl font-bold mb-4">Tata Nilai</h2>
                    <p class="text-gray-700">Tata nilai menjadi fondasi budaya kerja kami. Dengan menjunjung tinggi
                        integritas, profesionalisme, dan kepedulian, kami terus berkomitmen memberikan kontribusi terbaik
                        bagi pelanggan, perusahaan, dan bangsa.</p>

                    <div class="flex justify-center mt-20">
                        <img src="{{ asset('images/tn.svg') }}" alt="Gedung UPT Pematang Siantar"
                            class="shadow-md w-full max-w-2xl" />
                    </div>
                </div>
            </template>
        </div>
    </section>
@endsection
