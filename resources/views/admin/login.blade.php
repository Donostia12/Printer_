<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center mb-4">Login Admin</h3>

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

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

                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>



                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>

                <p class="mt-3 text-center">
                    <a href="{{ url('/') }}">← Kembali ke Beranda</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
