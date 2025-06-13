@if (Request::path() !== 'contact-us')
    <div class="relative w-full overflow-hidden bg-gradient-to-r from-[#051844]/50 via-[#0B1F40]/40 to-[#051844]/50 py-6 shadow-[0_0_30px_#08FFF033]"
        data-aos="fade-down">
        <div class="marquee-wrapper relative">
            <div class="marquee-content flex items-center gap-3 animate-marquee whitespace-nowrap">
                @for ($i = 0; $i < 5; $i++)
                    @foreach ($client as $clients)
                        <img src="{{ asset('storage/logo_client/' . $clients->gambar) }}" alt="Client Logo"
                            class="h-[40px] w-auto md:h-[50px] lg:h-[60px] brightness-125 hover:brightness-200 transition-all duration-300" />
                    @endforeach
                @endfor
            </div>
        </div>

        <!-- Glow Overlay -->
        <div
            class="absolute top-0 left-0 w-full h-full pointer-events-none bg-gradient-to-r from-transparent via-[#08FFF022] to-transparent">
        </div>
    </div>
@endif


<div class="min-h-auto w-full bg-cover bg-bottom bg-no-repeat flex flex-col md:flex-row px-4 py-6 md:px-8 md:py-10 lg:px-20 lg:py-15 gap-y-4"
    style="background-image: url('{{ asset('./images/background/footer.webp') }}');">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-y-5 md:gap-x-10 w-full">
        <!-- Logo and Description -->
        <div class="flex flex-col items-start text-white text-start">
            <img src="{{ asset('./images/logo/logo.png') }}" alt="logo aing" class="h-[50px] w-[80px]">
            <div>
                <h1 class="font-bold font-poppins text-base md:text-lg lg:text-xl">Portofolio - Muhamad Ilham Mubarrok
                </h1>
                <p class="w-full md:w-[400px] text-sm md:text-base lg:text-lg">Aku dan hiruk pikuk perjalanan ini adalah
                    kalibrasi frekuensi tanpa arogansi</p>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="flex flex-col items-start justify-start text-white gap-y-2 mt-12">
            <h1 class="font-bold font-poppins text-base md:text-lg lg:text-xl">Sosial Media</h1>
            <div class="flex flex-row justify-start items-center gap-x-4">
                <!-- Instagram -->
                <a href="https://www.instagram.com/milhamm._/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="35" height="35"
                        viewBox="0 0 24 24">
                        <path fill="#009FF9"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="35" height="35"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M15 6.947c-.368.16-.763.27-1.178.318c.424-.25.748-.646.902-1.117a4.2 4.2 0 0 1-1.304.49A2.06 2.06 0 0 0 11.923 6c-1.133 0-2.051.905-2.051 2.02q0 .237.053.46a5.85 5.85 0 0 1-4.228-2.11a2 2 0 0 0-.278 1.015c0 .7.363 1.32.913 1.681a2.1 2.1 0 0 1-.93-.253v.025a2.03 2.03 0 0 0 1.646 1.98a2.1 2.1 0 0 1-.927.034a2.05 2.05 0 0 0 1.916 1.403a4.16 4.16 0 0 1-2.548.864q-.248 0-.489-.028A5.86 5.86 0 0 0 8.144 14c3.774 0 5.837-3.078 5.837-5.748l-.007-.262A4.1 4.1 0 0 0 15 6.947" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/muhamad-ilham-mubarrok-ab67462a0/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="35" height="35"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M15 11.13v3.697h-2.143v-3.45c0-.866-.31-1.457-1.086-1.457c-.592 0-.945.398-1.1.784c-.056.138-.071.33-.071.522v3.601H8.456s.029-5.842 0-6.447H10.6v.913l-.014.021h.014v-.02c.285-.44.793-1.066 1.932-1.066c1.41 0 2.468.922 2.468 2.902M6.213 5.271C5.48 5.271 5 5.753 5 6.385c0 .62.466 1.115 1.185 1.115h.014c.748 0 1.213-.496 1.213-1.115c-.014-.632-.465-1.114-1.199-1.114m-1.086 9.556h2.144V8.38H5.127z" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
                <!-- Facebook -->
                <a href="" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="35" height="35"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M8.695 6.937v1.377H7.687v1.683h1.008V15h2.072V9.997h1.39s.131-.807.194-1.69h-1.576v-1.15c0-.173.226-.404.45-.404h1.128V5h-1.535C8.644 5 8.695 6.685 8.695 6.937" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="flex justify-center md:justify-end items-center w-full mt-4 md:mt-0">
        <p class="text-white text-xs md:text-sm lg:text-base text-center">Copyright © 2024 - Muhamad Ilham Mubarrok</p>
    </div>
</div>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .marquee-wrapper {
        overflow: hidden;
        width: 100%;
    }

    .marquee-content {
        display: flex;
        animation: marquee 16s linear infinite;
    }

    .marquee-content img {
        margin-right: 100px;
        /* Spacing antar gambar */
    }

    /* Responsif untuk mobile dan tablet */
    @media (max-width: 768px) {
        .marquee-content img {
            margin-right: 70px;
            /* Spacing lebih kecil untuk layar kecil */
        }
    }
</style>
