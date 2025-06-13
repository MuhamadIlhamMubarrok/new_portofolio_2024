@extends('layouts.blog')

@section('title', $project->nama)

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
                alt="foto projek">

            <div class="flex flex-col lg:flex-row lg:justify-between mt-10 gap-6">
                <!-- Deskripsi -->
                <div class="w-full lg:w-[60%] cke-editor max-w-none">
                    {!! $project->deskripsi !!}
                </div>

                <!-- Info Tambahan -->
                <div class="w-full lg:w-[35%] space-y-6">
                    <!-- Skills -->
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl shadow-md" data-aos="fade-left">
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
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl shadow-md" data-aos="fade-left">
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
                    class="bg-[#F9F9F9]/15 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <div class="relative">
                        <img src="{{ asset('./storage/fotoProject/' . $item->banner) }}"
                            class="w-full h-[200px] object-cover">
                        <span class="absolute bottom-2 right-2 bg-[#121440] text-white text-sm px-3 py-1 rounded-full">
                            {{ $item->category }}
                        </span>
                    </div>
                    <div class="p-4 space-y-3">
                        <h3 class="text-[20px] font-bold font-poppins text-white uppercase truncate">
                            {{ $item->title }}
                        </h3>
                        <p class="text-white text-sm font-light">
                            {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                        </p>
                        <a href="/project/{{ $item->id }}"
                            class="inline-block text-white font-bold text-sm px-4 py-2 mt-2 rounded-full border border-[#009FF9] hover:bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] transition-all">
                            LEARN MORE
                        </a>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
@endsection
