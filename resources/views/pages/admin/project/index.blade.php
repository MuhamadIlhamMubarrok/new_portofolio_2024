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
                        <!-- Notifikasi -->
                        @if (session('success'))
                            <div class="alert alert-success" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" id="error-alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <a href="{{ route('admin.projek.create') }}" class="btn btn-primary mb-3">Create Project</a>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Banner</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    function limitWords($string, $word_limit)
                                    {
                                        $words = explode(' ', $string);
                                        return implode(' ', array_slice($words, 0, $word_limit));
                                    }
                                @endphp
                                @foreach ($projeks as $index => $projek)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('storage/fotoProduct/' . $projek->banner) }}" alt="gambar"
                                                width="50">
                                        </td>
                                        <td>{{ $projek->nama }}</td>
                                        <td>{{ limitWords($projek->deskripsi, 4) }}...</td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $(this).slideUp(500);
            });
            $("#error-alert").fadeTo(2000, 500).slideUp(500, function() {
                $(this).slideUp(500);
            });
        });
    </script>
@endpush
