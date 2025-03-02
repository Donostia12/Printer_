<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sari Printer</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
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
            <a class="navbar-brand" href="#">Sari Printer</a>
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



    @yield('content')



    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2023 PercetakanKU. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS dan jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Smooth Scrolling -->

</body>

</html>
