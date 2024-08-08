<div class="relative h-screen flex flex-col items-center justify-center overflow-hidden">
    @if (Str::endsWith($banner->banner, '.mp4'))
        <!-- Video Background -->
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover" data-aos="fade-up">
            <source src="{{ asset('storage/banner_file/' . $banner->banner) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    @else
        <!-- Image Background -->
        <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('storage/banner_file/' . $banner->banner) }}');"></div>
    @endif

    <!-- Content on top of video/image -->
    <div class="relative z-10 flex flex-col items-center text-center text-white px-4 md:px-0">
        <h1 class="text-4xl md:text-6xl lg:text-[90px] font-julius animate-fadeIn leading-tight md:leading-none">
            Good Room<br>is from Good<br>Interior
        </h1>
        <div class=" border-[1px] rounded-full border-white h-[25px] md:h-[50px] my-[15px] md:my-[25px] animate-fadeIn">
        </div>
        <p
            class="font-inter w-full md:w-[700px] text-justify md:text-center mx-auto animate-fadeIn text-sm md:text-base lg:text-lg px-4 md:px-0">
            <span class="font-semibold">Aditya Mandiri Konstruksi</span> is dedicated to providing elegant and
            functional interior and design solutions. We prioritize comfort and aesthetics to create spaces that are not
            only visually stunning but also comfortable to live in. Every project we undertake is crafted with
            meticulous
            attention to detail to meet the unique needs of each client. Trust us with your interior, and let us turn
            your
            vision into reality.
        </p>
        <a href="/about-us"
            class="text-white font-inter font-semibold bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] px-6 md:px-10 py-2.5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 animate-fadeIn">
            VISIT US
        </a>
    </div>
</div>
