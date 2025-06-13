<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]" data-aos="fade-up">
    <x-section-header smallTitle="TRACK RECORD" bigTitle="WHAT HAVE WE DONE" />
    <div class="flex flex-col lg:flex-row flex-wrap justify-center items-center gap-6">
        @foreach ($counts as $index => $count)
            <div class="relative group">
                <!-- Gradient Border Glow -->
                <div
                    class="absolute -inset-[2px] bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0] blur-lg opacity-0 group-hover:opacity-100 transition duration-700 rounded-[16px] z-0">
                </div>

                <!-- Card Utama -->
                <div
                    class="relative z-10 flex flex-col justify-center items-center bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
        backdrop-blur-md shadow-custom-thick rounded-[16px] px-6 pt-6 pb-10 max-w-[485px] 
                    transform transition-all duration-500 hover:-translate-y-2 hover:scale-[1.03] hover:shadow-xl cursor-pointer border border-[#08FFF0]/20 transition-all duration-500">

                    <h1 id="count-{{ $index }}"
                        class="font-dmsans custom-gradient-text text-[48px] md:text-[96px] font-extrabold"
                        data-count="{{ $count->count }}">
                        {{ $count->count }}</h1>
                    <h1 class="font-poppins font-semibold text-[16px] md:text-[24px] uppercase custom-gradient-text">
                        {{ $count->judul_count }}</h1>
                    <p class="font-inter text-justify text-white text-sm md:text-base">{{ $count->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex items-center justify-center mt-10">
        <a href="/our-client"
            class="relative flex items-center gap-4 border-2 border-[#009FF9] px-6 py-3 rounded-full text-white font-poppins font-bold text-[16px] md:text-[18px]
            bg-transparent hover:bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0] shadow-[0_0_20px_#009FF9] hover:shadow-[0_0_30px_#08FFF0] group transition-all duration-300 overflow-hidden">
            <!-- Button Text -->
            <span class="z-10">VIEW OUR CLIENT</span>

            <!-- Arrow -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 transition-transform group-hover:translate-x-1 group-hover:scale-110 group-hover:animate-pulse"
                fill="none" viewBox="0 0 24 24" stroke="#08FFF0" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

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
