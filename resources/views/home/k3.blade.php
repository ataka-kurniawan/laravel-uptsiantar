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

            <h3>Beranda/K3 & Lingkungan</h3>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                K3 & Lingkungan
            </h1>

            <p class="text-base sm:text-lg max-w-3xl">
                Komitmen kami terhadap keselamatan kerja dan pelestarian lingkungan menjadi fondasi dalam setiap langkah
                operasional
            </p>
        </div>
    </section>

    <section x-data="{ tab: 'protokol' }" class="w-full mx-auto p-6" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
        <!-- Tab buttons -->
        <div class="flex justify-between border-b-2 border-gray-300 mb-6">
            <button :class="tab === 'protokol' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'protokol'">
                Protokol K3
            </button>
            <button :class="tab === 'lingkungan' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'lingkungan'">
                Program Lingkungan
            </button>
        </div>

        <!-- Konten tab -->
        <div class="flex flex-col items-center">
            <template x-if="tab === 'protokol'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-4">Protokol K3</h2>

                    <!-- Paragraph content -->
                    <div class="mb-8 text-left">
                        <p class="text-gray-700 mb-4">
                            Kami menerapkan standar protokol K3 yang ketat untuk memastikan setiap aktivitas kerja berjalan
                            dengan aman, efisien, dan bebas dari risiko. Protokol ini mencakup:
                        </p>

                        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
                            <li>Pelatihan rutin K3 bagi seluruh pegawai dan mitra kerja</li>
                            <li>Penggunaan Alat Pelindung Diri (APD) sesuai standar</li>
                            <li>Sistem pelaporan dan evaluasi insiden kerja</li>
                            <li>Audit internal dan pemantauan risiko secara berkala</li>
                        </ul>

                        <p class="text-gray-700">
                            Tujuannya adalah menciptakan lingkungan kerja yang sehat, selamat, dan produktif.
                        </p>
                    </div>

                    <!-- Image container -->
                    <div class="grid grid-cols-1 md:grid-cols-2 max-w-6xl gap-20">
                        <!-- Image 1 -->
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/gb1.svg') }}" alt="Pelatihan K3"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>

                        <!-- Image 2 -->
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/gb2.svg') }}" alt="APD Standar"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>
                    </div>
                </div>
            </template>

            <template x-if="tab === 'lingkungan'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-4">Program Lingkungan</h2>

                    <!-- Paragraph content -->
                    <div class="mb-8 text-left">
                        <p class="text-gray-700 mb-4">
                            Dalam menjalankan tugas transmisi kelistrikan, kami juga aktif mendukung upaya pelestarian
                            lingkungan melalui berbagai program keberlanjutan, antara lain:
                        </p>

                        <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-4">
                            <li>Penanaman pohon di sekitar jalur transmisi</li>
                            <li>Pengelolaan limbah B3 dan non-B3 secara bertanggung jawab</li>
                            <li>Penggunaan teknologi ramah lingkungan</li>
                            <li>Edukasi lingkungan kepada masyarakat sekitar</li>
                        </ul>

                        <p class="text-gray-700">
                           Kami percaya bahwa keberhasilan operasional tidak hanya dilihat dari keandalan pasokan listrik, tapi juga dari dampak positifnya terhadap lingkungan.
                        </p>
                    </div>

                    <!-- Image container -->
                    <div class="grid grid-cols-1 md:grid-cols-2 max-w-6xl gap-20">
                        <!-- Image 1 -->
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/lng2.svg') }}" alt="Pelatihan K3"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>

                        <!-- Image 2 -->
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/lng3.svg') }}" alt="APD Standar"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>

                         <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/lng2.svg') }}" alt="Pelatihan K3"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>

                        <!-- Image 2 -->
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/lng3.svg') }}" alt="APD Standar"
                                class="w-full h-80 object-cover hover:scale-105 transition-transform duration-300">

                        </div>
                    </div>
                </div>
            </template>


        </div>
    </section>
@endsection
