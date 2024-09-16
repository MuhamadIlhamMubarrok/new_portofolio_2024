@extends('layouts.landingpage')

@section('title', 'Muhamad Ilham Mubarrok - Full-Stack Developer')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 md:px-[200px] py-[40px] mt-[100px]">
        <!-- Section Title -->
        <h3 class="md:text-[24px] font-inter text-gray-300 tracking-widest uppercase" data-aos="fade-up">About Me</h3>
        <h1 class="font-Anek font-bold text-[32px] md:text-[64px]"
            style="background: linear-gradient(178deg, #2300F9 35%, #009FF9 54%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;"
            data-aos="fade-up">Who Am I?</h1>

        <!-- Profile Image -->
        <div data-aos="fade-up" class="mt-[30px]">
            <img src="{{ asset('./assets/images/ilham3.jpg') }}"
                class="h-[400px] md:h-[600px] w-full md:w-[1000px] object-cover object-center rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105"
                style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                alt="Muhamad Ilham Mubarrok">
        </div>

        <!-- Introduction -->
        <h1 data-aos="fade-up" class="mt-[30px] mb-[20px] text-center font-Anek font-semibold text-[32px] md:text-[64px]"
            style="background: linear-gradient(178deg, #2300F9 35%, #009FF9 54%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
            Muhamad Ilham Mubarrok
        </h1>
        <div class="flex items-center justify-center flex-col gap-y-5">
            <p data-aos="fade-up"
                class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                Hello, my name is Muhamad Ilham Mubarrok. I am a full-stack developer specializing in back-end development.
                My educational background began at a pesantren, which led me to continue my studies at IDN Polytechnic,
                where I am scheduled to graduate in 2026. During my studies, I have not only focused on academics but also
                actively participated in organizations. My involvement in these organizations has enriched my knowledge of
                technology and expanded my professional network.
            </p>
            <p data-aos="fade-up"
                class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                I am very enthusiastic about continuous learning, and one way I do this is by pursuing relevant
                certifications from various sources, including those offered by the government or other institutions. This
                allows me to stay up-to-date with the latest developments in the world of technology.
            </p>
            <a href="https://cindahdev.com/">
                <img src="{{ asset('./assets/images/citra.jpeg') }}"
                    class="h-[200px] w-[200px] object-cover object-center rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105"
                    style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                    alt="Muhamad Ilham Mubarrok">
            </a>
            <p data-aos="fade-up"
                class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                Additionally, I am in the process of building a software house with my campus friends called "Citra Indah
                Group." This project started from a close friendship while living together, and it has now grown into a
                business that we dream of together.
            </p>
            <p data-aos="fade-up"
                class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                I have two years of work experience, which includes teaching at a school, freelancing, and working in a tech
                company. This experience has provided me with various perspectives and valuable skills for my career as a
                programmer.
            </p>
            <p data-aos="fade-up"
                class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                Outside of work, I have various hobbies such as GYM, billiards, basketball, and volleyball. These activities
                help me maintain a balance between work and personal life, as well as give me the energy and enthusiasm to
                keep creating.
            </p>

        </div>

        <!-- Services -->
        <div data-aos="fade-up" class="flex flex-col justify-center items-center my-[40px] md:my-[20px]">
            <h1 class="font-inter font-semibold text-[24px] md:text-[32px] py-[20px] text-white uppercase">My Services</h1>
            <p class="text-gray-300 text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px] mb-5">
                Outside of work, I have various hobbies such as GYM, billiards, basketball, and volleyball. These activities
                help me maintain a balance between work and personal life, as well as give me the energy and enthusiasm to
                keep creating.
            </p>

            <!-- Call to Action Button -->
            <a href="/contact-us"
                class="text-white w-[180px] duration-200 md:w-[240px] border border-[2px] border-[#009FF9] hover:border hover:border-[#F9F9F9]/15 hover:border-[2px] font-Anek hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] hover:bg-gradient-to-bl font-bold rounded-full txt-[18px] px-4 md:px-5 py-2.5 text-center me-2 mb-4 md:mb-2">
                CONTACT US
            </a>
        </div>
    </div>
@endsection
