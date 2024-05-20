@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.contact.update', $contact->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" autocomplete="off"
                                    placeholder="Alamat" name="alamat"
                                    value="{{ old('alamat') ?? $contact->alamat }}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" autocomplete="off"
                                    placeholder="Email" name="email"
                                    value="{{ old('email') ?? $contact->email }}">
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No Handphone</label>
                                <input type="text" class="form-control" id="no_hp" autocomplete="off"
                                    placeholder="No Handphone" name="no_hp"
                                    value="{{ old('no_hp') ?? $contact->no_hp }}">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
