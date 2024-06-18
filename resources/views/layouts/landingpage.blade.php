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
</body>

</html>
