@extends('layouts.app')

@section('title', 'Sumber Data')

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
                <li class="breadcrumb-item active" aria-current="page">Sumber Data</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.sumber-data.update', $sumberData->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="jumlah_lembaga" class="form-label">Jumlah Lembaga</label>
                                <input type="text" class="form-control" id="jumlah_lembaga" autocomplete="off"
                                    placeholder="Jumlah Lembaga" name="jumlah_lembaga"
                                    value="{{ old('jumlah_lembaga') ?? $sumberData->jumlah_lembaga }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_guru" class="form-label">Jumlah Guru</label>
                                <input type="text" class="form-control" id="jumlah_guru" autocomplete="off"
                                    placeholder="Jumlah Guru" name="jumlah_guru"
                                    value="{{ old('jumlah_guru') ?? $sumberData->jumlah_guru }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                                <input type="text" class="form-control" id="jumlah_peserta" autocomplete="off"
                                    placeholder="Jumlah Peserta" name="jumlah_peserta"
                                    value="{{ old('jumlah_peserta') ?? $sumberData->jumlah_peserta }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_rombel" class="form-label">Jumlah Rombel</label>
                                <input type="text" class="form-control" id="jumlah_rombel" autocomplete="off"
                                    placeholder="Jumlah Rombel" name="jumlah_rombel"
                                    value="{{ old('jumlah_rombel') ?? $sumberData->jumlah_rombel }}">
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
