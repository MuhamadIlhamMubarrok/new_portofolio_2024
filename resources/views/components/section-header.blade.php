<div class="flex flex-col mb-2">
    <div class="flex flex-row justify-start items-center gap-x-4 mb-2">
        <!-- Glowing vertical line -->
        <div
            class="w-[6px] h-[30px] md:h-[40px] bg-gradient-to-b from-[#2300F9] via-[#009FF9] to-[#08FFF0] rounded-full shadow-[0_0_10px_#08FFF0] animate-pulse">
        </div>
        <h1 class="text-white text-xl font-bold font-poppins tracking-wide">
            {{ $smallTitle }}
        </h1>
    </div>

    <!-- Title -->
    <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-4 uppercase"
        style="background: linear-gradient(178deg, #2300F9 25%, #009FF9 32%, #08FFF0 44%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
        {{ $bigTitle }}
    </h1>
</div>
