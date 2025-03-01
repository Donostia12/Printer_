@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Edit Produk</h2>

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

        <!-- Formulir Edit Produk -->
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Method Spoofing -->

            <!-- Input Nama Produk -->
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Input price -->
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $product->price) }}" required>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Input Deskripsi -->
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Input Gambar -->
            <div class="form-group">
                <label for="image">Gambar Produk</label>
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid"
                        style="max-width: 300px;">
                @else
                    <p><i>Gambar produk tidak tersedia</i></p>
                @endif

                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Pilihan Kategori -->
            <div class="form-group">
                <label for="categories">Kategori</label>
                <select class="form-control @error('categories') is-invalid @enderror" id="categories" name="categories[]"
                    multiple required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('categories')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <small class="form-text text-muted">Tekan Ctrl (Windows) atau Command (Mac) untuk memilih banyak
                    kategori.</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
