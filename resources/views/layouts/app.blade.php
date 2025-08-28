<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Toko Aksesoris')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-200 via-rose-100 to-orange-100 min-h-screen flex flex-col items-center justify-center font-sans relative overflow-hidden">
    <!-- Added decorative background elements inspired by Mitsuri's colorful aesthetic -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        {{-- <div class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-br from-pink-300 to-rose-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-32 right-16 w-16 h-16 bg-gradient-to-br from-orange-300 to-pink- rounded-full opacity-25 animate-bounce"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-gradient-to-br from-rose-300 to-pink-400 rounded-full opacity-15 animate-pulse"></div>
        <div class="absolute bottom-32 right-10 w-12 h-12 bg-gradient-to-br from-pink-400 to-orange-300 rounded-full opacity-30"></div> --}}
    </div>

    <div class="bg-white/90 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-pink-200/50 relative z-10">
        <!-- Enhanced header with gradient text and decorative elements -->
        <div class="text-center mb-6 relative">
            {{-- <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gradient-to-r from-pink-400 to-rose-400 rounded-full"></div>  --}}
            <h1 class="text-3xl font-bold bg-gradient-to-r from-pink-500 via-rose-500 to-orange-400 bg-clip-text text-transparent mb-2">
                @yield('title', 'Toko Aksesoris')
            </h1>
            <div class="w-12 h-0.5 bg-gradient-to-r from-pink-300 to-rose-300 mx-auto rounded-full"></div>
        </div>

        {{-- Enhanced success message with Mitsuri-inspired styling --}}
        @if(session('success'))
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-400 text-green-700 p-4 mb-4 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></div>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        {{-- Enhanced error messages with improved styling --}}
        @if($errors->any())
            <div class="bg-gradient-to-r from-red-50 to-pink-50 border-l-4 border-red-400 text-red-700 p-4 mb-4 rounded-lg shadow-sm">
                <ul class="space-y-1">
                    @foreach($errors->all() as $error)
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-red-400 rounded-full mr-3"></div>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- konten halaman --}}
        <div class="relative">
            @yield('content')
        </div>
    </div>
</body>
</html>
