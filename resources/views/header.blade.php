<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sari Printer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <!-- Custom CSS -->
    <style>
        /* Warna biru yang cocok dengan printer */
        .navbar-custom {
            background-color: #004080;
        }

        .section {
            padding: 60px 0;
            background-color: #e6f2ff;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 20px 0;
        }
    </style>
</head>

<body>

    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">PercetakanKU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pemesanan">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Beranda -->
    <section class="section" id="beranda">
        <div class="container text-center">
            <h1 class="display-4">Selamat Datang di PercetakanKU</h1>
            <p class="lead">Layanan percetakan terbaik untuk semua kebutuhan Anda.</p>
            <a href="#pemesanan" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Section Tentang Kami -->
    <section class="section" id="tentang">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <p class="text-center">Kami adalah perusahaan percetakan yang menyediakan berbagai layanan cetak berkualitas
                tinggi dengan harga terjangkau.</p>
        </div>
    </section>

    <!-- Section Produk -->
    <section class="section" id="produk">
        <div class="container">
            <h2 class="text-center mb-4">Produk Kami</h2>
            <div class="row">
                <!-- Produk 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/produk1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Produk 1</h5>
                            <p class="card-text">Deskripsi singkat produk 1.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Produk 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/produk2.jpg" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Produk 2</h5>
                            <p class="card-text">Deskripsi singkat produk 2.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Produk 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/produk3.jpg" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text">Deskripsi singkat produk 3.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Anda dapat menambahkan lebih banyak produk dengan format yang sama -->
            </div>
        </div>
    </section>

    <!-- Section Pemesanan -->
    <section class="section" id="pemesanan">
        <div class="container">
            <h2 class="text-center mb-4">Pemesanan</h2>
            <p class="text-center">Ikuti langkah mudah untuk melakukan pemesanan produk kami.</p>
            <!-- Tambahkan detail pemesanan atau form di sini -->
            <div class="text-center">
                <a href="#" class="btn btn-success btn-lg">Mulai Pemesanan</a>
            </div>
        </div>
    </section>

    <!-- Section Kontak Kami -->
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
                    <p>info@percetakanku.com</p>
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2023 PercetakanKU. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Smooth Scrolling -->
    <script>
        $(document).ready(function() {
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
</body>

</html>
