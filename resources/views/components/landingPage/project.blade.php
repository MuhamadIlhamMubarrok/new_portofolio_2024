<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]">
    <x-section-header smallTitle="PROJECT" bigTitle="PROJECT WE HAVE WE DONE" />
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20" slides-per-view="1"
        breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>
        @foreach ($projects as $index => $project)
            <swiper-slide
                class="flex flex-col justify-between bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
        backdrop-blur-md rounded-[24px] h-[420px] shadow-[0_0_30px_#08FFF033] border border-[#08FFF0]/20 
        transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">

                <!-- Image + Category -->
                <div class="relative w-full">
                    <img class="rounded-t-[24px] h-[175px] w-full object-cover object-center"
                        src="{{ asset('./storage/banner_news/' . $project->banner) }}" alt="{{ $project->alt_banner }}">
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</div>
