<div class="my-[70px] md:px-[200px] px-[20px] py-[50px]" data-aos="fade-up">
    <div class="flex flex-row justify-start items-center gap-x-4">
        <div class="border-[1px] rounded-full border-[custom-gradient-text] w-[25px] md:w-[50px] my-[15px] md:my-[25px]">
        </div>
        <h1 class="text-white text-xl">CERTIFICATE</h1>
    </div>
    <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-4 uppercase"
        style="background: linear-gradient(178deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        Certification of
        Excellence
    </h1>
    {{-- <swiper-container class="mySwiper mt-[50px]" pagination="true" pagination-clickable="true" space-between="20"
        slides-per-view="1"
        breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

    </swiper-container> --}}
    <swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true" slides-per-view="auto"
        coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"
        initial-slide="{{ intval(count($certificate) / 2) }}" loop="true">
        @foreach ($certificate as $item)
            <swiper-slide data-aos="fade-up" class="transition-transform duration-500 hover:scale-105 group relative">
                <div
                    class="relative rounded-xl overflow-hidden shadow-lg group-hover:shadow-blue-500/50 transition-shadow duration-500">
                    <img src="{{ asset('./storage/logo_certificate/' . $item->gambar) }}"
                        class="h-[200px] w-[400px] object-center cursor-pointer transform transition-transform duration-500 group-hover:scale-105 group-hover:brightness-110"
                        onclick="showModal('{{ asset('./storage/logo_certificate/' . $item->gambar) }}')">
                    <!-- Reflection effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-white/5 to-white/0 opacity-0 group-hover:opacity-30 transition-opacity duration-500 pointer-events-none">
                    </div>
                </div>
            </swiper-slide>
        @endforeach
    </swiper-container>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.3/dist/vanilla-tilt.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            VanillaTilt.init(document.querySelectorAll("swiper-slide"), {
                max: 10,
                speed: 400,
                glare: true,
                "max-glare": 0.2
            });
        });
    </script>

</div>
