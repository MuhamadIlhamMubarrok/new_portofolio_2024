@extends('layouts.landingpage')

@section('title', $news->title)

@section('content')
    <style>
        /* Custom CSS for CKEditor output */
        .cke-editor p {
            font-family: 'Inter', serif;
            color: #ffffff;
            line-height: 1.6;
            font-weight: 300;
            font-size: 18px
        }

        .cke-editor h1 {
            font-family: 'Anek Latin', serif;
            font-size: 40px;
            background: linear-gradient(90deg, #08FFF0 0%, #009FF9 45%, #2300F9 74%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cke-editor h2 {
            font-family: 'Anek Latin', serif;
            font-size: 30px;
            background: linear-gradient(90deg, #08FFF0 0%, #009FF9 45%, #2300F9 74%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cke-editor ul,
        .cke-editor ol {
            margin-left: 20px;
            color: #ffffff;
            /* Putih */
        }

        .cke-editor a {
            color: #009FF9;
            /* Link warna biru */
            text-decoration: underline;
        }
    </style>
    <div class="flex flex-col justify-center items-center py-16 mt-12">

        <!-- Breadcrumb -->
        <x-breadcrumb title="ABOUT ME" breadcrumbHome="Home" breadcrumbCurrent="About Me" />

        <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
            <img src="{{ asset('./storage/banner_news/' . $news->banner) }}"
                class="w-full h-[700px] object-cover object-top rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105"
                style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                alt="foto projek">
            <div class=" flex flex-col cke-editor bg-white/20 p-6 mt-6 rounded-lg" data-aos="fade-up">
                <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-4"
                    style="background: linear-gradient(174deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
                    {{ $news->title }}</h1>

                <p class="font-dmsans">
                    {!! $news->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center px-4 md:px-20 lg:px-32 xl:px-60">
        <h1 class="font-poppins font-bold text-[32px] md:text-[44px] custom-gradient-text" data-aos="fade-up">ALL
            NEWS
            ABOUT
            ME</h1>
        <p class="md:text-center text-justify text-lg sm:text-xl md:text-[24px] mb-5 font-inter text-white font-extralight">
            Discover the latest updates on my activities, achievements, work experience, and hobbies.
        </p>
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20"
            slides-per-view="1"
            breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

            @foreach ($other as $index => $item)
                <swiper-slide
                    class="flex flex-col justify-start items-start bg-[#F9F9F9]/15 rounded-[24px] pb-[60px] h-auto md:h-[400px]"
                    data-aos="fade-up">
                    <div class="relative flex flex-row items-center justify-start w-full">
                        <img class="rounded-t-[24px] h-[175px] w-full object-cover object-center"
                            src="{{ asset('./storage/banner_news/' . $item->banner) }}">
                        <h2
                            class="absolute bottom-2 right-2 text-white font-poppins text-[14px] bg-[#121440] rounded-full w-max px-[13px] py-1">
                            {{ $item->category }}
                        </h2>
                    </div>
                    <div class="px-[20px] flex flex-col gap-y-3 pt-[10px] pb-[20px]">
                        <div class="flex flex-row justify-between gap-x-2 items-center">
                            <h1 class="custom-gradient-text font-poppins font-bold text-[20px] uppercase">
                                {{ $item->title }}
                            </h1>
                        </div>
                        <p class="font-inter text-[#F9F9F9] font-light">
                            {{ Str::limit(strip_tags($item->deskripsi), 150) }}...</p>
                        <a href="/news/{{ $item->id }}"
                            class="text-white w-[180px] duration-200 md:w-[100px] border border-[2px] border-[#009FF9] hover:border hover:border-[#F9F9F9]/15 hover:rounded-full= hover:border-[2px] font-poppins hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] hover:bg-gradient-to-bl font-bold rounded-full text-[10px] px-4 md:px-1 py-2.5 text-center me-2 mb-4 md:mb-2">
                            LEARN MORE
                        </a>
                    </div>
                </swiper-slide>
            @endforeach

        </swiper-container>
    </div>
@endsection
