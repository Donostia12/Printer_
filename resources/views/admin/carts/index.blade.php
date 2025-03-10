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
                    <th>id</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Bahan</th>
                    <th>Status</th>
                    <th>Nama</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sortedCarts as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->material }}</td>
                        <td>
                            @if ($item->status == 'pending')
                                <span class="badge badge-warning">{{ ucfirst($item->status) }}</span>
                            @elseif($item->status == 'selesai')
                                <span class="badge badge-success">{{ ucfirst($item->status) }}</span>
                            @elseif($item->status == 'cancel')
                                <span class="badge badge-danger">{{ ucfirst($item->status) }}</span>
                            @else
                                <span class="badge badge-primary">{{ ucfirst($item->status) }}</span>
                            @endif
                        </td>

                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->customer_phone }}</td>
                        <td>{{ $item->customer_email }}</td>
                        <td><img src="{{ asset('storage/' . $item->design_file) }}" alt="" srcset=""
                                style="height: 100px; width: 100px;"></td>
                        <td> {{ \Carbon\Carbon::parse($item->created_at->format('d-m-Y H:i'))->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('carts.show', $item->id) }}" class="btn btn-info btn-sm">Update Status</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
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
