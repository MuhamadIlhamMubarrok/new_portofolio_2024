<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
</head>

<body>

    @include('components.landingPage.navbar')
    @yield('content')
    @include('components.landingPage.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>
