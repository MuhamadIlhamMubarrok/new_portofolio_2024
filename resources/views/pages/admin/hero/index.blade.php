@extends('layouts.app')

@section('title', 'Hero')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hero</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        {{-- <h6 class="card-title">Hero Data</h6> --}}

                        <form method="POST" action="{{ route('admin.hero.update', $hero->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="marquee_text" class="form-label">Marquee Text</label>
                                <input type="text" class="form-control" id="marquee_text" autocomplete="off"
                                    placeholder="Marquee Text" name="marquee_text"
                                    value="{{ old('marquee_text') ?? $hero->marquee_text }}">
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" autocomplete="off"
                                    placeholder="Title" name="title" value="{{ old('title') ?? $hero->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="text" class="form-label">Text</label>
                                <textarea class="form-control" id="text" rows="3" name="text" placeholder="Text">{{ old('text') ?? $hero->text }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="mb-3">
                                <label for="cta_1" class="form-label">CTA 1</label>
                                <input type="text" class="form-control" id="cta_1" autocomplete="off"
                                    placeholder="CTA 1" name="cta_1" value="{{ old('cta_1') ?? $hero->cta_1 }}">
                            </div>

                            <div class="mb-3">
                                <label for="cta_2" class="form-label">CTA 2</label>
                                <input type="text" class="form-control" id="cta_2" autocomplete="off"
                                    placeholder="CTA 2" name="cta_2" value="{{ old('cta_2') ?? $hero->cta_2 }}">
                            </div>

                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" id="whatsapp" autocomplete="off"
                                    placeholder="Whatsapp" name="whatsapp" value="{{ old('whatsapp') ?? $hero->whatsapp }}">
                            </div>

                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram" autocomplete="off"
                                    placeholder="Instagram" name="instagram"
                                    value="{{ old('instagram') ?? $hero->instagram }}">
                            </div>

                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" class="form-control" id="youtube" autocomplete="off"
                                    placeholder="Youtube" name="youtube" value="{{ old('youtube') ?? $hero->youtube }}">
                            </div>

                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="facebook" autocomplete="off"
                                    placeholder="Facebook" name="facebook"
                                    value="{{ old('facebook') ?? $hero->facebook }}">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
