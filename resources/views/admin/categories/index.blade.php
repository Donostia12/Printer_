@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Kategori</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Tambah Kategori</a>
        </div>

        <table id="categories-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                style="display: inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
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
            $('#categories-table').DataTable({
                // Optional: Custom configuration
                // "language": {
                //     "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/Indonesian.json"
                // }
            });
        });
    </script>
@endsection
