<div class="flex flex-col justify-center items-center px-4 md:px-[60px] lg:px-[100px] xl:px-[200px] my-[40px] md:my-[100px] lg:my-[200px]"
    data-aos="fade-up">

    <h1 class="font-Anek text-[24px] md:text-[28px] lg:text-[32px] font-semibold text-center"
        style="background: linear-gradient(178deg, #2300F9 30%, #009FF9 47%, #08FFF0 74%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        WHAT SKILLS DO I HAVE?</h1>

    <p
        class="font-inter text-white text-center text-[14px] md:text-[16px] max-w-full md:max-w-[700px] mb-4 lg:max-w-[850px]">
        Solving problems that are directly or indirectly related to websites, including the creation, development,
        maintenance, and addition of features for both front-end and back-end.</p>

    <div class="flex flex-wrap justify-center gap-[20px] md:gap-[30px] lg:gap-[40px] w-full max-w-[860px] mt-4">
        @foreach ($skill as $index => $skill)
            <img src="{{ asset('./storage/logo_skills/' . $skill->gambar) }}" alt="Gambar"
                class="h-[40px] w-auto md:h-[50px] lg:h-[60px]">
        @endforeach
    </div>
</div>
