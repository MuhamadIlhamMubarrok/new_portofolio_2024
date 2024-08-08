<div class="flex flex-col justify-center px-4 md:px-[200px] my-[80px]" data-aos="fade-up">
    <div class="flex flex-row justify-start items-center gap-x-4 ">
        <div class="border-[1px] rounded-full border-[#6B5E36] w-[25px] md:w-[50px] my-[15px] md:my-[25px]"></div>
        <h1 class="text-[#6B5E36] text-xl">WHAT HAVE WE DONE</h1>
    </div>
    <h1 class="font-inter text-[24px] md:text-[32px] font-semibold mb-4">OUR PORTFOLIO PRODUCT</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($project as $item)
            <a href="/home/detail/{{ $item->id }}">
                <div style="background-image: url('{{ asset('./storage/fotoProduct/' . $item->banner) }}');"
                    data-aos="fade-up"
                    class="hover:brightness-75 transition duration-300 ease-in-out w-full h-[200px] sm:h-[250px] md:h-[300px] lg:h-[380px] bg-cover bg-center">
                </div>
            </a>
        @endforeach
    </div>
</div>
