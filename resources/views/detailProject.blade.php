@section('title', 'Detail Project')

@extends('layouts.landingpage')

@section('title', $project->title)

@section('content')
    <style>
        .cke-editor p {
            color: #ffffff;
            font-family: 'DM Sans', serif;
        }

        /* Styling untuk judul */
        .cke-editor h1,
        .cke-editor h2 {
            font-size: 40px;
            background: linear-gradient(90deg, #08FFF0 0%, #009FF9 45%, #2300F9 74%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'Poppins', serif;
            font-size: 18px;
            margin-block:10px;
        }

        /* Styling untuk daftar bullet dan numbered */
        .cke-editor ul, 
        .cke-editor ol {
            margin-left: 20px;
            color: #ffffff;
            padding-left: 20px; /* Tambahan untuk memastikan list terlihat */
        }

        .cke-editor ul {
            list-style-type: disc; /* Bullet list */
        }

        .cke-editor ol {
            list-style-type: decimal; /* Numbered list */
        }

        /* Styling untuk link */
        .cke-editor a {
            color: #009FF9; /* Warna biru */
            text-decoration: underline;
        }
    </style>
    <div class="flex flex-col justify-center items-center py-16 mt-12">

        <!-- Breadcrumb -->
        <x-breadcrumb title="DETAIL PROJECT" breadcrumbHome="Home" breadcrumbCurrent="Detail Project" />
        <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">

            <img src="{{ asset('./storage/fotoProject/' . $project->banner) }}"
                class="w-full h-auto object-cover object-bottom rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105"
                style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9 0%, #009FF9 45%, #08FFF0 74%) 1;"
                alt="foto projek">
            <div class="flex flex-col lg:flex-row lg:justify-center mt-6">
                <div class="flex flex-col w-full lg:w-[65%] bg-white/20 rounded-lg p-6" data-aos="fade-up">
                    <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-4"
                        style="background: linear-gradient(174deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
                        {{ $project->nama }}</h1>
                    <div class="cke-editor">
                        {!! $project->deskripsi !!}
                    </div>
                </div>

                <div class="flex flex-col lg:ml-6 w-full lg:w-[35%] gap-y-[10px] md:mt-0 mt-4">
                    <div class="flex flex-col justify-start items-start gap-y-3 bg-white/20 px-5 py-10 rounded-lg"
                        data-aos="fade-left">
                        <h1 class="font-poppins font-bold custom-gradient-text text-[20px] md:text-[14px] uppercase">
                            The programming language used is:
                        </h1>
                        <div class="flex flex-wrap pl-3" data-aos="fade-left">
                            @foreach ($project->getSkills() as $skill)
                                <img src="{{ asset('storage/logo_skills/' . $skill->gambar) }}" alt="{{ $skill->nama }}"
                                    class="w-[25px] md:w-[35px]  h-auto mr-2 mb-2">
                            @endforeach
                        </div>
                    </div>

                    <div class="flex flex-col justify-start items-start gap-y-3 bg-white/20 px-5 py-10 rounded-lg"
                        data-aos="fade-left">
                        <h1 class="font-poppins font-bold custom-gradient-text text-[20px] md:text-[14px] uppercase">
                            The participating teams are:
                        </h1>
                        <div class="flex flex-col pl-3">
                           @foreach ($project->getMembers() as $member)
                                <div class="flex flex-col items-center bg-[#121440]/20 p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                                    <img src="{{ asset('storage/logo_members/' . $member->gambar) }}" 
                                        alt="{{ $member->nama }}" 
                                        class="w-[75%] h-auto object-center rounded-xl shadow-lg">
                                    
                                    <h1 class="font-poppins font-bold text-white text-[16px] md:text-[14px] uppercase text-center mt-3">
                                        {{ $member->nama }}
                                    </h1>
                                    <p class="text-[#F9F9F9] font-light text-[14px]">{{ $member->jabatan }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center px-4 md:px-20 lg:px-32 xl:px-60">
                <h1 class="font-poppins font-bold text-[32px] md:text-[44px] custom-gradient-text" data-aos="fade-up">FOLLOW
                    FOR
                    MORE OF MY PROJECTS</h1>
                <p
                    class="md:text-center text-justify text-lg sm:text-xl md:text-[24px] font-inter text-white font-extralight">
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
                                <a href="/project/{{ $item->id }}"
                                    class="text-white w-[180px] duration-200 md:w-[100px] border border-[2px] border-[#009FF9] hover:border hover:border-[#F9F9F9]/15 hover:rounded-full= hover:border-[2px] font-poppins hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0] hover:bg-gradient-to-bl font-bold rounded-full text-[10px] px-4 md:px-1 py-2.5 text-center me-2 mb-4 md:mb-2">
                                    LEARN MORE
                                </a>
                            </div>
                        </swiper-slide>
                    @endforeach

                </swiper-container>
            </div>

@endsection
