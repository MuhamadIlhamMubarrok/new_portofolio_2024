@extends('layouts.app')

@section('title', 'Edit Client')

@section('content')
    <style>
        .team-container {
            height: 100px;
            overflow-y: auto;
            background-color: white;
            padding: 10px;
        }
    </style>

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.projek.index') }}">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.projek.update', $projek->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="banner" class="form-label">Gambar</label>
                                <input type="file" class="form-control dropify" id="banner"
                                    data-default-file="{{ $projek->banner ? asset('storage/fotoProject/' . $projek->banner) : '' }}"
                                    name="banner">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $projek->nama }}">
                            </div>



                            <div class="mb-3">
                                <label for="members" class="form-label">Team</label>
                                <div class="team-container border">
                                    @foreach ($members as $member)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="members[]"
                                                value="{{ $member->id }}"
                                                {{ in_array($member->id, $projekMemberIds) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="member{{ $member->id }}">
                                                {{ $member->nama }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="skillIds[]" class="form-label">Framework yang di gunakan</label>
                                <div class="team-container border">
                                    @foreach ($skills as $skill)
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="skillIds[]"
                                                value="{{ $skill->id }}"
                                                {{ in_array($skill->id, $projekSkillIds) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="skill{{ $skill->id }}">
                                                {{ $skill->nama }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="project team"
                                        {{ $projek->category == 'project team' ? 'selected' : '' }}>
                                        Project Team</option>
                                    <option value="personal project"
                                        {{ $projek->category == 'personal project' ? 'selected' : '' }}>Personal Projects
                                    </option>
                                    <option value="project at work"
                                        {{ $projek->category == 'project at work' ? 'selected' : '' }}>Project At Work
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $projek->deskripsi }}</textarea>
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
