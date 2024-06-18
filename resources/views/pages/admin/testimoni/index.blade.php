@extends('layouts.app')

@section('title', 'Testimony')

@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Testimony</li>
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
                        <a href="{{ route('admin.testimony.create') }}" class="btn btn-primary mb-3">Create Testimony</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Text Testimoni</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonies as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td><img src="{{ asset('storage/testimony_foto/' . $data->gambar) }}" width="100"
                                                alt="Gambar">
                                        </td>
                                        <td>{{ Str::limit($data->text_testimoni, 50) }}..</td>
                                        <td>
                                            <a href="{{ route('admin.testimony.edit', $data->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.testimony.destroy', $data->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
