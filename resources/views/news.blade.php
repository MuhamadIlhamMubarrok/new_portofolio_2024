@extends('layouts.landingpage')

@section('title', 'News')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-[100px]">
        <x-breadcrumb title="ALL ABOUT MY NEWS" breadcrumbHome="Home" breadcrumbCurrent="News" />
        <div data-aos="fade-up" class=" flex flex-col my-6 px-4 md:px-20 lg:px-32 xl:px-50">
            <div
                class="rounded-lg bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] p-6 mb-10 flex flex-col items-center justify-center shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]">
                <p class=" md:text-center text-justify pt-2 text-lg sm:text-xl text-center md:text-[24px] mb-5 font-inter text-gray-300 font-extralight"
                    data-aos="fade-up">
                    Discover the latest updates on my activities, achievements, work experience, and hobbies.
                </p>
                <form class="max-w-lg md:w-[1500px]" method="GET" action="{{ url('news') }}" data-aos="fade-up">
                    <div class="flex">
                        <select id="category" name="category"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200">
                            <option value="" disabled selected>Select Category</option>
                            <option value="work experience">Work Experience</option>
                            <option value="hobby">Hobby</option>
                            <option value="achievment">Achievement</option>
                            <option value="organizational experience">Organizational Experience</option>
                        </select>
                        <div class="relative w-full">
                            <input type="search" id="search-dropdown" name="search"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50"
                                placeholder="Search..." />
                            <button type="submit"
                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] hover:bg-gradient-to-bl w-[40px] rounded-r-lg">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($news as $index => $item)
                    <div class="flex flex-col justify-start items-start bg-gradient-to-br from-[#2300F9]/10 via-[#009FF9]/10 to-[#08FFF0]/10 
            backdrop-blur-md rounded-[24px] pb-[60px] h-auto md:h-[400px] shadow-[0_0_30px_#08FFF033] 
            border border-[#08FFF0]/20 transition-all duration-500 hover:shadow-[0_0_50px_#08FFF088]"
                        data-aos="fade-up" data-aos="fade-up">
                        <div class="relative flex flex-row items-center justify-start w-full">
                            <img class="rounded-t-[24px] h-[175px] w-full object-cover object-center"
                                src="{{ asset('./storage/banner_news/' . $item->banner) }}">
                            <h2
                                class="absolute bottom-2 right-2 text-white font-poppins text-[14px] bg-[#121440] rounded-full w-max px-[13px] py-1">
                                {{ $item->category }}
                            </h2>
                        </div>
                        <div class="px-[20px] flex flex-col gap-y-3 pt-[10px] pb-[20px]">
                            <div class="flex flex-row justify-between gap-x-2 items-center">
                                <h1 class="custom-gradient-text font-poppins font-bold text-[16px] uppercase">
                                    {{ $item->title }}
                                </h1>
                            </div>
                            <p class="font-inter text-[#F9F9F9] font-light">
                                {{ Str::limit(strip_tags($item->deskripsi), 100) }}...</p>
                            <a href="/news/{{ $item->id }}"
                                class="w-[180px] md:w-[100px] px-4 md:px-1 py-2.5 text-[10px] text-white text-center font-poppins font-bold
                                    rounded-full border-2 border-[#009FF9] transition-all duration-300
                                    bg-transparent hover:bg-gradient-to-br hover:from-[#2300F9] hover:via-[#009FF9] hover:to-[#08FFF0]
                                    shadow-[0_0_10px_#009FF944] hover:shadow-[0_0_20px_#08FFF0AA]">
                                LEARN MORE
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                {{ $news->links('pagination::tailwind') }}
            </div>
            <!-- Contact Us Section -->
            <div class="mt-12 text-center mx-4 md:mx-0">
                <div
                    class="bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] p-1 rounded-2xl shadow-[0_0_30px_#08FFF088] hover:shadow-[0_0_50px_#009FF9] transition-all duration-500">

                    <div class="bg-[#0a0f1a] rounded-2xl py-10 px-6 md:px-12">
                        <h2
                            class="text-2xl md:text-3xl font-bold text-white mb-4  font-poppins tracking-wide animate-fade-in">
                            Get in Touch with Us
                        </h2>
                        <p class="text-white/80 text-base md:text-lg max-w-xl mx-auto mb-6 leading-relaxed font-dmsans">
                            Let’s work together! Reach out for personalized support and discover how we can help you achieve
                            your goals.
                        </p>

                        <a href="/contact-us"
                            class="inline-flex items-center gap-3 text-white font-semibold px-6 py-3 rounded-full
                            bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]
                            shadow-[0_0_20px_#009FF9] hover:shadow-[0_0_40px_#08FFF0]
                            transition-all duration-300 hover:scale-105">
                            Contact Us
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-bounce-x" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
