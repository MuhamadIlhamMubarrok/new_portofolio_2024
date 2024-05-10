@extends('layouts.app')

@section('title', 'Hero')

@section('content')
    <div class="container">
        <br><br><br><br><br><br><br>
        <form method="POST" action="{{ route('admin.hero.update', $hero->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="marquee_text">Marquee Text:</label>
                <input type="text" name="marquee_text" class="form-control" value="{{ old('marquee_text', $hero->marquee_text) }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $hero->title) }}">
            </div>

            <div class="form-group">
                <label for="text">Text:</label>
                <textarea name="text" class="form-control">{{ old('text', $hero->text) }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" name="image" class="form-control" value="{{ old('image', $hero->image) }}">
            </div>

            <div class="form-group">
                <label for="cta_1">CTA 1:</label>
                <input type="text" name="cta_1" class="form-control" value="{{ old('cta_1', $hero->cta_1) }}">
            </div>

            <div class="form-group">
                <label for="cta_2">CTA 2:</label>
                <input type="text" name="cta_2" class="form-control" value="{{ old('cta_2', $hero->cta_2) }}">
            </div>

            <div class="form-group">
                <label for="whatsapp">Whatsapp:</label>
                <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $hero->whatsapp) }}">
            </div>

            <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $hero->instagram) }}">
            </div>

            <div class="form-group">
                <label for="youtube">Youtube:</label>
                <input type="text" name="youtube" class="form-control" value="{{ old('youtube', $hero->youtube) }}">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook:</label>
                <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $hero->facebook) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
