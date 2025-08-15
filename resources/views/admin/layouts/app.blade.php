<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.min.css')}}">
</head>

<body class="bg-gray-50 text-gray-800 flex">

    {{-- Sidebar --}}
    @include('admin.partials.sidebar')

    <div class="flex-1 flex flex-col min-h-screen">
        {{-- Navbar --}}
        @include('admin.partials.navbar')

        {{-- Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
