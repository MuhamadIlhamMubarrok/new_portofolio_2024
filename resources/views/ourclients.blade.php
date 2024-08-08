@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 md:px-16 lg:px-[272px] py-[40px] md:py-[40px] lg:py-[40px]"
        data-aos="fade-up">
        <h1 class="pt-5 text-4xl md:text-5xl lg:text-[64px] font-julius">Our Clients</h1>
        <p class="pt-3 text-sm md:text-base lg:text-lg font-inter font-light text-center md:px-[150px]">
            We are proud to have partnered with a diverse range of clients across various industries. Each collaboration has allowed us to demonstrate our commitment to quality, innovation, and customer satisfaction. Our clients trust us to bring their visions to life, and we work tirelessly to exceed their expectations.
        </p>
        {{-- clients --}}
        <div
            class="flex flex-wrap justify-center items-center w-full sm:w-[600px] md:w-[800px] lg:w-[1000px] mt-10 md:mt-10 mb-8 md:mb-20">
            @foreach ($clients as $data)
                <img class="m-3 sm:m-4 md:m-5" src="{{ asset('storage/logo_client/' . $data->gambar) }}" alt="Gambar"
                    width="50" sm:width="60" md:width="70">
            @endforeach
        </div>


        <div class="hidden md:block border-[1px] rounded-full border-black w-3/4 lg:w-[700px] mb-12"></div>
        {{-- Contact Us --}}
        <div class="flex flex-col items-center justify-center mb-10 md:mb-12 lg:mb-[50px]">
            <h1 class="text-xl md:text-2xl lg:text-[32px] font-semibold font-inter">CONTACT US</h1>
            <p class="text-center mt-6 mb-10 text-sm md:text-base lg:text-lg font-inter font-light md:px-[200px]">
                If you are interested in our product, you can call us and make a deal with us to work with you!
            </p>
            <a href="/contact-us"
                class="hover:text-white w-[150px] md:w-[200px] text-[#6B5E36] font-inter font-semibold border-[2px] border-[#6B5E36] hover:bg-[#6B5E36] focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] md:px-4 py-2.5 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center">
                CONTACT US
            </a>
        </div>
    </div>
@endsection
