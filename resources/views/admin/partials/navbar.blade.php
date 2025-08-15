<header class="bg-white px-6 py-4 flex justify-between items-center shadow border-b">
    <h1 class="text-xl font-semibold text-gray-800">{{ $title ?? 'Dashboard' }}</h1>
    <div class="flex items-center space-x-4">
        <span class="text-gray-700">Halo, {{ Auth::user()->name ?? 'User' }}</span>
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'User') }}&background=2563eb&color=fff" 
             class="w-10 h-10 rounded-full border border-gray-300" alt="Avatar">
    </div>
</header>
