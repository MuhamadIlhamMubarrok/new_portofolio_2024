@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[730px] w-auto flex flex-col justify-center items-center">
        <div class="absolute inset-0 bg-cover bg-center brightness-50"
            style="background-image: url('{{ asset('./storage/fotoProduct/' . $project->banner) }}');">
        </div>
        <div class="relative z-10 flex flex-col items-start w-[300px] md:w-[500px] text-center md:text-left">
            <h1 class="text-white text-[36px] md:text-[64px] font-julius" data-aos="fade-up">{{ $project->nama }}</h1>
            <p class="text-white text-[16px] md:text-[20px] font-inter font-extralight" data-aos="fade-up">
                {{ $project->deskripsi }}</p>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <!-- Photos Grid Section -->
        <div class="grid grid-cols-2 gap-4 md:my-[100px] md:mx-[400px] my-[50px] mx-[50px]">
            @foreach ($project->subGambarProjects as $index => $subImage)
                @if ($index == 0)
                    <div class="col-span-2" data-aos="fade-up">
                        <img src="{{ asset('./storage/sub_gambar_projects/' . $subImage->gambar) }}"
                            alt="{{ $subImage->title }}" class="w-full h-auto">

                    </div>
                @elseif($index == 1)
                    <div class="row-span-2" data-aos="fade-up">
                        <img src="{{ asset('./storage/sub_gambar_projects/' . $subImage->gambar) }}"
                            alt="{{ $subImage->title }}" class="w-full h-full object-cover">

                    </div>
                @elseif($index == 2)
                    <div data-aos="fade-up">
                        <img src="{{ asset('./storage/sub_gambar_projects/' . $subImage->gambar) }}"
                            alt="{{ $subImage->title }}" class="w-full h-auto">
                    </div>
                @elseif($index == 3)
                    <div class="col-span-2" data-aos="fade-up">
                        <img src="{{ asset('./storage/sub_gambar_projects/' . $subImage->gambar) }}"
                            alt="{{ $subImage->title }}" class="w-full h-auto">
                    </div>
                @else
                    <div data-aos="fade-up">
                        <img src="{{ asset('./storage/sub_gambar_projects/' . $subImage->gambar) }}"
                            alt="{{ $subImage->title }}" class="w-full h-auto">

                    </div>
                @endif
                @if ($index >= 9)
                @break
            @endif
        @endforeach
    </div>

    <div data-aos="fade-up" class=" border-[1px] rounded-full border-black w-3/4 lg:w-[700px] mb-12"></div>

    <!-- Contact Us Section -->
    <div data-aos="fade-up" class="flex flex-col items-center justify-center mb-10 md:mb-12 lg:mb-[50px] px-4 md:px-0">
        <h1 class="text-xl md:text-2xl lg:text-[32px] font-semibold font-inter">CONTACT US</h1>
        <p
            class="text-center mt-6 mb-10 text-sm md:text-base lg:text-lg font-inter font-light md:px-[100px] lg:px-[200px] px-[50px] xl:px-[450px]">
            If you are interested in our product, you can call us and make a deal with us to work with you!
        </p>
        <a href="/contact-us"
            class="hover:text-white w-[150px] md:w-[200px] text-[#6B5E36] font-inter font-semibold border-[2px] border-[#6B5E36] hover:bg-[#6B5E36] focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] md:px-4 py-2.5 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center">
            CONTACT US
        </a>
    </div>
</div>


@endsection
