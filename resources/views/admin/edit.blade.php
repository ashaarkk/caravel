<x-layouts.app title="Edit Produk">
    <form method="POST" action="{{ route('products.update',$product->id) }}" class="space-y-3">
        @csrf @method('PUT')
        <div>
            <label class="block">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full border p-2 rounded-lg">
        </div>
        <div>
            <label class="block">Harga</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-full border p-2 rounded-lg">
        </div>
        <div>
            <label class="block">Deskripsi</label>
            <textarea name="description" class="w-full border p-2 rounded-lg">{{ $product->description }}</textarea>
        </div>
        <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-white p-2 rounded-lg">Update</button>
    </form>
</x-layouts.app>
