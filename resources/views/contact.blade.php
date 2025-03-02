@extends('header')

@section('content')
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
@endsection
