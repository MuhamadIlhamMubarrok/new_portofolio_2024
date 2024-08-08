<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]" data-aos="fade-up">
    <div class="flex flex-row justify-start items-center gap-x-4 ">
        <div class="border-[1px] rounded-full border-[#6B5E36] w-[25px] md:w-[50px] my-[15px] md:my-[25px]"></div>
        <h1 class="text-[#6B5E36] text-xl">TRACK RECORD</h1>
    </div>
    <h1 class="font-inter text-[24px] md:text-[32px] font-semibold mb-4">WHAT HAVE WE DONE</h1>
    <div class="flex flex-col md:flex-row md:gap-x-[100px] gap-y-4 md:gap-y-0 my-[30px]">
        @foreach ($counts as $index => $count)
            <div
                class="flex flex-col justify-center items-center bg-[#F9F9F9] shadow-custom-thick rounded-[16px] px-[20px] pt-[20px] pb-[40px] md:pb-[80px] md:w-[400px]">
                <h1 id="count-{{ $index }}"
                    class="font-inter text-[#001485] text-[48px] md:text-[96px] font-extrabold"
                    data-count="{{ $count->count }}">
                    {{ $count->count }}</h1>
                <h1 class="font-inter font-semibold text-[16px] md:text-[24px]">{{ $count->judul_count }}</h1>
                @if ($index == 0)
                    <p class="font-inter text-justify text-sm md:text-base">We have successfully completed 20 intercity
                        deliveries with efficiency and safety. Your trust is our top priority in every step of the
                        delivery
                        process.</p>
                @elseif ($index == 1)
                    <p class="font-inter text-justify text-sm md:text-base">We are proud to have served 32 satisfied
                        clients
                        with innovative solutions and unwavering support. Our commitment is to maintain the satisfaction
                        and
                        trust of every client.</p>
                @elseif ($index == 2)
                    <p class="font-inter text-justify text-sm md:text-base">With pride, we have completed projects that
                        have
                        delivered real results and satisfaction for all our clients. Each project is a step forward
                        towards
                        mutual success.</p>
                @else
                    <p class="font-inter text-justify text-sm md:text-base">Additional paragraph text for other indexes
                        can
                        go here.</p>
                @endif
            </div>
        @endforeach
    </div>

    <div class="flex items-center justify-center">
        <a href="/our-client"
            class="hover:text-white w-[150px] md:w-[200px] text-[#6B5E36] font-inter font-semibold border-[2px] border-[#6B5E36] hover:bg-[#6B5E36] focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] md:px-4 py-2.5 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center">
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
