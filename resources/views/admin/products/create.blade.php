@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Produk Baru</h2>

        <!-- Menampilkan Pesan Error Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input Nama Produk -->
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <!-- Input price -->
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}"
                    required>
            </div>

            <!-- Input Deskripsi -->
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <!-- Input Gambar -->
            <div class="form-group">
                <label for="image">Gambar Produk</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <!-- Pilihan Kategori -->
            <div class="form-group">
                <label for="categories">Kategori</label>
                <select class="form-control" id="categories" name="categories[]" multiple required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Tekan Ctrl (Windows) atau Command (Mac) untuk memilih banyak
                    kategori.</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
