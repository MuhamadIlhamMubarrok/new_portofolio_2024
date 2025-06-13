@extends('layouts.app')

@section('title', 'Edit Sub Gambar')

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
                        <form action="{{ route('subGambar.update', $subGambar->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="projek_id" class="form-label">Nama Project</label>
                                <select name="projek_id" id="projek_id" class="form-control">
                                    @foreach ($projeks as $projek)
                                        <option value="{{ $projek->id }}"
                                            {{ $projek->id == $subGambar->projek_id ? 'selected' : '' }}>
                                            {{ $projek->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control dropify" id="gambar"
                                    data-default-file="{{ $subGambar->gambar ? asset('storage/sub_gambar_projects/' . $subGambar->gambar) : '' }}"
                                    name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
