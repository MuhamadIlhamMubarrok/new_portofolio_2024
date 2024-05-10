@extends('layouts.app')

@section('title', 'Hero')

@section('content')
<div class="container">
    <h1>Edit Hero</h1>
    <form method="POST" action="{{ route('admin.hero.update', $hero->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('waktu', $hero->title) }}">
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
