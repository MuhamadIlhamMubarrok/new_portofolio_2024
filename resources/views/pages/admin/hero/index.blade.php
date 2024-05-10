@extends('layouts.app')

@section('title', 'Hero')

@section('content')
<div class="container">
    {{-- <h1>Hero List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hero as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a href="{{ route('admin.hero.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@if($hero)
    <!-- Form untuk mengedit data hero -->
    <form action="{{ route('admin.hero.update') }}" method="POST">
        @csrf
        <input type="text" name="marquee_text" value="{{ $hero->marquee_text }}" placeholder="Marquee Text"><br>
        <input type="text" name="title" value="{{ $hero->title }}" placeholder="Title"><br>
        <!-- Tambahkan field lainnya sesuai kebutuhan -->
        <button type="submit">Update Hero</button>
    </form>
@else
    <!-- Form untuk membuat data hero -->
    <form action="{{ route('admin.hero.update') }}" method="POST">
        @csrf
        <input type="text" name="marquee_text" placeholder="Marquee Text"><br>
        <input type="text" name="title" placeholder="Title"><br>
        <!-- Tambahkan field lainnya sesuai kebutuhan -->
        <button type="submit">Create Hero</button>
    </form>
@endif
</div>
@endsection
