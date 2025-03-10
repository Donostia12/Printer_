@extends('header')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Tutup">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <!-- Banner Promosi -->
    <section id="beranda">
        <div id="carouselBanner" class="carousel slide" data-ride="carousel">
            <!-- Indikator -->
            <ol class="carousel-indicators">
                <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
                <li data-target="#carouselBanner" data-slide-to="1"></li>
                <li data-target="#carouselBanner" data-slide-to="2"></li>
            </ol>

            <!-- Slide -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/Foto-Utama.jpg') }}" class="d-block w-100 img-fluid" alt="Banner 1"
                        style="max-height: 500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Selamat Datang di Sari Print</h2>
                        <p>Layanan percetakan terbaik untuk semua kebutuhan Anda.</p>
                        <a href="#pemesanan" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Foto-Utama.jpg') }}" class="d-block w-100 img-fluid" alt="Banner 2"
                        style="max-height: 500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Ikuti kami di Sosial Media</h2>
                        <p>Silahkan Check Sosoal Media Kami! dan Check Testimonial kami</p>
                        <a href="#testimoni" class="btn btn-danger btn-lg">ayo jelajahi</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Foto-Utama.jpg') }}" class="d-block w-100 img-fluid" alt="Banner 3"
                        style="max-height: 500px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Kualitas Terbaik</h2>
                        <p>Kami berkomitmen memberikan hasil cetakan terbaik untuk Anda.</p>
                        <a href="#layanan" class="btn btn-success btn-lg">Layanan Kami</a>
                    </div>
                </div>
            </div>

            <!-- Navigasi -->
            <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Berikutnya</span>
            </a>
        </div>
    </section>


    <!-- Gambaran Bisnis -->
    <section class="section py-5" id="tentang">
        <div class="container">
            <h2 class="text-center mb-5">Tentang Sari Print</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/tentang-kami.jpg') }}" class="img-fluid" alt="Tentang Kami">
                </div>
                <div class="col-md-6">
                    <p>Sari Print adalah perusahaan percetakan yang berfokus pada kualitas dan pelayanan terbaik. Dengan
                        pengalaman lebih dari 10 tahun, kami menyediakan berbagai layanan percetakan mulai dari kartu nama,
                        brosur, spanduk, hingga merchandise kustom. Kami berkomitmen untuk memberikan hasil cetakan yang
                        memuaskan dan layanan yang ramah kepada setiap pelanggan.</p>
                    <a href="#layanan" class="btn btn-primary mt-3">Jelajahi Layanan Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Jenis Layanan -->
    <section class="section bg-light py-5" id="layanan">
        <div class="container">
            <h2 class="text-center mb-5">Layanan Kami</h2>

            <!-- Looping tiap kategori -->
            @foreach ($categories as $category)
                <div class="mb-5">
                    <h3 class="mb-4">{{ $category->name }}</h3>
                    <div class="row">
                        @foreach ($category->products as $product)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                        alt="{{ $product->name }}" style="height: 200px; object-fit: cover; width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <a href="{{ route('carts.form') }}"
                                            class="btn btn-outline-primary">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    </section>

    <!-- Testimoni Pelanggan -->
    <section class="section py-5" id="testimoni">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
            <div id="carouselTestimoni" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimoni 1 -->
                    @foreach ($testimonial as $item)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-8 text-center">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="rounded-circle mb-4"
                                        alt="Testimoni 1" width="100" height="100">
                                    <blockquote class="blockquote">
                                        <p class="mb-4">{{ $item->desc }}</p>
                                        <footer class="blockquote-footer">{{ $item->name }}</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Navigasi -->
                <a class="carousel-control-prev" href="#carouselTestimoni" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Sebelumnya</span>
                </a>
                <a class="carousel-control-next" href="#carouselTestimoni" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Berikutnya</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Tautan Media Sosial -->
    <section class="section bg-light py-5" id="sosial">
        <div class="container text-center">
            <h2 class="mb-5">Ikuti Kami di Media Sosial</h2>
            <a href="#" class="btn btn-primary btn-lg mx-2" target="_blank"><i class="fab fa-facebook-f"></i>
                Facebook</a>
            <a href="#" class="btn btn-danger btn-lg mx-2" target="_blank"><i class="fab fa-instagram"></i>
                Instagram</a>
            <a href="#" class="btn btn-info btn-lg mx-2" target="_blank"><i class="fab fa-twitter"></i>
                Twitter</a>
            <a href="#" class="btn btn-dark btn-lg mx-2" target="_blank"><i class="fab fa-linkedin-in"></i>
                LinkedIn</a>
        </div>
    </section>

    <!-- Kontak Kami -->
    <section class="section py-5" id="kontak">
        <div class="container">
            <h2 class="text-center mb-5">Kontak Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat Kantor</h5>
                    <p>Jalan Raya Nomor 123<br>Kota ABC, 12345</p>
                    <h5>Telepon</h5>
                    <p>(021) 123-4567</p>
                    <h5>Email</h5>
                    <p>info@sariprint.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Formulir Testimonial</h5>
                    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="text" class="form-control" id="inputName" name="name"
                                placeholder="Nama Anda" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group">
                            <label for="inputDesc">Deskripsi</label>
                            <textarea class="form-control" id="inputDesc" name="desc" rows="3" placeholder="Isi Testimonial Anda"
                                required></textarea>
                        </div>

                        <!-- Gambar -->
                        <div class="form-group">
                            <label for="inputImage">Unggah Foto</label>
                            <input type="file" class="form-control-file" id="inputImage" name="image"
                                accept="image/*" required>
                            <small class="form-text text-muted">Format file yang didukung: jpg, jpeg, png. Maksimum
                                2MB.</small>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">Kirim Testimonial</button>
                        <a href="{{ url('/') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Pemesanan -->
    <section class="section bg-primary text-white py-5" id="pemesanan">
        <div class="container">
            <h2 class="text-center mb-4">Pemesanan</h2>
            <p class="text-center">Ikuti langkah mudah untuk melakukan pemesanan produk kami.</p>

            <div class="text-center">
                <a href="{{ route('carts.form') }}" class="btn btn-light btn-lg">Mulai Pemesanan</a>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.navbar-custom').addClass('navbar-scrolled');
                } else {
                    $('.navbar-custom').removeClass('navbar-scrolled');
                }
            });

            $('a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    const hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70
                    }, 800);
                }
            });
        });
    </script>
@endsection
