@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<!-- Made container full screen with better desktop layout and enhanced Mitsuri-inspired design -->
<div class="bg-gradient-to-br from-pink-50 via-rose-50 to-orange-50 min-h-screen relative overflow-hidden">
    <!-- Enhanced floating decorative elements -->
    {{-- <div class="absolute top-10 right-20 w-40 h-40 bg-gradient-to-bl from-pink-300 to-rose-200 rounded-full opacity-20 animate-pulse"></div> --}}
    {{-- <div class="absolute top-1/3 left-10 w-32 h-32 bg-gradient-to-tr from-green-300 to-emerald-200 rounded-full opacity-25 animate-bounce"></div>
    <div class="absolute bottom-20 right-1/4 w-28 h-28 bg-gradient-to-bl from-orange-300 to-pink-200 rounded-full opacity-20"></div>
    <div class="absolute bottom-1/3 left-1/4 w-36 h-36 bg-gradient-to-tr from-rose-300 to-pink-200 rounded-full opacity-15"></div> --}}
    
    <!-- Full screen container with centered content and better spacing -->
    <div class="container mx-auto px-8 py-5 h-100 flex flex-col justify-center">
        <!-- Enhanced main card with full width on desktop -->
        <div class="bg-white/90 backdrop-blur-sm shadow-2xl rounded-3xl p-12 max-w-6xl mx-auto w-full border-4 border-pink-200 relative overflow-hidden">
            <!-- Enhanced decorative patterns -->
            <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-bl from-pink-200 to-transparent rounded-full opacity-30 -translate-y-24 translate-x-24"></div>
            <div class="absolute bottom-0 left-0 w-36 h-36 bg-gradient-to-tr from-green-200 to-transparent rounded-full opacity-30 translate-y-18 -translate-x-18"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-pink-100 to-rose-100 rounded-full opacity-10"></div>
            
            <!-- Enhanced header with better typography and spacing -->
            <div class="text-center mt-18 mb-16 relative z-10">
                <h1 class="text-6xl font-bold bg-gradient-to-r from-pink-600 via-rose-500 to-pink-700 bg-clip-text text-transparent mb-6 drop-shadow-sm">Welcome, Admin!</h1>
                <div class="w-100 h-1 bg-gradient-to-r from-pink-400 to-rose-400 mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-600 text-xl font-medium max-w-2xl mx-auto leading-relaxed">Ini adalah halaman dashboard utama toko aksesoris.</p>
            </div>

            <!-- Enhanced grid with better desktop layout and improved cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto relative z-10">
                <a href="{{ route('products.index') }}" 
                   class="group bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 hover:from-pink-600 hover:via-rose-600 hover:to-pink-700 text-white font-bold py-12 px-10 rounded-3xl shadow-xl hover:shadow-2xl text-center transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 border-4 border-pink-300 hover:border-pink-400 relative overflow-hidden">
                   <!-- Card decorative elements -->
                   <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-10 translate-x-10"></div>
                   <div class="absolute bottom-0 left-0 w-16 h-16 bg-white/10 rounded-full translate-y-8 -translate-x-8"></div>
                   
                   <div class="relative z-10">
                       <div class="text-5xl mb-4 group-hover:animate-bounce">📦</div>
                       <div class="text-2xl font-bold mb-2">Kelola Produk</div>
                       <div class="text-pink-100 text-sm">Atur dan kelola semua produk toko</div>
                   </div>
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                        class="group bg-gradient-to-r from-red-400 via-pink-500 to-red-500 hover:from-red-500 hover:via-pink-600 hover:to-red-600 text-white font-bold py-12 px-10 rounded-3xl shadow-xl hover:shadow-2xl w-full transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 border-4 border-red-300 hover:border-red-400 relative overflow-hidden">
                        <!-- Card decorative elements -->
                        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-10 translate-x-10"></div>
                        <div class="absolute bottom-0 left-0 w-16 h-16 bg-white/10 rounded-full translate-y-8 -translate-x-8"></div>
                        
                        <div class="relative z-10">
                            <div class="text-5xl mb-4 group-hover:animate-bounce">🚪</div>
                            <div class="text-2xl font-bold mb-2">Logout</div>
                            <div class="text-red-100 text-sm">Keluar dari dashboard admin</div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
