<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Muhamad Ilham Mubarrok is a skilled Fullstack Developer specializing in backend solutions with a passion for designing seamless, user-friendly systems. With experience in both front-end and back-end development, he brings high-quality projects to life, ensuring client satisfaction and driving success through innovative tech solutions." />
    <meta name="keywords"
        content="Muhamad Ilham Mubarrok, Fullstack Developer, Backend Developer, Web Development, Frontend and Backend Solutions, Custom Software Development,
         API Development, Web Applications, User-friendly Interfaces, Technology Solutions, High-quality Web Development, Tech Expertise, Programming, IDN Polytechnic Graduate, politeknik IDN,
          Digital Innovation, Web Developer Portfolio, Backend Specialist, Professional Web Services, IDN Boarding School, Citra Indah, Programmer, " />
    <meta name="author" content="Muhamad Ilham Mubarrok">

    <title>Ilham Web Developer : {{ $news->title }}</title>
    <meta property="og:title" content="Muhamad Ilham Mubarrok - Fullstack Developer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://milhammubarrok.my.id">
    <meta property="og:image" content="https://milhammubarrok.my.id/images/background/banner.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description"
        content="Muhamad Ilham Mubarrok adalah Fullstack Developer yang berfokus pada solusi backend dan pengembangan web yang user-friendly. Dengan pengalaman dalam pengembangan aplikasi web dan API, saya berkomitmen untuk menciptakan proyek-proyek teknologi inovatif yang memenuhi kebutuhan klien. Temukan portofolio saya dan lihat bagaimana saya membantu membangun sistem yang efisien dan berkualitas tinggi.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@milhammubarrok">
    <meta name="twitter:site" content="@milhammubarrok">
    <meta name="twitter:title" content="Muhamad Ilham Mubarrok - Fullstack Developer">
    <meta name="twitter:description"
        content="Lihat portofolio Muhamad Ilham Mubarrok, Fullstack Developer dengan pengalaman dalam pengembangan web dan solusi backend. Jelajahi proyek-proyek saya dan lihat bagaimana saya mengimplementasikan teknologi terkini untuk membangun sistem yang efisien dan user-friendly.">
    <meta name="twitter:domain" content="https://milhammubarrok.my.id/">
    <meta name="twitter:image:src" content="https://milhammubarrok.my.id/images/background/banner.png">
    <meta name="author" content="Muhamad Ilham Mubarrok" />
    <meta http-equiv="cache-control" content="public" />
    <meta name="application-name" content="Muhamad Ilham Mubarrok - Fullstack Developer" />
    <meta name="msapplication-TileColor" content="#2300F9" />
    <meta name="theme-color" content="#2300F9" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicons-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicons-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicons-16x16.png') }}">
    <link rel="manifest" href="images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('./assets/images/favicon.png') }}" type="image.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        /* Container untuk konten hasil CKEditor */
        .cke-editor {
            font-family: 'Inter', sans-serif;
            color: #f1f1f1;
            line-height: 1.8;
            font-weight: 300;
            font-size: 18px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 1.5rem;
            backdrop-filter: blur(4px);
            transition: all 0.3s ease-in-out;
        }

        .cke-editor:hover {
            box-shadow: 0 0 20px rgba(8, 255, 240, 0.3),
                0 0 40px rgba(0, 159, 249, 0.2),
                0 0 60px rgba(35, 0, 249, 0.1);
        }

        .cke-editor h1,
        .cke-editor h2,
        .cke-editor h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            margin: 1.5rem 0 1rem;
            line-height: 1.2;
        }

        .cke-editor h1 {
            font-size: 2.5rem;
            background: linear-gradient(90deg, #08FFF0, #009FF9, #2300F9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cke-editor h2 {
            font-size: 2rem;
            background: linear-gradient(90deg, #08FFF0, #009FF9, #2300F9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cke-editor h3 {
            font-size: 1.5rem;
            color: #ffffff;
        }

        .cke-editor p {
            margin-bottom: 1rem;
            text-align: justify;
        }

        .cke-editor ul,
        .cke-editor ol {
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #f5f5f5;
        }

        .cke-editor ul li,
        .cke-editor ol li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.2rem;
        }

        .cke-editor ul li::before {
            content: "•";
            color: #08FFF0;
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .cke-editor a {
            color: #00d9ff;
            font-weight: 500;
            position: relative;
            text-decoration: none;
        }

        .cke-editor a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background: linear-gradient(to right, #08FFF0, #009FF9, #2300F9);
            transition: width 0.4s ease;
        }

        .cke-editor a:hover::after {
            width: 100%;
        }

        .cke-editor blockquote {
            border-left: 4px solid #08FFF0;
            padding-left: 1rem;
            color: #ccc;
            font-style: italic;
            margin: 1rem 0;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: 8px;
        }

        .cke-editor img {
            max-width: 100%;
            border-radius: 12px;
            margin: 1rem 0;
            box-shadow: 0 5px 15px rgba(8, 255, 240, 0.1);
            transition: transform 0.3s ease;
        }

        .cke-editor img:hover {
            transform: scale(1.03);
        }
    </style>


</head>

<body class="min-h-screen w-full bg-cover bg-center bg-no-repeat object-cover"
    style="background-image: url('{{ asset('./images/background/landingpage3.webp') }}');">
    <div id="preloader"></div>
    <div id="imageModal" class="modal z-[999]">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <!-- Audio Section -->
    <audio id="background-audio" src="{{ asset('./assets/audio/audi1.mp3') }}" autoplay loop muted></audio>
    <audio id="background-audio" autoplay loop muted>
        <source src="{{ asset('./assets/audio/audi1.mp3') }}" type="audio/mpeg">
    </audio>

    @include('components.landingPage.navbar')
    <div class="flex flex-col justify-center items-center py-16 mt-12">

        <!-- Breadcrumb -->
        <x-breadcrumb title="ABOUT ME" breadcrumbHome="Home" breadcrumbCurrent="About Me" />

        <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
            <!-- Title -->
            <h1 class="font-poppins text-[24px] md:text-[32px] font-semibold mb-6 text-center"
                style="background: linear-gradient(174deg, #2300F9 25%, #009FF9 50%, #08FFF0 75%);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
       filter: drop-shadow(0 0 6px rgba(8, 255, 240, 0.3)); 
       transition: all 0.4s ease-in-out;">
                {{ $news->title }}
            </h1>

            <!-- Image -->
            <div
                class="relative group overflow-hidden rounded-xl shadow-2xl transition-all duration-500 hover:scale-[1.01]">
                <img src="{{ asset('./storage/banner_news/' . $news->banner) }}" alt="foto projek"
                    class="w-full h-[700px] object-cover object-top rounded-xl 
           transition-transform duration-500 ease-in-out group-hover:scale-105 group-hover:brightness-110 group-hover:contrast-105"
                    style="border: 4px solid; border-image: linear-gradient(90deg, #2300F9, #009FF9, #08FFF0) 1;">

                <!-- Optional Shine Overlay -->
                <div class="absolute top-0 left-[-75%] w-[200%] h-full z-10 opacity-0 group-hover:opacity-20 transition duration-1000 ease-out transform skew-x-[-20deg] group-hover:translate-x-[75%]"
                    style="background: linear-gradient(90deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0.05) 100%);">
                </div>
            </div>
            <div class=" flex flex-col cke-editor bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md p-6 mt-6 rounded-[24px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]"
                data-aos="fade-up">
                <p class="font-dmsans">
                    {!! $news->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center px-4 md:px-20 lg:px-32 xl:px-60">
        <h1 class="font-poppins font-bold text-[32px] md:text-[44px] custom-gradient-text mb-2" data-aos="fade-up">
            ALL NEWS ABOUT ME
        </h1>
        <p class="md:text-center text-justify text-lg sm:text-xl md:text-[24px] font-inter text-white font-extralight"
            data-aos="fade-up">
            Discover the latest updates on my activities, achievements, work experience, and hobbies.
        </p>

        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20"
            slides-per-view="1"
            breakpoints='{"640": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'>

            @foreach ($other as $index => $item)
                <swiper-slide
                    class="group relative bg-[#ffffff0d] rounded-[24px] overflow-hidden transition-transform duration-500 hover:scale-[1.03] shadow-lg hover:shadow-xl"
                    data-aos="fade-up">

                    <!-- Banner -->
                    <div class="relative w-full h-[175px] overflow-hidden">
                        <img class="w-full h-full object-cover object-center rounded-t-[24px] transition-all duration-500 group-hover:brightness-110 group-hover:scale-105"
                            src="{{ asset('./storage/banner_news/' . $item->banner) }}" alt="banner">

                        <!-- Category badge -->
                        <div
                            class="absolute bottom-3 right-3 bg-[#121440cc] backdrop-blur-md text-white text-xs px-4 py-1 rounded-full font-poppins font-medium shadow-md">
                            {{ $item->category }}
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col gap-y-3 px-5 pt-4 pb-6">
                        <h2 class="custom-gradient-text text-[20px] uppercase font-poppins font-bold truncate">
                            {{ $item->title }}
                        </h2>
                        <p class="font-inter text-[#F9F9F9] text-sm leading-relaxed min-h-[60px]">
                            {{ Str::limit(strip_tags($item->deskripsi), 100) }}...
                        </p>

                        <!-- Button -->
                        <a href="/news/{{ $item->id }}"
                            class="w-[180px] md:w-[100px] px-4 md:px-1 py-2.5 text-[10px] text-white text-center font-poppins font-bold
                                rounded-full border-2 border-[#009FF9] transition-all duration-300
                                bg-transparent hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0]
                                shadow-[0_0_10px_#009FF944] hover:shadow-[0_0_20px_#08FFF0AA]">
                            LEARN MORE
                        </a>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>

    @include('components.landingPage.footer')

    <div class="fixed bottom-4 right-4 z-50 md:bottom-10 md:right-10">
        <a href="https://wa.me/6281389963530" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/images/whatsapps.webp') }}" alt="WhatsApp"
                class="w-12 h-12 md:w-[90px] md:h-[90px] animate-bounce">
        </a>
    </div>

    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- App JS -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const audio = document.getElementById("background-audio");

            // Lanjutkan dari posisi terakhir jika ada
            const savedTime = localStorage.getItem('audioTime');
            if (savedTime) {
                audio.currentTime = parseFloat(savedTime);
            }

            // Autoplay
            audio.play().then(() => {
                console.log("Audio diputar dalam mode muted");

                // Unmute setelah interaksi
                const enableAudio = () => {
                    audio.muted = false;
                    console.log("Audio sekarang unmuted");
                    document.removeEventListener("click", enableAudio);
                    document.removeEventListener("scroll", enableAudio);
                };

                document.addEventListener("click", enableAudio);
                document.addEventListener("scroll", enableAudio);

                // Simpan posisi audio setiap detik
                audio.addEventListener('timeupdate', () => {
                    localStorage.setItem('audioTime', audio.currentTime);
                });

            }).catch(error => {
                console.log("Autoplay gagal, butuh interaksi pengguna:", error);
            });
        });
    </script>
</body>

</html>
