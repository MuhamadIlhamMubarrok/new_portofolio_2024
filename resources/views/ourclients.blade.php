@extends('layouts.landingpage')

@section('title', 'Clients')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-[100px]">

        <!-- Breadcrumb -->
        <x-breadcrumb title="OUR CLIENTS" breadcrumbHome="Home" breadcrumbCurrent="Client" />

        <div data-aos="fade-up" class=" flex flex-col my-6 px-4 md:px-20 lg:px-32 xl:px-60">
            <p
                class="text-center font-dmsans text-lg text-gray-300  bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10
        backdrop-blur-md p-6 md:p-8 rounded-2xl
        shadow-[0_0_30px_#08FFF033] border border-[#08FFF0]/20
        transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">
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
            <div class="mt-12 text-center mx-4 md:mx-0">
                <div
                    class="bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] p-1 rounded-2xl shadow-[0_0_30px_#08FFF088] hover:shadow-[0_0_50px_#009FF9] transition-all duration-500">

                    <div class="bg-[#0a0f1a] rounded-2xl py-10 px-6 md:px-12">
                        <h2
                            class="text-2xl md:text-3xl font-bold text-white mb-4  font-poppins tracking-wide animate-fade-in">
                            Get in Touch with Us
                        </h2>
                        <p class="text-white/80 text-base md:text-lg max-w-xl mx-auto mb-6 leading-relaxed font-dmsans">
                            Let’s work together! Reach out for personalized support and discover how we can help you achieve
                            your goals.
                        </p>

                        <a href="/contact-us"
                            class="inline-flex items-center gap-3 text-white font-semibold px-6 py-3 rounded-full
                            bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]
                            shadow-[0_0_20px_#009FF9] hover:shadow-[0_0_40px_#08FFF0]
                            transition-all duration-300 hover:scale-105">
                            Contact Us
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-bounce-x" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
