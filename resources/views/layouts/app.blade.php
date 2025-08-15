<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PLN - Perusahaan Listrik Negara' }}</title>
    @vite('resources/css/app.css') {{-- Jika pakai Vite & Tailwind --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('build/assets/app-CJp8S-eQ.css')}}">
</head>

<body class="font-sans overflow-x-hidden">

    <div class="overflow-x-hidden">
        @include('partials.navbar')
        <main>@yield('content')</main>
        @include('partials.footer')
    </div>

    {{-- Scripts --}}
    @stack('scripts')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<script>
function carousel() {
    return {
        scrollAmount: 0,
        scrollStep: 200,
        scrollLeft() {
            this.$refs.carousel.scrollBy({
                left: -this.scrollStep,
                behavior: 'smooth'
            });
        },
        scrollRight() {
            this.$refs.carousel.scrollBy({
                left: this.scrollStep,
                behavior: 'smooth'
            });
        },
        init() {
            // Auto slide setiap 3 detik
            setInterval(() => {
                this.scrollRight();
            }, 3000);
        }
    }
}
</script>
</body>

</html>
