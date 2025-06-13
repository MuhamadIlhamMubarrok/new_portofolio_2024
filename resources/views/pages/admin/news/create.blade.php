@extends('layouts.app')

@section('title', 'Create Berita')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Berita</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="banner" class="form-label">Banner</label>
                                <input type="file" class="form-control dropify" id="banner" name="banner">
                            </div>

                            <div class="mb-3">
                                <label for="alt_banner" class="form-label">Alt alt_banner</label>
                                <input type="text" class="form-control" id="alt_banner" name="banner_alt">
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="work experience">Work Experience</option>
                                    <option value="hobby">Hobby</option>
                                    <option value="achievment">Achievment</option>
                                    <option value="organizational experience">Organizational Experience</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 400px;"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="meta_description" class="form-label">Meta Deskripsion</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"
                                    placeholder="Tulis deskripsi meta di sini..."></textarea>

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
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/filemanager?type=Files',
            filebrowserUploadUrl: '/filemanager/upload?type=Files&_token=',
            clipboard_handleImages: false,
        };
    </script>
    <script>
        CKEDITOR.replace('deskripsi', options);
    </script>
@endpush
