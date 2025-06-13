<div class=" justify-center flex flex-col  md:px-[200px] px-[50px] py-[50px] bg-cover bg-center md:py-[100px]">
    <x-section-header smallTitle="WHAT WE MADE" bigTitle="OUR SERVICES" />
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
            <a href="/contact-us" class="group relative block overflow-hidden rounded-[20px] shadow-xl p-[4px]">
                <!-- Glowing Gradient Border -->
                <div class="absolute inset-0 z-0 rounded-[20px] opacity-0 group-hover:opacity-100 transition-all duration-700 blur-xl"
                    style="background: linear-gradient(115deg, #08FFF0, #009FF9, #2300F9);">
                </div>

                <!-- Shine Effect -->
                <div class="absolute top-0 left-[-75%] w-[200%] h-full z-10 opacity-0 group-hover:opacity-40 transition duration-1000 ease-out transform skew-x-[-20deg] group-hover:translate-x-[75%]"
                    style="background: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0.1) 100%);">
                </div>

                <!-- Card Content Layer (beri background & padding supaya border kelihatan) -->
                <div class="relative z-20 rounded-[16px] bg-[#0F0F0F] overflow-hidden">
                    <img src="{{ asset('./images/images/service1.webp') }}"
                        class="w-full h-auto rounded-[16px] transition-transform duration-500 ease-in-out 
                        group-hover:scale-105 group-hover:brightness-125 group-hover:contrast-110">
                </div>
            </a>
            <a href="/contact-us" class="group relative block overflow-hidden rounded-[20px] shadow-xl p-[4px]">
                <!-- Glowing Gradient Border -->
                <div class="absolute inset-0 z-0 rounded-[20px] opacity-0 group-hover:opacity-100 transition-all duration-700 blur-xl"
                    style="background: linear-gradient(115deg, #08FFF0, #009FF9, #2300F9);">
                </div>

                <!-- Shine Effect -->
                <div class="absolute top-0 left-[-75%] w-[200%] h-full z-10 opacity-0 group-hover:opacity-40 transition duration-1000 ease-out transform skew-x-[-20deg] group-hover:translate-x-[75%]"
                    style="background: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0.1) 100%);">
                </div>

                <!-- Card Content Layer (beri background & padding supaya border kelihatan) -->
                <div class="relative z-20 rounded-[16px] bg-[#0F0F0F] overflow-hidden">
                    <img src="{{ asset('./images/images/service2.webp') }}"
                        class="w-full h-auto rounded-[16px] transition-transform duration-500 ease-in-out 
                        group-hover:scale-105 group-hover:brightness-125 group-hover:contrast-110">
                </div>
            </a>

        </div>
    </div>


</div>
