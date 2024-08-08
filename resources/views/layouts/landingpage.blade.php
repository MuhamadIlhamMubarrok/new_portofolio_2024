<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
</head>

<body>

    @include('components.landingPage.navbar')
    @yield('content')
    @include('components.landingPage.footer')

    <div class="fixed bottom-4 right-4 z-50 md:bottom-10 md:right-10">
        <a href="https://wa.me/6281219980188" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp"
                class="w-12 h-12 md:w-16 md:h-16 animate-bounce">
        </a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>
