@extends('layouts.app')

@section('title', 'Projeks')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.projek.create') }}" class="btn btn-primary mb-3">Create Client</a>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>subGambar1</th>
                                    <th>subGambar2</th>
                                    <th>subGambar3</th>
                                    <th>subGambar4</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projeks as $projek)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($projek->gambar) }}" alt="{{ $projek->nama }}"
                                                width="50"></td>
                                        <td><img src="{{ asset($projek->subGambar1) }}" alt="{{ $projek->subGambar1 }}"
                                                width="50"></td>
                                        <td><img src="{{ asset($projek->subGambar2) }}" alt="{{ $projek->subGambar2 }}"
                                                width="50"></td>
                                        <td><img src="{{ asset($projek->subGambar3) }}" alt="{{ $projek->subGambar3 }}"
                                                width="50"></td>
                                        <td><img src="{{ asset($projek->subGambar4) }}" alt="{{ $projek->subGambar4 }}"
                                                width="50">
                                        </td>
                                        <td>{{ $projek->nama }}</td>
                                        <td>{{ $projek->deskripsi }}</td>
                                        <td>
                                            <a href="{{ route('admin.projek.edit', $projek->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('admin.projek.destroy', $projek->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
