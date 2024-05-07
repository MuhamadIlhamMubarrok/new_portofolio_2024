@extends('layouts.app')

@section('title', 'Hero')

@section('content')
<div class="container">
    <h1>Edit Hero</h1>
    <form method="POST" action="{{ route('admin.dashboard.hero.update', $hero->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $hero->title }}">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text">{{ $hero->text }}</textarea>
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
