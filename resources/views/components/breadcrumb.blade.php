<div data-aos="fade-up" class="flex flex-col justify-center items-center">
    <!-- Logo -->
    <img src="{{ asset('./images/logo/logo.png') }}" class="h-[60px]" alt="Logo">

    <!-- Judul -->
    <h1 class="font-poppins text-center font-bold text-primary text-[40px]"
        style="background: linear-gradient(177deg, #2300F9 31%, #009FF9 50%, #08FFF0 67%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
        {{ $title }}</h1>

    <!-- Breadcrumb -->
    <div class="flex flex-row space-x-2 font-normal font-dmsans text-[14px] text-gray-500">
        <a href="/" class="hover:text-secondary">{{ $breadcrumbHome }}</a>
        <h2>></h2>
        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-300">{{ $breadcrumbCurrent }}
        </h2>
    </div>
</div>
