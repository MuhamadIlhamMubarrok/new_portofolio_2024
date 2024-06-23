@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-[272px]">
        <h1 class="pt-[20px] font-bold text-[30px]">Our Clients</h1>
        <p class="pt-[10px] text-center">Description Lorem ipsum dolor sit amet consectetur. Id at mattis amet massa<br>
            venenatis bibendum.
            Convallis rhoncus eu aliquam tellus. Tellus aliquet vitae<br> ut venenatis non quam leo mattis justo. Aliquam
            eget faucibus volutpat <br> blandit.</p>
        {{-- clients --}}
        <div class="grid grid-cols-7 grid-flow-row gap-10 w-[1000px] mt-[100px] mb-[80px]">
            @foreach ($clients as $data)
                <img src="{{ asset('storage/logo_client/' . $data->gambar) }}" alt="Gambar" width="70">
            @endforeach
        </div>
        <div class="hidden md:block border-[1px] rounded-full border-black w-[700px] mb-[50px]"></div>
        {{-- Contact Us --}}
        <div class="flex flex-col items-center justify-center mb-[50px]">
            <h1 class="text-[30px] font-bold">Contact Us</h1>
            <p class="text-center mb-[30px]">If you interested with our product you can call us and make a <br> deal with us
                to work
                with you!</p>
            <a href="{{ route('home.contactus') }}"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Contact Us
                </span>
            </a>
        </div>
    </div>
@endsection
