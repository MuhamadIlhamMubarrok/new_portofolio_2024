<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]">
    <div class="flex flex-row justify-start items-center gap-x-4" data-aos="fade-up">
        <div class="border-[1px] rounded-full border-white w-[25px] md:w-[50px] my-[15px] md:my-[25px]"></div>
        <h1 class="text-white text-xl">NEWS</h1>
    </div>
    <h1 class="font-Anek text-[24px] md:text-[32px] font-semibold mb-4" data-aos="fade-up"
        style="background: linear-gradient(178deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        ALL NEWS ABOUT US</h1>
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20"
        data-aos="fade-left" slides-per-view="1"
        breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

        @foreach ($news as $index => $item)
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
                        <h1 class="custom-gradient-text font-Anek font-bold text-[20px] uppercase">{{ $item->title }}
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</div>
