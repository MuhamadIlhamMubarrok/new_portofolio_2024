@extends('layouts.landingpage')

@section('title', 'Clients')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-[100px]">

        <!-- Breadcrumb -->
        <x-breadcrumb title="OUR CLIENTS" breadcrumbHome="Home" breadcrumbCurrent="Client" />

        <div data-aos="fade-up" class=" flex flex-col my-6 px-4 md:px-20 lg:px-32 xl:px-60">
            <p class="text-center font-dmsans text-lg text-gray-300 bg-white/20 p-6 rounded-lg">
                We are proud to have partnered with diverse clients across industries, showcasing our commitment to quality,
                innovation, and customer satisfaction. Our clients trust us to bring their visions to life, and we strive to
                exceed their expectations.
            </p>
            {{-- Clients --}}
            <div class="flex flex-wrap justify-center items-center w-full mt-10 mb-8 md:mb-20">
                @foreach ($clients as $data)
                    <img class="m-3 sm:m-4 max-h-[70px] w-auto" src="{{ asset('storage/logo_client/' . $data->gambar) }}"
                        alt="Client Logo" style="max-width: 100px; height: auto;">
                @endforeach
            </div>

            {{-- Contact Us --}}
            <div data-aos="fade-up" class="text-center shadow-xl">
                <div data-aos="fade-up" class="bg-gradient-to-r from-[#2300F9] to-[#1e0243] py-8 rounded-lg px-7">
                    <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Get in Touch with Us</h2>
                    <p data-aos="fade-up" class="text-white font-dmsans mb-5">If you're interested in our products or
                        services,
                        feel free to reach out for further discussions. We’re here to help you achieve your goals.</p>
                    <a href="/contact-us" data-aos="fade-up"
                        class="bg-white text-[#2300F9] font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-[#2300F9] hover:text-white transition">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
