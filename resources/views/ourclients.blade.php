@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 md:px-10 lg:px-24 py-10 mt-24" data-aos="fade-up">
        <h1 class="pt-5 text-4xl md:text-5xl lg:text-[48px] xl:text-[64px] font-Anek font-bold text-center"
            style="background: linear-gradient(178deg, #2300F9 51%, #009FF9 67%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
            Our Clients
        </h1>
        <p
            class="pt-3 text-sm md:text-base lg:text-lg xl:text-xl font-inter font-light md:px-[100px] text-center text-white max-w-screen-lg">
            We are proud to have partnered with a diverse range of clients across various industries. Each collaboration has
            allowed us to demonstrate our commitment to quality, innovation, and customer satisfaction. Our clients trust us
            to bring their visions to life, and we work tirelessly to exceed their expectations.
        </p>
        {{-- Clients --}}
        <div class="flex flex-wrap justify-center items-center w-full max-w-screen-lg mt-10 mb-8 md:mb-20">
            @foreach ($clients as $data)
                <img class="m-3 sm:m-4 md:m-5 h-[40px] md:h-[50px] lg:h-[60px] xl:h-[70px]"
                    src="{{ asset('storage/logo_client/' . $data->gambar) }}" alt="Client Logo"
                    style="max-width: 100px; height: auto;">
            @endforeach
        </div>

        <div class=" md:block border-[1px] rounded-full border-white w-3/4 lg:w-[500px] xl:w-[700px] mb-12"></div>

        {{-- Contact Us --}}
        <div class="flex flex-col items-center justify-center mb-10 md:mb-12 lg:mb-[50px]">
            <h1 class="text-xl md:text-2xl lg:text-[32px] font-semibold font-Anek text-center"
                style="background: linear-gradient(178deg, #2300F9 31%, #009FF9 51%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
                CONTACT US
            </h1>
            <p
                class="text-center mt-6 mb-10 text-sm md:text-base lg:text-lg xl:text-xl font-inter font-light text-white max-w-screen-md">
                If you are interested in our product, you can call us and make a deal with us to work with you!
            </p>
            <a href="/contact-us"
                class="text-white w-[180px] duration-200 md:w-[240px] border border-[2px] border-[#009FF9] hover:border hover:border-[#F9F9F9]/15 hover:border-[2px] font-Anek hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] hover:bg-gradient-to-bl font-bold rounded-full txt-[18px] px-4 md:px-5 py-2.5 text-center me-2 mb-4 md:mb-2">
                CONTACT US
            </a>
        </div>
    </div>
@endsection
