@extends('layouts.app')

@section('title', 'Kelola Produk')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold text-pink-600 mb-4">📦 Daftar Produk</h1>
    
    <a href="{{ route('products.create') }}" 
       class="bg-pink-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-pink-600 transition">
       ➕ Tambah Produk
    </a>

    <table class="table-auto w-full mt-6 bg-white shadow-md rounded-lg">
        <thead class="bg-pink-200">
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="text-center border-b">
                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td class="px-4 py-2 flex justify-center gap-2">
                    <a href="{{ route('products.edit', $product->id) }}" 
                       class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg">✏️ Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg">🗑 Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
