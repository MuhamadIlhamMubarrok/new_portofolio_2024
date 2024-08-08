<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page Not Found</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
</head>

<body>
    <div class="h-screen flex items-end justify-center bg-center"
        style="background-image: url('./assets/images/404.png');">
        <a href="/"
            class="hover:text-white w-[300px] text-[#6B5E36] font-inter font-semibold border-[2px] border-[#6B5E36] hover:bg-[#6B5E36] focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] px-2 text-center md:px-4 py-2.5 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            BACK TO HOME
        </a>
    </div>
</body>

</html>
