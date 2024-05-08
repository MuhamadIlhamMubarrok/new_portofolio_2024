@extends('layouts.app')

@section('title', 'Hero')

@section('content')
<div class="container">
    <h1>Hero List</h1>
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
    </table>
</div>
@endsection
