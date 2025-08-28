<x-layouts.app title="Tambah Produk">
    <form method="POST" action="{{ route('products.store') }}" class="space-y-3">
        @csrf
        <div>
            <label class="block">Nama Produk</label>
            <input type="text" name="name" class="w-full border p-2 rounded-lg">
        </div>
        <div>
            <label class="block">Harga</label>
            <input type="number" name="price" class="w-full border p-2 rounded-lg">
        </div>
        <div>
            <label class="block">Deskripsi</label>
            <textarea name="description" class="w-full border p-2 rounded-lg"></textarea>
        </div>
        <button class="w-full bg-green-400 hover:bg-green-500 text-white p-2 rounded-lg">Simpan</button>
    </form>
</x-layouts.app>
