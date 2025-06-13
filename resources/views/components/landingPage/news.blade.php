<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]">
    <x-section-header smallTitle="NEWS" bigTitle="ALL NEWS ABOUT US" class="mb-[-100px]" />
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="40" slides-per-view="1"
        breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

        @foreach ($news as $index => $item)
            <swiper-slide
                class="flex flex-col justify-start items-start bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] pb-[60px] h-auto md:h-[400px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]"
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
                        <h1 class="custom-gradient-text font-poppins font-bold text-[16px] uppercase">
                            {{ $item->title }}
                        </h1>
                    </div>
                    <p class="font-inter text-[#F9F9F9] font-light">
                        {{ Str::limit(strip_tags($item->deskripsi), 100) }}...</p>
                    <a href="/news/{{ $item->id }}"
                        class="w-[180px] md:w-[100px] px-4 md:px-1 py-2.5 text-[10px] text-white text-center font-poppins font-bold
                            rounded-full border-2 border-[#009FF9] transition-all duration-300
                            bg-transparent hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0]
                            shadow-[0_0_10px_#009FF944] hover:shadow-[0_0_20px_#08FFF0AA]">
                        LEARN MORE
                    </a>


                </div>
            </swiper-slide>
        @endforeach

    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</div>
