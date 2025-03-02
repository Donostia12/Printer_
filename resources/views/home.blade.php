@extends('header')

@section('content')
    <section class="banner" id="beranda">
        <div class="container text-center">
            <h1 class="display-4">Selamat Datang di Sari Print</h1>
            <p class="lead">Layanan percetakan terbaik untuk semua kebutuhan Anda.</p>
            <a href="#pemesanan" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Gambaran Bisnis -->
    <section class="section" id="tentang">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Sari Print</h2>
            <p class="text-center">Sari Print adalah perusahaan percetakan yang berfokus pada kualitas dan pelayanan
                terbaik. Kami menyediakan berbagai layanan percetakan mulai dari kartu nama, brosur, spanduk, hingga
                merchandise kustom.</p>
        </div>
    </section>

    <!-- Jenis Layanan -->
    <section class="section" id="layanan">
        <div class="container">
            <h2 class="text-center mb-4">Layanan Kami</h2>
            <div class="row">
                <!-- Layanan 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/layanan1.jpg') }}" class="card-img-top" alt="Layanan 1">
                        <div class="card-body">
                            <h5 class="card-title">Percetakan Digital</h5>
                            <p class="card-text">Cetak dokumen Anda dengan cepat dan berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>
                <!-- Layanan 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/layanan2.jpg') }}" class="card-img-top" alt="Layanan 2">
                        <div class="card-body">
                            <h5 class="card-title">Cetak Offset</h5>
                            <p class="card-text">Solusi cetak massal dengan harga yang kompetitif.</p>
                        </div>
                    </div>
                </div>
                <!-- Layanan 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/layanan3.jpg') }}" class="card-img-top" alt="Layanan 3">
                        <div class="card-body">
                            <h5 class="card-title">Merchandise Kustom</h5>
                            <p class="card-text">Buat merchandise unik dengan desain Anda sendiri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan -->
    <section class="section bg-light" id="testimoni">
        <div class="container">
            <h2 class="text-center mb-4">Apa Kata Pelanggan Kami</h2>
            <div class="row">
                <!-- Testimoni 1 -->
                <div class="col-md-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Pelayanan cepat dan hasil cetakan sangat memuaskan!"</p>
                        <footer class="blockquote-footer">Andi, <cite title="Perusahaan ABC">Perusahaan ABC</cite></footer>
                    </blockquote>
                </div>
                <!-- Testimoni 2 -->
                <div class="col-md-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Harga terjangkau dengan kualitas terbaik."</p>
                        <footer class="blockquote-footer">Budi, <cite title="Startup XYZ">Startup XYZ</cite></footer>
                    </blockquote>
                </div>
                <!-- Testimoni 3 -->
                <div class="col-md-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Tim yang profesional dan sangat membantu."</p>
                        <footer class="blockquote-footer">Citra, <cite title="Event Organizer DEF">Event Organizer
                                DEF</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Tautan Media Sosial -->
    <section class="section" id="sosial">
        <div class="container text-center">
            <h2 class="mb-4">Ikuti Kami di Media Sosial</h2>
            <a href="https://www.facebook.com/sariprint" class="btn btn-primary mx-2" target="_blank"><i
                    class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://www.instagram.com/sariprint" class="btn btn-danger mx-2" target="_blank"><i
                    class="fab fa-instagram"></i> Instagram</a>
            <a href="https://www.twitter.com/sariprint" class="btn btn-info mx-2" target="_blank"><i
                    class="fab fa-twitter"></i> Twitter</a>
        </div>
    </section>

    <!-- Kontak Kami -->
    <section class="section" id="kontak">
        <div class="container">
            <h2 class="text-center mb-4">Kontak Kami</h2>
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
    <section class="section" id="pemesanan">
        <div class="container">
            <h2 class="text-center mb-4">Pemesanan</h2>
            <p class="text-center">Ikuti langkah mudah untuk melakukan pemesanan produk kami.</p>

            <div class="text-center">
                <a href="{{ route('cards.create') }}" class="btn btn-success btn-lg">Mulai Pemesanan</a>
            </div>
        </div>
    </section>
@endsection
