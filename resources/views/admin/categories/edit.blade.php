@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Edit Kategori</h2>

        <!-- Menampilkan Pesan Sukses -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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

        <!-- Formulir Edit Kategori -->
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- SPOOFING METHOD PUT -->

            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name"
                    value="{{ old('name', $category->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Perbarui</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
