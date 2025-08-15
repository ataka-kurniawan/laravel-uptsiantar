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

            <h3>Beranda/Layanan</h3>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                Layanan
            </h1>

            <p class="text-base sm:text-lg max-w-3xl">
                Melayani dengan sigap dan transparan untuk mendukung kebutuhan informasi serta kenyamanan masyarakat
            </p>
        </div>
    </section>

    <section x-data="{ tab: 'informasi' }" class="w-full mx-auto p-6" data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <!-- Tab buttons -->
        <div class="flex justify-between border-b-2 border-gray-300 mb-6">
            <button :class="tab === 'informasi' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'informasi'">
                Permintaan Informasi
            </button>
            <button :class="tab === 'edukasi' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'edukasi'">
                Edukasi Dan Kunjungan
            </button>
        </div>

        <!-- Konten tab -->
        <div class="flex flex-col items-center">
            <template x-if="tab === 'informasi'">

                <div class="pt-5 max-w-4xl w-full mx-auto">
                    <h2 class="text-3xl text-left font-bold mb-8">Permintaan Informasi</h2>
                    @if (session('success'))
                        <div class="text-white bg-green-500 py-3 mt-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form Container -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <form class="space-y-6" action="{{ route('informasi.store') }}" method="POST">
                            @csrf
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nama Lengkap
                                </label>
                                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                            </div>

                            <!-- Nomor HP -->
                            <div>
                                <label for="nomorhp" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nomor HP
                                </label>
                                <input type="tel" id="nomorhp" name="nomorhp" placeholder="Nomor HP"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email
                                </label>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                            </div>

                            <!-- Rincian Informasi Yang Dibutuhkan -->
                            <div>
                                <label for="rincian" class="block text-sm font-medium text-gray-700 mb-2">
                                    Rincian Informasi Yang Dibutuhkan
                                </label>
                                <textarea id="rincian" name="rincian" rows="4" placeholder="Rincian Informasi Yang Dibutuhkan"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </template>


            <template x-if="tab === 'edukasi'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-6">Edukasi Dan Kunjungan</h2>

                    <!-- Edukasi Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-3 text-gray-800">Edukasi</h3>
                        <p class="text-gray-700 mb-4">
                            Kami membuka kesempatan bagi pelajar, mahasiswa, maupun masyarakat umum untuk mendapatkan
                            edukasi seputar ketenagalistrikan, khususnya tentang proses transmisi listrik dan sistem
                            keandalan jaringan.
                        </p>
                        <p class="text-gray-700 mb-2">Kegiatan edukasi ini mencakup:</p>
                        <ul class="list-disc pl-5 space-y-1 text-gray-700 mb-6">
                            <li>Sesi presentasi interaktif</li>
                            <li>Pemutaran video edukatif</li>
                            <li>Tanya jawab bersama tenaga teknis berpengalaman</li>
                        </ul>
                    </div>

                    <!-- Kunjungan Section -->
                    <div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-800">Kunjungan</h3>
                        <p class="text-gray-700 mb-4">
                            PLN UPT Pematang Siantar juga menerima kunjungan langsung ke fasilitas kerja, seperti Gardu
                            Induk dan ruang kontrol sistem, sebagai bagian dari program transparansi dan edukasi publik.
                        </p>
                        <p class="text-gray-700 mb-2">Peserta kunjungan akan mendapatkan:</p>
                        <ul class="list-disc pl-5 space-y-1 text-gray-700">
                            <li>Tur fasilitas dengan pemandu</li>
                            <li>Penjelasan teknis langsung dari petugas lapangan</li>
                            <li>Simulasi prosedur keselamatan kerja</li>
                        </ul>
                    </div>
                </div>
            </template>


        </div>
    </section>
@endsection
