<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sari Printer</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #820a0a;
            transition: background-color 0.3s ease;
        }

        /* Membuat navbar tetap di atas */
        .navbar-custom {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1030;
        }



        /* Mengubah warna navbar saat menggulir */
        .navbar-scrolled {
            background-color: #820a0a;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section {
            padding: 60px 0;
            background-color: #e6f2ff;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 20px 0;
        }

        /* Hover effect pada link navbar */
        .navbar-nav .nav-link {
            color: #ffffff;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffdd00;
        }

        /* Responsif untuk navbar brand */
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>

<body>

    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo_sari.png') }}" alt="" srcset="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#pemesanan">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#kontak">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#testimoni">Testimoni</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2025 Percetakan. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS dan jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Smooth Scrolling dan Sticky Navbar -->


</body>
@yield('script')

</html>
