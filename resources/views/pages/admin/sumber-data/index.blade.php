@extends('layouts.app')

@section('title', 'Sumber Data')

@section('content')

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
                                <input type="number" class="form-control" id="jumlah_lembaga" autocomplete="off"
                                    placeholder="Jumlah Lembaga" name="jumlah_lembaga"
                                    value="{{ old('jumlah_lembaga') ?? $sumberData->jumlah_lembaga }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_guru" class="form-label">Jumlah Guru</label>
                                <input type="number" class="form-control" id="jumlah_guru" autocomplete="off"
                                    placeholder="Jumlah Guru" name="jumlah_guru"
                                    value="{{ old('jumlah_guru') ?? $sumberData->jumlah_guru }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                                <input type="number" class="form-control" id="jumlah_peserta" autocomplete="off"
                                    placeholder="Jumlah Peserta" name="jumlah_peserta"
                                    value="{{ old('jumlah_peserta') ?? $sumberData->jumlah_peserta }}">
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_rombel" class="form-label">Jumlah Rombel</label>
                                <input type="number" class="form-control" id="jumlah_rombel" autocomplete="off"
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