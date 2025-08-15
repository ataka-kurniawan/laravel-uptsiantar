<nav id="main-navbar" class="fixed top-0 left-0 w-full z-50  transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center py-7 px-6 lg:space-x-25">
        <!-- Logo -->
        <div class="flex items-center space-x-2 lg:ml-30">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('images/Logo.png') }}" alt="PLN Logo" class="h-8">
            </a>
        </div>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex md:space-x-[100px] font-medium text-white">
            <li>
                <a href="{{ route('home.index') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.index') ? 'text-yellow-400' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('home.profile') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.profile') ? 'text-yellow-400' : '' }}">
                    Profil
                </a>
            </li>
            <li>
                <a href="{{ route('home.operasional') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.operasional') ? 'text-yellow-400' : '' }}">
                    Operasional
                </a>
            </li>
            <li>
                <a href="{{ route('home.publikasi') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.publikasi') ? 'text-yellow-400' : '' }}">
                    Publikasi
                </a>
            </li>
            <li>
                <a href="{{ route('home.k3') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.k3') ? 'text-yellow-400' : '' }}">
                    K3 & Lingkungan
                </a>
            </li>
            <li>
                <a href="{{ route('home.layanan') }}"
                    class="hover:text-yellow-400 transition {{ request()->routeIs('home.layanan') ? 'text-yellow-400' : '' }}">
                    Layanan
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden absolute top-full left-0 w-full bg-black/90 md:hidden z-50 transition-all duration-300 origin-top scale-y-0">
        <ul class="flex flex-col space-y-2 py-4 px-6 text-white">
            <li>
                <a href="{{ route('home.index') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.index') ? 'text-yellow-400' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('home.profile') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.profile') ? 'text-yellow-400' : '' }}">
                    Profil
                </a>
            </li>
            <li>
                <a href="{{ route('home.operasional') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.operasional') ? 'text-yellow-400' : '' }}">
                    Operasional
                </a>
            </li>
            <li>
                <a href="{{ route('home.publikasi') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.publikasi') ? 'text-yellow-400' : '' }}">
                    Publikasi
                </a>
            </li>
            <li>
                <a href="{{ route('home.k3') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.k3') ? 'text-yellow-400' : '' }}">
                    K3 & Lingkungan
                </a>
            </li>
            <li>
                <a href="{{ route('home.layanan') }}"
                    class="hover:text-yellow-400 {{ request()->routeIs('home.layanan') ? 'text-yellow-400' : '' }}">
                    Layanan
                </a>
            </li>
        </ul>
    </div>
</nav>

@push('scripts')
<script>
    const navbar = document.getElementById('main-navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle mobile menu dengan animasi scale
    menuToggle.addEventListener('click', () => {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden', 'scale-y-0');
            mobileMenu.classList.add('scale-y-100');
        } else {
            mobileMenu.classList.remove('scale-y-100');
            mobileMenu.classList.add('scale-y-0');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 200); // sesuaikan durasi animasi
        }
    });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-blue-700', 'shadow-md');
        } else {
            navbar.classList.remove('bg-blue-700', 'shadow-md');
        }
    });
</script>
@endpush
