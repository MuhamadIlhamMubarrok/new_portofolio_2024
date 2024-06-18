@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center">Selamat Datang di Aplikasi Laravel Saya</h1>
        <p class="mt-4 text-center">Ini adalah paragraf contoh yang di-styling dengan Tailwind CSS.</p>

        <div x-data="{ open: false }" class="text-center mt-8">
            <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">Toggle Content</button>
            <div x-show="open" class="mt-4">
                <p class="text-[100px]">Konten ini dapat ditoggle menggunakan Alpine.js</p>
            </div>
        </div>
    </div>
@endsection
