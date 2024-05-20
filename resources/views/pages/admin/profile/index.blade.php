@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.profile.update', $profile->id) }}"
                            enctype="multipart/form-data">
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

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
