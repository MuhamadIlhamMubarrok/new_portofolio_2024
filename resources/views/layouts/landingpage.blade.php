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

    <title>@yield(section: 'title') &mdash; Portofolio</title>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        @keyframes bounce-x {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(6px);
            }
        }

        .animate-bounce-x {
            animation: bounce-x 1s infinite;
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
    @yield('content')
    @include('components.landingPage.footer')

    {{-- <div class="fixed bottom-4 left-4 z-50 md:bottom-10 md:left-10">
        <!-- Language Button -->
        <button id="language-btn">
            <img src="{{ asset('images/images/world.png') }}" alt="Language"
                class="w-12 h-12 md:w-[90px] md:h-[90px] animate-custom-ping">
        </button>

        <!-- Flag Options -->
        <div id="flags"
            class="hidden flex flex-col items-center space-y-2 mt-2 md:space-y-0 md:flex-row md:space-x-2">
            <!-- Indonesia Flag -->
            <a href="#" class="block order-2 md:order-1">
                <img src="{{ asset('images/images/indonesia.png') }}" alt="Indonesian Flag"
                    class="w-10 h-10 md:w-12 md:h-12">
            </a>
            <!-- UK Flag -->
            <a href="#" class="block order-1 md:order-2">
                <img src="{{ asset('images/images/inggris.png') }}" alt="UK Flag" class="w-10 h-10 md:w-12 md:h-12">
            </a>
        </div>
    </div> --}}

    <div class="fixed bottom-4 right-4 z-50 md:bottom-10 md:right-10">
        <a href="https://wa.me/6281389963530" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('images/images/whatsapps.webp') }}" alt="WhatsApp"
                class="w-12 h-12 md:w-[90px] md:h-[90px] animate-bounce">
        </a>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>


    <!-- App JS -->
    <script src="./js/showimage.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const audio = document.getElementById("background-audio");

            // Paksa audio play dalam mode mute
            audio.play().then(() => {
                console.log("Audio diputar dalam mode muted");

                // Setelah interaksi pertama, unmute
                const enableAudio = () => {
                    audio.muted = false;
                    console.log("Audio sekarang unmuted");
                    document.removeEventListener("click", enableAudio);
                    document.removeEventListener("scroll", enableAudio);
                };

                document.addEventListener("click", enableAudio);
                document.addEventListener("scroll", enableAudio);
            }).catch(error => {
                console.log("Autoplay gagal, butuh interaksi pengguna:", error);
            });
        });
    </script>
</body>

</html>
