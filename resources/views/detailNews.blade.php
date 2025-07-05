@extends('layouts.blog')

@section('title', $news->title)
@section('meta_description', $news->meta_description)
@section('og_image', asset('storage/banner_news/' . $news->banner))


@section('content')
    <div class="flex flex-col justify-center items-center py-16 mt-12">

        <!-- Breadcrumb -->
        <x-breadcrumb title="ABOUT ME" breadcrumbHome="Home" breadcrumbCurrent="About Me" />

        <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
            <!-- Title -->
            <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-6 text-center"
                style="background: linear-gradient(174deg, #2300F9 25%, #009FF9 50%, #08FFF0 75%);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
       filter: drop-shadow(0 0 6px rgba(8, 255, 240, 0.3)); 
       transition: all 0.4s ease-in-out;">
                {{ $news->title }}
            </h1>

            <!-- Image -->
            <div class="relative group overflow-hidden rounded-xl shadow-2xl transition-all duration-500 hover:scale-[1.01]">
                <img src="{{ asset('./storage/banner_news/' . $news->banner) }}" alt="{{ $news->alt_banner }}"
                    class="w-full h-[700px] object-cover object-top rounded-xl 
           transition-transform duration-500 ease-in-out group-hover:scale-105 group-hover:brightness-110 group-hover:contrast-105"
                    style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9, #009FF9, #08FFF0) 1;">

                <!-- Optional Shine Overlay -->
                <div class="absolute top-0 left-[-75%] w-[200%] h-full z-10 opacity-0 group-hover:opacity-20 transition duration-1000 ease-out transform skew-x-[-20deg] group-hover:translate-x-[75%]"
                    style="background: linear-gradient(90deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0.05) 100%);">
                </div>
            </div>
            <div class=" flex flex-col cke-editor bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md p-6 mt-6 rounded-[24px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]"
                data-aos="fade-up">
                <p class="font-dmsans">
                    {!! $news->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center px-4 md:px-20 lg:px-32 xl:px-60">
        <h1 class="font-poppins font-bold text-[32px] md:text-[44px] custom-gradient-text mb-2" data-aos="fade-up">
            ALL NEWS ABOUT ME
        </h1>
        <p class="md:text-center text-justify text-lg sm:text-xl md:text-[24px] font-inter text-white font-extralight"
            data-aos="fade-up">
            Discover the latest updates on my activities, achievements, work experience, and hobbies.
        </p>

        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20"
            slides-per-view="1"
            breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

            @foreach ($other as $index => $item)
                <swiper-slide
                    class="flex flex-col justify-between bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] h-[420px] shadow-[0_0_30px_#08FFF033] border border-[#08FFF0]/20 
            transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">

                    <!-- Image + Category -->
                    <div class="relative w-full">
                        <img class="rounded-t-[24px] h-[175px] w-full object-cover object-center"
                            src="{{ asset('./storage/banner_news/' . $item->banner) }}" alt="{{ $item->alt_banner }}">
                        <h2
                            class="absolute bottom-2 right-2 text-white font-poppins text-[12px] bg-[#121440] rounded-full w-max px-[12px] py-0.5">
                            {{ $item->category }}
                        </h2>
                    </div>

                    <!-- Title + Desc + Button -->
                    <div class="flex flex-col justify-between flex-1 px-[20px] pt-3 pb-5">
                        <!-- Judul dan Deskripsi -->
                        <div class="flex flex-col gap-y-2">
                            <h1 class="custom-gradient-text font-poppins font-bold text-[14px] uppercase leading-snug">
                                {{ $item->title }}
                            </h1>
                            <p class="font-inter text-[#F9F9F9] text-sm font-light line-clamp-3 leading-snug">
                                {{ Str::limit(strip_tags($item->deskripsi), 120) }}...
                            </p>
                        </div>

                        <!-- Tombol -->
                        <a href="/news/{{ $item->slug }}"
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
