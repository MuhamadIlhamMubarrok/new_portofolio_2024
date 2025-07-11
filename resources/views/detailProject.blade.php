@extends('layouts.blog')

@section('title', $project->nama)
@section('meta_description', $project->meta_description)
@section('og_image', asset('storage/fotoProject/' . $project->gambar))


@section('content')
    <div class="flex flex-col justify-center items-center py-16 mt-12">

        <!-- Breadcrumb -->
        <x-breadcrumb title="DETAIL PROJECT" breadcrumbHome="Home" breadcrumbCurrent="Detail Project" />

        <div data-aos="fade-up" class="w-full flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
            <h1
                class="font-poppins text-[24px] md:text-[32px] font-semibold mb-6 text-center bg-clip-text text-transparent bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0] animate-gradient-x">
                {{ $project->nama }}
            </h1>

            <img src="{{ asset('./storage/fotoProject/' . $project->banner) }}"
                class="w-full h-auto max-h-[600px] object-cover object-center rounded-xl shadow-xl transition-transform duration-500 hover:scale-105 border-[4px] border-transparent hover:border-[#08FFF0]"
                alt="{{ $project->alt_banner }}">

            <div class="flex flex-col lg:flex-row lg:justify-between mt-10 gap-6">
                <!-- Deskripsi -->
                <div
                    class="bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088] w-full lg:w-[60%] cke-editor max-w-none">
                    {!! $project->deskripsi !!}
                </div>

                <!-- Info Tambahan -->
                <div class="w-full lg:w-[35%] space-y-6">
                    <!-- Skills -->
                    <div class="bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088] p-6 rounded-xl shadow-md"
                        data-aos="fade-left">
                        <h2
                            class="text-[18px] font-bold font-poppins mb-4 bg-clip-text text-transparent bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]">
                            Programming Languages Used:
                        </h2>
                        <div class="flex flex-wrap gap-3">
                            @foreach ($project->getSkills() as $skill)
                                <img src="{{ asset('storage/logo_skills/' . $skill->gambar) }}" alt="{{ $skill->nama }}"
                                    class="w-10 h-10 object-contain">
                            @endforeach
                        </div>
                    </div>

                    <!-- Members -->
                    <div class="bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088] p-6 rounded-xl shadow-md"
                        data-aos="fade-left">
                        <h2
                            class="text-[18px] font-bold font-poppins mb-4 bg-clip-text text-transparent bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]">
                            Participating Team Members:
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($project->getMembers() as $member)
                                <div
                                    class="flex flex-col items-center bg-[#121440]/30 p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                                    <img src="{{ asset('storage/logo_members/' . $member->gambar) }}"
                                        alt="{{ $member->nama }}" class="w-20 h-20 object-cover rounded-full shadow-md">
                                    <h3 class="text-white text-[16px] mt-3 font-bold text-center">{{ $member->nama }}</h3>
                                    {{-- <p class="text-[#F9F9F9] text-sm">{{ $member->jabatan }}</p> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Follow Section -->
    <div class="flex flex-col justify-center items-center px-4 md:px-20 lg:px-32 xl:px-60">
        <h1 class="font-poppins font-bold text-[32px] md:text-[44px] custom-gradient-text animate-pulse text-center">
            FOLLOW FOR MORE OF MY PROJECTS
        </h1>
        <p class="text-center text-lg md:text-xl text-white font-inter font-light mt-4">
            Stay updated with the latest on my projects, achievements, work experiences, and hobbies.
        </p>

        <!-- Swiper Carousel -->
        <swiper-container class="mySwiper mt-10" pagination="true" pagination-clickable="true" space-between="20"
            slides-per-view="1"
            breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>
            @foreach ($other as $item)
                <swiper-slide
                    class="flex flex-col justify-between bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
    backdrop-blur-md rounded-[24px] h-[420px] shadow-[0_0_30px_#08FFF033] border border-[#08FFF0]/20 
    transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">

                    <!-- Image + Category -->
                    <div class="relative w-full">
                        <img class="rounded-t-[24px] h-[175px] w-full object-cover object-center"
                            src="{{ asset('./storage/fotoProject/' . $project->banner) }}" alt="{{ $project->alt_banner }}">
                        <h2
                            class="absolute bottom-2 right-2 text-white font-poppins text-[12px] bg-[#121440] rounded-full w-max px-[12px] py-0.5">
                            {{ $project->category }}
                        </h2>
                    </div>

                    <!-- Title + Desc + Button -->
                    <div class="flex flex-col justify-between flex-1 px-[20px] pt-3 pb-5">
                        <!-- Judul dan Deskripsi -->
                        <div class="flex flex-col gap-y-2">
                            <h1 class="custom-gradient-text font-poppins font-bold text-[14px] uppercase leading-snug">
                                {{ $project->nama }}
                            </h1>
                            <p class="font-inter text-[#F9F9F9] text-sm font-light line-clamp-3 leading-snug">
                                {{ $project->meta_description }}
                            </p>
                        </div>

                        <!-- Tombol -->
                        <a href="/project/{{ $project->slug }}"
                            class="mt-4 text-[10px] text-white font-poppins font-bold text-center rounded-full border-2 border-[#009FF9]
                w-[160px] md:w-[100px] py-2 px-4 bg-transparent hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0]
                shadow-[0_0_10px_#009FF944] hover:shadow-[0_0_20px_#08FFF0AA] transition-all duration-300">
                            LEARN MORE
                        </a>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
@endsection
