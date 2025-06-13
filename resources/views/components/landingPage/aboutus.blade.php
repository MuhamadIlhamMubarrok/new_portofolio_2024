<div
    class="h-auto flex flex-col items-center md:flex-row justify-center md:gap-x-[100px] my-8 md:my-[100px] px-4 md:px-0">
    <!-- Profile Image -->
    <div class="flex justify-center md:justify-start w-full md:w-auto" data-aos="fade-up">
        <div class="relative group overflow-hidden rounded-xl ">
            <img src="{{ asset('images/images/ilham2.webp') }}"
                class="animate-float h-auto md:w-[1000px] w-full md:h-[500px] max-w-[450px] object-cover transform transition-transform duration-500 group-hover:scale-105 group-hover:brightness-110 group-hover:saturate-150"
                alt="Ilham's photo">
            <!-- Glow ring effect -->
            <div
                class="absolute inset-0 bg-gradient-to-tr from-[#2300F9]/30 via-[#009FF9]/20 to-[#08FFF0]/30 blur-lg opacity-0 group-hover:opacity-100 transition-all duration-700">
            </div>
        </div>
    </div>

    <!-- Text Section -->
    <div class="flex flex-col w-full md:w-[40%]" data-aos="fade-up">
        <x-section-header smallTitle="ABOUT ME" bigTitle="Passion for Technology and Design" />
        <!-- Description -->
        <div
            class="bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
        backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-[0_0_30px_#08FFF033] 
        border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">

            <p class="text-justify mb-4 font-dmsans text-sm md:text-base text-gray-200 leading-relaxed">
                As a <span class="text-[#08FFF0] font-semibold">Fullstack Developer</span>, my passion lies in bridging
                the gap between innovative design and robust backend solutions.
                My journey at IDN Polytechnic has honed my skills in both frontend and backend development, enabling me
                to craft seamless, user-friendly experiences that are as
                functional as they are visually compelling.
            </p>
            <p class="text-justify mb-6 font-dmsans text-sm md:text-base text-gray-200 leading-relaxed">
                Whether it’s building scalable backend architectures or designing intuitive interfaces, I am committed
                to delivering high-quality projects that meet the demands
                of the modern digital landscape. My work is driven by a deep understanding of technology and a
                relentless pursuit of excellence.
            </p>

            <!-- CTA Button with Glow + Arrow -->
            <a href="/about-us"
                class="relative inline-flex items-center gap-3 text-white font-poppins font-bold rounded-full px-6 py-3 text-sm md:text-[14px]
            bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] shadow-[0_0_20px_#08FFF0AA] hover:shadow-[0_0_40px_#08FFF0DD]
            transition-all duration-300 group overflow-hidden">

                LEARN MORE
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 transition-transform group-hover:translate-x-1 group-hover:scale-110" fill="none"
                    viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</div>
