@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Produk</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>price</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>
                            @foreach ($product->categories as $category)
                                <span class="badge badge-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
