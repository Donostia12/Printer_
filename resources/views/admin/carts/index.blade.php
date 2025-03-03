@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Pemesanan</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Daftar Pemesanan -->
        <table class="table table-bordered table-striped" id="orders-table">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pemesanan</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Bahan</th>
                    <th>Status</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->product->name }}</td>
                        <td>{{ $card->quantity }}</td>
                        <td>{{ $card->material }}</td>
                        <td>
                            @if ($card->status == 'pending')
                                <span class="badge badge-warning">{{ ucfirst($card->status) }}</span>
                            @elseif($card->status == 'approved')
                                <span class="badge badge-success">{{ ucfirst($card->status) }}</span>
                            @elseif($card->status == 'rejected')
                                <span class="badge badge-danger">{{ ucfirst($card->status) }}</span>
                            @else
                                <span class="badge badge-secondary">{{ ucfirst($card->status) }}</span>
                            @endif
                        </td>
                        <td>{{ $card->created_at->format('d-m-Y H:i') }}</td>
                        <td>
                            {{-- <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info btn-sm">Detail</a> --}}
                            <!-- Tambahkan aksi lain seperti Edit atau Hapus jika diperlukan -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#orders-table').DataTable({
                // Opsional: Konfigurasi tambahan
                // "language": {
                //     "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Indonesian.json"
                // }
            });
        });
    </script>
@endsection
