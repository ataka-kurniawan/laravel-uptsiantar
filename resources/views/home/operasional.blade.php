@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[70vh]"data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
        <!-- Background Image -->
        <img src="{{ asset('images/profile.svg') }}" alt="PLN Pematangsiantar"
            class="absolute inset-0 w-full h-full object-cover brightness-25">

        <!-- Overlay Content -->
        <div
            class="relative container mx-auto h-full flex flex-col justify-center items-center md:justify-end md:items-start space-y-3 px-4 md:px-6 pb-10 md:pb-20 text-white text-center md:text-left lg:ml-10">

            <h3>Beranda/Operasional</h3>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl">
                Operasional
            </h1>

            <p class="text-base sm:text-lg max-w-3xl">
                Mendukung keandalan sistem kelistrikan melalui pengelolaan jaringan dan pemeliharaan yang terencana.
            </p>
        </div>
    </section>

    <section x-data="{ tab: 'peta' }" class="w-full mx-auto p-6" data-aos="fade-up" data-aos-once="true"
        data-aos-duration="2000">
        <!-- Tab buttons -->
        <div class="flex justify-between border-b-2 border-gray-300 mb-6">
            <button :class="tab === 'peta' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'peta'">
                Peta Jaringan Transformasi
            </button>
            <button :class="tab === 'proyek' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                class="px-4 py-2 font-medium flex-1 text-center" @click="tab = 'proyek'">
                Proyek Dan Pemeliharaan
            </button>
        </div>

        <!-- Konten tab -->
        <div class="flex flex-col items-center">
            <template x-if="tab === 'peta'">
                <div class="pt-5 max-w-4xl w-full">
                    <h2 class="text-3xl text-left font-bold mb-4 ">Peta Jaringan Transmisi</h2>
                    <div class="flex flex-col space-y-6 items-center">
                        <div class="flex justify-start">
                            <img src="{{ asset('images/peta.svg') }}" alt="Gedung UPT Pematang Siantar"
                                class="shadow-md w-full max-w-2xl" />
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="tab === 'proyek'">
                <div class="pt-5 max-w-6xl w-full">
                    <h2 class="text-3xl font-bold mb-6 text-left">Proyek Dan Pemeliharaan</h2>

                    <!-- Container for 4 images in one row -->
                    <div class="flex flex-wrap gap-7 justify-between">
                        @foreach ($proyeks as $proyek)
                            <div class="w-[23%] min-w-[150px]"> <!-- Adjust width as needed -->
                                <div class="aspect-[3/4] overflow-hidden shadow-md bg-gray-100">
                                    <img src="{{ asset('storage/' . $proyek->image) }}" alt="Proyek 1"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                                <div class="mt-2 text-center">
                                    <p class="font-medium text-gray-800">{{$proyek->title}}</p>
                                    <p class="text-sm text-gray-500">{{$proyek->year}}</p>
                                </div>
                            </div>
                        @endforeach
                        <!-- Project 1 -->

                    </div>
                </div>
            </template>


        </div>
    </section>
@endsection
