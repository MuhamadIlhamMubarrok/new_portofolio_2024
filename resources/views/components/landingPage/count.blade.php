<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]" data-aos="fade-up">
    <div class="flex flex-row justify-start items-center gap-x-4">
        <div class="border-[1px] rounded-full border-white w-[25px] md:w-[50px] my-[15px] md:my-[25px]"></div>
        <h1 class="text-white text-xl">TRACK RECORD</h1>
    </div>
    <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-4"
        style="background: linear-gradient(178deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        WHAT HAVE WE DONE</h1>
    <div
        class="relative flex flex-col md:flex-row flex-wrap justify-center md:gap-x-[100px] gap-y-4 md:gap-y-0 py-[30px]">

        @foreach ($counts as $index => $count)
            <div class="relative group">
                <!-- Gradient Border Glow -->
                <div
                    class="absolute -inset-[2px] bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0] blur-lg opacity-0 group-hover:opacity-100 transition duration-700 rounded-[16px] z-0">
                </div>

                <!-- Card Utama -->
                <div
                    class="relative z-10 flex flex-col justify-center items-center bg-[#F9F9F9]/15 shadow-custom-thick rounded-[16px] px-6 pt-6 pb-10 md:pb-20 md:w-[320px] lg:w-[400px]
                transform transition-all duration-500 hover:-translate-y-2 hover:scale-[1.03] hover:shadow-xl cursor-pointer">

                    <h1 id="count-{{ $index }}"
                        class="font-dmsans custom-gradient-text  text-[48px] md:text-[96px] font-extrabold"
                        data-count="{{ $count->count }}">
                        {{ $count->count }}</h1>
                    <h1 class="font-poppins font-semibold text-[16px] md:text-[24px] uppercase custom-gradient-text">
                        {{ $count->judul_count }}</h1>
                    <p class="font-inter text-justify text-white text-sm md:text-base">{{ $count->deskripsi }}</p>
                </div>
            </div>
        @endforeach

    </div>

    <div class="flex items-center justify-center">
        <a href="/our-client"
            class="text-white w-[180px] duration-200 md:w-[240px] border-2 border-[#009FF9] hover:border-white/15 hover:rounded-full hover:bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] font-poppins font-bold rounded-full text-[18px] px-4 md:px-5 py-2.5 text-center mb-4 md:mb-2">
            VIEW OUR CLIENT
        </a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll('[id^="count-"]');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const countTo = parseInt(element.getAttribute('data-count'), 10);
                    animateCount(element, countTo);
                    observer.unobserve(
                        element); // Menghentikan observasi setelah animasi selesai
                }
            });
        }, {
            threshold: 0.5 // Memulai animasi ketika 50% elemen terlihat
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });

    function animateCount(element, countTo) {
        let countFrom = 0;
        const duration = 2000; // Durasi animasi dalam milidetik
        const frameDuration = 1000 / 60; // Durasi setiap frame (60 frame per detik)
        const totalFrames = Math.round(duration / frameDuration);
        const easeOutQuad = t => t * (2 - t);

        let frame = 0;
        const count = () => {
            frame++;
            const progress = easeOutQuad(frame / totalFrames);
            const currentCount = Math.round(countFrom + (countTo - countFrom) * progress);
            element.innerText = currentCount;
            if (frame < totalFrames) {
                requestAnimationFrame(count);
            }
        };
        count();
    }
</script>
