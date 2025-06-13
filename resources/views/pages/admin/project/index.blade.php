@extends('layouts.app')

@section('title', 'Daftar Projeks')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
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
                        <a href="{{ route('projek.create') }}" class="btn btn-primary mb-3">Create Project</a>
                        <!-- Search Form -->
                        <form action="{{ route('projek.index') }}" method="GET" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search Project"
                                    value="{{ old('search', $search) }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Banner</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Members</th>
                                    <th>Skills</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($projeks as $index => $projek)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('storage/fotoProject/' . $projek->banner) }}" alt="gambar"
                                                width="50">
                                        </td>
                                        <td>{{ $projek->nama }}</td>
                                        <td>{{ Str::limit(strip_tags($projek->deskripsi), 50) }}</td>
                                        <td>
                                            <!-- Menampilkan gambar-gambar member -->
                                            @foreach ($projek->getMembers() as $member)
                                                <img src="{{ asset('storage/logo_members/' . $member->gambar) }}"
                                                    alt="{{ $member->nama }}" width="40" height="40"
                                                    style="border-radius: 50%; margin-right: 5px;">
                                            @endforeach
                                        </td>
                                        <td>
                                            <!-- Menampilkan gambar-gambar member -->
                                            @foreach ($projek->getSkills() as $skill)
                                                <img src="{{ asset('storage/logo_skills/' . $skill->gambar) }}"
                                                    alt="{{ $skill->nama }}" width="40" height="40"
                                                    style="border-radius: 50%; margin-right: 5px;">
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $projek->category }}
                                        </td>
                                        <td>
                                            <a href="{{ route('projek.edit', $projek->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('projek.destroy', $projek->id) }}" method="POST"
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
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $projeks->appends(['search' => $search])->links('vendor.pagination.simple-bootstrap-4') }}
                        </div>

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
