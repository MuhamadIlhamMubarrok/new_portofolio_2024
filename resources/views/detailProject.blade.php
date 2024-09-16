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
        <div class="absolute inset-0 bg-cover bg-center brightness-50"
            style="background-image: url('{{ asset('./storage/fotoProject/' . $project->banner) }}');">
        </div>
        <!-- Pseudo-element for the gradient border -->
        <div class="absolute bottom-0 left-0 right-0 h-[6px]"
            style="background: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%);">
        </div>
        <div>
            <h1 class="text-white text-[36px] md:text-[64px] ml-6 md:ml-0 font-Anek font-bold custom-gradient-text uppercase"
                data-aos="fade-up">PROJECT
                {{ $project->title }}</h1>
        </div>
    </div>
    <div class="md:px-[100px] px-[50px] mt-[100px]">
        <div class="flex flex-col lg:flex-row lg:justify-center">
            <div class="flex flex-col cke-editor w-full lg:w-[65%]" data-aos="fade-up">
                {!! $project->deskripsi !!}
            </div>

            <div class="flex flex-col lg:ml-6 w-full lg:w-[35%] gap-y-[10px] mt-4">
                <div class="flex flex-col justify-start items-start gap-y-3 bg-black/30 px-5 py-10 rounded-lg"
                    data-aos="fade-left">
                    <h1 class="font-Anek font-bold custom-gradient-text text-[20px] md:text-[23px] uppercase">
                        The programming language used is:
                    </h1>
                    <div class="flex flex-wrap pl-3" data-aos="fade-left">
                        @foreach ($project->getSkills() as $skill)
                            <img src="{{ asset('storage/logo_skills/' . $skill->gambar) }}" alt="{{ $skill->nama }}"
                                class="w-[50px] md:w-[60px] lg:w-[70px] h-auto mr-2 mb-2">
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col justify-start items-start gap-y-3 bg-black/30 px-5 py-10 rounded-lg">
                    <h1 class="font-Anek font-bold custom-gradient-text text-[20px] md:text-[23px] uppercase">
                        The participating teams are:
                    </h1>
                    <div class="flex flex-wrap pl-3">
                        @foreach ($project->getMembers() as $member)
                            <img src="{{ asset('storage/logo_members/' . $member->gambar) }}" alt="{{ $member->nama }}"
                                class="w-[50px] md:w-[60px] lg:w-[70px] h-auto mr-2 mb-2">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center">
            <h1 class="font-Anek font-bold text-[32px] md:text-[44px] custom-gradient-text" data-aos="fade-up">FOLLOW FOR
                MORE OF MY PROJECTS</h1>
            <p
                class="md:text-center text-justify pt-2 text-lg sm:text-xl md:text-[24px] md:px-[250px] font-inter text-white font-extralight">
                Stay updated with the latest on my projects, achievements, work experiences, and hobbies.
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
                                src="{{ asset('./storage/fotoProject/' . $item->banner) }}">
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
                            <a href="/project/{{ $item->id }}"
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
