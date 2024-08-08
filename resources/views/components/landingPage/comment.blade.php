<div class="my-[70px] md:px-[200px] px-[20px] py-[50px]">
    <h1 class="font-inter font-semibold text-center text-[24px] md:text-[32px]" data-aos="fade-up">WHAT OUR CLIENT SAY
    </h1>
    <swiper-container class="mySwiper mt-[50px]" pagination="true" pagination-clickable="true" space-between="20"
        slides-per-view="1"
        breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>
        @foreach ($testimony as $item)
            <swiper-slide
                class="flex flex-col justify-start items-start border-2 border-[#B8B9BC] rounded-[24px] px-[20px] pt-[20px] pb-[60px] h-auto md:h-[400px]"
                data-aos="fade-up">
                <div class="flex flex-row items-center justify-start gap-x-4 w-full">
                    <img class="h-[50px] w-[50px] rounded-full"
                        src="{{ asset('./storage/testimony_foto/' . $item->gambar) }}">
                    <div class="flex flex-col items-start">
                        <h1 class="font-inter font-semibold text-[#001485]">{{ $item->nama }}</h1>
                        <h2 class="font-inter font-light text-[13px] md:text-[15px]">Web developer</h2>
                    </div>
                </div>
                <div class=" block border-[1px] border-[#B8B9BC] w-full my-[20px]"></div>
                <p class="font-inter font-light">{{ $item->text_testimoni }}</p>
            </swiper-slide>
        @endforeach
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</div>
