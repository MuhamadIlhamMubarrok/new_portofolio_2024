@extends('layouts.app')

@section('title', 'Edit Count')

@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('count.index') }}">Counts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Count</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('count.update', $count->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="judul_count" class="form-label">Judul Count</label>
                                <input type="text" class="form-control" id="judul_count" name="judul_count"
                                    value="{{ $count->judul_count }}">
                            </div>

                            <div class="mb-3">
                                <label for="count" class="form-label">Count</label>
                                <input type="number" class="form-control" id="count" name="count"
                                    value="{{ $count->count }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $count->deskripsi }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
