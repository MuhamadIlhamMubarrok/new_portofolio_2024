@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.profile.update', $profile->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="text_profile" class="form-label">Tentang Kami</label>
                                <input type="text" class="form-control" id="text_profile" autocomplete="off"
                                    placeholder="Tentang Kami" name="text_profile"
                                    value="{{ old('text_profile') ?? $profile->text_profile }}">
                            </div>

                            <div class="mb-3">
                                <label for="visi" class="form-label">Visi</label>
                                <textarea class="form-control" id="visi" rows="3" name="visi" placeholder="Visi">{{ old('visi') ?? $profile->visi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="misi" class="form-label">Misi</label>
                                <textarea class="form-control" id="misi" rows="3" name="misi" placeholder="Misi">{{ old('misi') ?? $profile->misi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="vidio" class="form-label">Link Video</label>
                                <input type="text" class="form-control" id="vidio" autocomplete="off"
                                    placeholder="Video" name="vidio" value="{{ old('vidio') ?? $profile->vidio }}">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
