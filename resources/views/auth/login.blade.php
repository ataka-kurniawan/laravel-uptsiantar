<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyApp</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md border border-blue-100">
        <h2 class="text-3xl font-bold text-blue-800 text-center mb-6">Login</h2>

        @if(session('error'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-blue-900 mb-1 font-medium">Email</label>
                <input type="email" name="email" id="email"
                       value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="Masukkan email" required>
            </div>

            <div>
                <label for="password" class="block text-blue-900 mb-1 font-medium">Password</label>
                <input type="password" name="password" id="password"
                       class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="Masukkan password" required>
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-semibold transition">
                Login
            </button>
        </form>

        <p class="text-center mt-4 text-sm text-gray-600">
            © 2025 <span class="text-yellow-500 font-semibold">UPT Siantar</span>
        </p>
    </div>

</body>
</html>
