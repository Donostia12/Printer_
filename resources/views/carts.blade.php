@extends('header')

@section('content')
    <section>
        <div class="container " style="margin-top: 100px;">
            <h2 class="text-center mb-4">Formulir Pemesanan</h2>

            <!-- Menampilkan Pesan Error Validasi -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulir Pemesanan -->
            <form action="{{ route('carts.form.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Informasi Pelanggan -->
                <div class="form-group">
                    <label for="customer_name">Nama Lengkap</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name"
                        value="{{ old('customer_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="customer_email">Email</label>
                    <input type="email" class="form-control" id="customer_email" name="customer_email"
                        value="{{ old('customer_email') }}" required>
                </div>

                <div class="form-group">
                    <label for="customer_phone">Nomor Telepon</label>
                    <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                        value="{{ old('customer_phone') }}" required>
                </div>

                <!-- Pilih Produk -->
                <div class="form-group">
                    <label for="product_id">Produk</label>
                    <select class="form-control" id="product_id" name="product_id" required>
                        <option value="">-- Pilih Produk --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                {{ $product->name }} - Rp {{ number_format($product->price, 2) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Jumlah Cetakan -->
                <div class="form-group">
                    <label for="quantity">Jumlah Cetakan</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"
                        value="{{ old('quantity', 1) }}" min="1" required>
                </div>

                <!-- Bahan yang Diinginkan -->
                <div class="form-group">
                    <label for="material">Bahan yang Diinginkan</label>
                    <input type="text" class="form-control" id="material" name="material" value="{{ old('material') }}"
                        required>
                </div>

                <!-- Unggah File Desain -->
                <div class="form-group">
                    <label for="design_file">Unggah File Desain</label>
                    <input type="file" class="form-control-file" id="design_file" name="design_file" required>
                    <small class="form-text text-muted">Format file: jpg, jpeg, png, pdf. Maksimum 2MB.</small>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pemesanan</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </section>
@endsection
