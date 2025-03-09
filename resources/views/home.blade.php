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
                        <h2>Promo Spesial</h2>
                        <p>Dapatkan diskon hingga 20% untuk pemesanan pertama Anda!</p>
                        <a href="#pemesanan" class="btn btn-danger btn-lg">Lihat Promo</a>
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
            <div class="row">



                @foreach ($products as $item)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ asset('images/layanan1.jpg') }}" class="card-img-top" alt="Percetakan Digital">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <a href="{{ route('carts.form') }}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan -->
    <section class="section py-5" id="testimoni">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
            <div id="carouselTestimoni" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimoni 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <img src="{{ asset('images/testimoni1.jpg') }}" class="rounded-circle mb-4"
                                    alt="Testimoni 1" width="100" height="100">
                                <blockquote class="blockquote">
                                    <p class="mb-4">"Pelayanan cepat dan hasil cetakan sangat memuaskan!"</p>
                                    <footer class="blockquote-footer">Andi, <cite title="Perusahaan ABC">Perusahaan
                                            ABC</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <img src="{{ asset('images/testimoni2.jpg') }}" class="rounded-circle mb-4"
                                    alt="Testimoni 2" width="100" height="100">
                                <blockquote class="blockquote">
                                    <p class="mb-4">"Harga terjangkau dengan kualitas terbaik."</p>
                                    <footer class="blockquote-footer">Budi, <cite title="Startup XYZ">Startup XYZ</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 3 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <img src="{{ asset('images/testimoni3.jpg') }}" class="rounded-circle mb-4"
                                    alt="Testimoni 3" width="100" height="100">
                                <blockquote class="blockquote">
                                    <p class="mb-4">"Tim yang profesional dan sangat membantu."</p>
                                    <footer class="blockquote-footer">Citra, <cite title="Event Organizer DEF">Event
                                            Organizer DEF</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
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
            <a href="https://www.facebook.com/sariprint" class="btn btn-primary btn-lg mx-2" target="_blank"><i
                    class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://www.instagram.com/sariprint" class="btn btn-danger btn-lg mx-2" target="_blank"><i
                    class="fab fa-instagram"></i> Instagram</a>
            <a href="https://www.twitter.com/sariprint" class="btn btn-info btn-lg mx-2" target="_blank"><i
                    class="fab fa-twitter"></i> Twitter</a>
            <a href="https://www.linkedin.com/company/sariprint" class="btn btn-dark btn-lg mx-2" target="_blank"><i
                    class="fab fa-linkedin-in"></i> LinkedIn</a>
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
                    <h5>Formulir Kontak</h5>
                    <form>
                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Pesan</label>
                            <textarea class="form-control" id="inputMessage" rows="3" placeholder="Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
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
