<div class="flex flex-col justify-center items-center px-4 md:px-[60px] lg:px-[100px] xl:px-[200px] my-[40px] md:my-[100px] lg:my-[200px]"
    data-aos="fade-up">

    <h1 class="font-poppins text-[24px] md:text-[28px] lg:text-[32px] font-semibold text-center"
        style="background: linear-gradient(178deg, #2300F9 30%, #009FF9 47%, #08FFF0 74%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        WHAT SKILLS DO I HAVE?</h1>

    <p
        class="font-dmsans text-white text-center text-[14px] md:text-[16px] max-w-full md:max-w-[700px] lg:max-w-[850px] mb-4
        bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10
        backdrop-blur-md p-6 md:p-8 rounded-2xl
        shadow-[0_0_30px_#08FFF033] border border-[#08FFF0]/20
        transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">

        Solving problems related to websites—whether it's building, developing, maintaining, or enhancing them—on both
        the front-end and back-end. We craft digital solutions that work beautifully and perform flawlessly.
    </p>



    <div class="flex flex-wrap justify-center gap-[20px] md:gap-[30px] lg:gap-[40px] w-full max-w-[860px] mt-4">
        @foreach ($skill as $index => $skill)
            <div class="group relative transition-transform duration-300 hover:scale-110">
                <img src="{{ asset('./storage/logo_skills/' . $skill->gambar) }}" alt="Skill {{ $skill->nama }}"
                    class="h-[40px] md:h-[50px] lg:h-[60px] w-auto z-10 relative transition-all duration-300 drop-shadow-[0_0_4px_rgba(0,255,255,0.6)] group-hover:drop-shadow-[0_0_10px_rgba(0,255,255,0.9)]" />

                <!-- Glow Ring -->
                <div
                    class="absolute inset-0 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-all duration-500 bg-cyan-400/30 z-0">
                </div>
            </div>
        @endforeach
    </div>

</div>
