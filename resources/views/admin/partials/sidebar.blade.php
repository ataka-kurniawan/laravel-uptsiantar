<aside class="w-64 bg-blue-800 min-h-screen p-5 text-white shadow-lg">
    <div class="flex items-center gap-3 mb-8">
        <img src="{{ asset('images/logo.png') }}" alt="Logo UPT Siantar" class="w-10 h-10 object-contain">
        <h2 class="text-xl font-bold">UPT SIANTAR</h2>
    </div>

    <nav class="space-y-4">
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('gallery.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-image"></i> Kelola Galeri
        </a>
        <a href="{{ route('proyek.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-briefcase"></i> Kelola Proyek
        </a>
        <a href="{{ route('news.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-newspaper"></i> Kelola Berita
        </a>
        <a href="{{ route('manager.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-user-tie"></i> Kelola Manager
        </a>
        <a href="{{ route('users.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-user-shield"></i> Kelola Admin
        </a>
        <a href="{{ route('informasi.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-yellow-400 hover:text-gray-900 transition">
            <i class="fas fa-info-circle"></i> Informasi Pelanggan
        </a>
        <a href="{{ route('logout') }}"
            class="flex items-center gap-3 px-3 py-2 rounded bg-red-500 hover:bg-red-600 transition">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </nav>
</aside>
