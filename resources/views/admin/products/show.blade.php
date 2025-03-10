@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Detail Produk</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>{{ $product->name }}</h4>
            </div>
            <div class="card-body">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid"
                        style="max-width: 300px;">
                @else
                    <p><i>Gambar produk tidak tersedia</i></p>
                @endif

                <p><strong>Harga:</strong> Rp {{ number_format($product->price, 2) }}</p>

                <p><strong>Deskripsi:</strong></p>
                <p>{{ $product->description ?? 'Tidak ada deskripsi untuk produk ini.' }}</p>


                <p><strong>Kategori:</strong></p>
                @if ($product->categories->count() > 0)
                    <ul>
                        @foreach ($product->categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p><i>Produk ini belum memiliki kategori.</i></p>
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Produk</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Produk</button>
                </form>
            </div>
        </div>
    </div>
@endsection
