@extends('admin.header')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Testimonial</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama </th>
                    <th>desc</th>
                    <th>image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonial as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->desc }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="" srcset=""
                                style="height: 75px; width: 75px"></td>
                        @if ($item->status == 'active')
                            <td> <a href="{{ route('testimonial.status', $item->id) }}" class="btn btn-success btn-sm">ON</a>
                            </td>
                        @else
                            <td> <a href="{{ route('testimonial.status', $item->id) }}"
                                    class="btn btn-danger btn-sm">OFF</a></td>
                        @endif


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
