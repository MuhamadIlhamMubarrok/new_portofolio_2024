<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords"
        content="Muhamad Ilham Mubarrok, Fullstack Developer, Backend Developer, Web Development, Frontend and Backend Solutions, Custom Software Development,
         API Development, Web Applications, User-friendly Interfaces, Technology Solutions, High-quality Web Development, Tech Expertise, Programming, IDN Polytechnic Graduate, politeknik IDN,
          Digital Innovation, Web Developer Portfolio, Backend Specialist, Professional Web Services, IDN Boarding School, Citra Indah, Programmer, " />
    <meta name="author" content="Muhamad Ilham Mubarrok">

    <title>Ilham Web Developer : @yield('title')</title>
    <meta property="og:title" content="Muhamad Ilham Mubarrok - Fullstack Developer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://milhammubarrok.my.id">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="@yield('meta_description')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@milhammubarrok">
    <meta name="twitter:site" content="@milhammubarrok">
    <meta name="twitter:title" content="Muhamad Ilham Mubarrok - Fullstack Developer">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:domain" content="https://milhammubarrok.my.id/">
    <meta name="twitter:image:src" content="@yield('og_image')">
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
    @yield('content')
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
