@extends('layouts.landingpage')

@section('title', 'PORTOFOLIO - ILHAM')

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

        .cke-editor h1,
        .cke-editor h2 {
            font-family: 'Anek Latin', serif;
            font-size: 40px;
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
    <!-- Hero Section -->
    <div class="relative h-[730px] w-auto flex flex-col justify-center items-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50" data-aos="fade-up"
            style="background-image: url('{{ asset('./storage/banner_news/' . $news->banner) }}');">
        </div>
        <!-- Pseudo-element for the gradient border -->
        <div class="absolute bottom-0 left-0 right-0 h-[6px]" data-aos="fade-up"
            style="background: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%);">
        </div>
        <div data-aos="fade-up">
            <h1 class="text-white text-[36px] md:text-[64px] ml-6 md:ml-0 font-Anek font-bold custom-gradient-text uppercase"
                data-aos="fade-up">PROJECT
                {{ $news->title }}</h1>
        </div>
    </div>
    <div class="md:px-[100px] px-[50px] mt-[100px]">
        <div class=" flex flex-col cke-editor" data-aos="fade-up">
            {!! $news->deskripsi !!}
        </div>
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-Anek font-bold text-[32px] md:text-[44px] custom-gradient-text" data-aos="fade-up">ALL NEWS
                ABOUT
                ME</h1>
            <p
                class="md:text-center text-justify pt-2 text-lg sm:text-xl md:text-[24px] mb-5 md:px-[250px] font-inter text-white font-extralight">
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
                                class="absolute bottom-2 right-2 text-white font-Anek text-[14px] bg-[#121440] rounded-full w-max px-[13px] py-1">
                                {{ $item->category }}
                            </h2>
                        </div>
                        <div class="px-[20px] flex flex-col gap-y-3 pt-[10px] pb-[20px]">
                            <div class="flex flex-row justify-between gap-x-2 items-center">
                                <h1 class="custom-gradient-text font-Anek font-bold text-[20px] uppercase">
                                    {{ $item->title }}
                                </h1>
                            </div>
                            <p class="font-inter text-[#F9F9F9] font-light">
                                {{ Str::limit(strip_tags($item->deskripsi), 150) }}...</p>
                            <a href="/news/{{ $item->id }}"
                                class="text-white w-[180px] duration-200 md:w-[100px] border border-[2px] border-[#009FF9] hover:border hover:border-[#F9F9F9]/15 hover:rounded-full= hover:border-[2px] font-Anek hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] hover:bg-gradient-to-bl font-bold rounded-full text-[10px] px-4 md:px-1 py-2.5 text-center me-2 mb-4 md:mb-2">
                                LEARN MORE
                            </a>
                        </div>
                    </swiper-slide>
                @endforeach

            </swiper-container>
        </div>

    </div>



@endsection
