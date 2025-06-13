@extends('layouts.landingpage')

@section('title', 'About Me')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-[100px]">

        <!-- Breadcrumb -->
        <x-breadcrumb title="ABOUT ME" breadcrumbHome="Home" breadcrumbCurrent="About Me" />

        <div data-aos="fade-up" class="flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
            <!-- Gambar -->
            <img src="{{ asset('./images/images/ilham3.webp') }}"
                class="h-[400px] md:h-[600px] w-full object-cover shadow-lg transform transition-transform duration-300 hover:scale-105 mb-5"
                style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                alt="Muhamad
                Ilham Mubarrok">


            <!-- Konten Teks -->
            <div data-aos="fade-up"
                class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px] bg-white/20 text-gray-300 shadow-xl shadow rounded-lg p-6">
                <p class="first-line:pl-5">
                    Hello, my name is Muhamad Ilham Mubarrok. I am a full-stack developer specializing in back-end
                    development. My educational background began at a pesantren, which led me to continue my studies at IDN
                    Polytechnic, where I am scheduled to graduate in 2026. During my studies, I have not only focused on
                    academics but also actively participated in organizations. My involvement in these organizations has
                    enriched my knowledge of technology and expanded my professional network.

                </p>
                <p>I am very enthusiastic about continuous learning, and one way I do this is by pursuing relevant
                    certifications from various sources, including those offered by the government or other institutions.
                    This allows me to stay up-to-date with the latest developments in the world of technology.
                </p>
            </div>

            <a href="https://cindahdev.com/" class="my-5" data-aos="fade-up">
                <img src="{{ asset('./images/images/citra.webp') }}"
                    class="w-full h-auto object-cover object-bottom rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105"
                    style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                    alt="Citra Indah Group">
            </a>
            <div data-aos="fade-up"
                class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px] bg-white/20 text-gray-300 shadow-xl shadow rounded-lg p-6">
                <p class="first-line:pl-5">
                    Additionally, I am in the process of building a software house with my campus friends called "Citra
                    Indah Group." This project started from a close friendship while living together, and it has now grown
                    into a business that we dream of together.

                </p>
                <p>I have three years of work experience, which includes teaching at a school, freelancing, and working in a
                    tech company. This experience has provided me with various perspectives and valuable skills for my
                    career as a programmer.
                </p>
                <p>Outside of work, I have various hobbies such as GYM, billiards, basketball, and volleyball. These
                    activities help me maintain a balance between work and personal life, as well as give me the energy and
                    enthusiasm to keep creating.
                </p>
            </div>
            <!-- Contact Us Section -->
            <div class="mt-12 text-center shadow-xl mx-4 md:mx-0">
                <div class="bg-gradient-to-r from-[#2300F9] to-[#1e0243] py-8 rounded-lg px-7">
                    <h2 class="text-xl font-bold text-white mb-3">Get in Touch with Us</h2>
                    <p class="text-white mb-5">Let’s work together! Reach out for personalized support and discover how we
                        can
                        assist you in achieving your goals.</p>
                    <a href="/contact-us"
                        class="bg-white text-[#2300F9] font-medium py-2 px-6 rounded-full shadow-md hover:bg-[#2300F9] hover:text-white transition">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
