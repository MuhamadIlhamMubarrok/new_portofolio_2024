@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-[272px]">
        <h1 class="text-[30px] font-bold pt-[60px]">Get In Touch</h1>
        <p class="text-center pt-[20px]">We Made a Design and Interior that serve a purpose and make<br> your room more looks
            good</p>
        {{-- info  --}}
        <div class="flex flex-row justify-center items-center space-x-10 pt-[50px]">
            {{-- foto --}}
            <div class="flex flex-row space-x-[20px]">
                <img src="{{ asset('./assets/images/gambarDetail.png') }}"
                    class="rounded-[15px] h-[300px] w-[200px] object-cover mx-auto" alt="Deskripsi Gambar">
                <img src="{{ asset('./assets/images/gambarDetail.png') }}"
                    class="rounded-[15px] h-[300px] w-[200px] object-cover mx-auto" alt="Deskripsi Gambar">
            </div>
            <div class="border-l border-black h-72"></div>
            {{-- all info abput PT --}}
            <div class="flex flex-col space-y-6">
                {{-- alamat --}}
                <div class="flex flex-row space-x-[20px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path fill="#001485"
                            d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173c-1.101 2.047-2.744 3.74-4.098 5.614c-.619.858-1.244 1.75-1.669 2.727c-.141.325-.263.658-.383.992c-.121.333-.224.673-.34 1.008c-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887c-.284-.874-.581-1.713-1.019-2.525c-.51-.944-1.145-1.817-1.79-2.671zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18q.371.465.737.936l4.984-5.925l-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.4 3.4 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689l-.058-.05zM14.661.436l-3.838 4.563l.027-.01c1.6-.551 3.403.15 4.22 1.626c.176.319.323.683.377 1.045c.068.446.085.773.012 1.22l-.003.016l3.836-4.561A8.38 8.38 0 0 0 14.67.439zM9.466 5.868L14.162.285l-.047-.012A8.3 8.3 0 0 0 11.986 0a8.44 8.44 0 0 0-6.169 2.766l-.016.018z" />
                    </svg>
                    <p class=" font-semibold text-[15px]">Leuwinanggung, Tapos, Depok City,<br> West Java 16456</p>
                </div>
                {{-- phone number --}}
                <div class="flex flex-row space-x-[20px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                        <path fill="#001485"
                            d="M16 14h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8 4h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8 4h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8-12h10v2H16z" />
                        <path fill="#001485"
                            d="M28 6H14V5a2.003 2.003 0 0 0-2-2H8a2.003 2.003 0 0 0-2 2v1H4a2.003 2.003 0 0 0-2 2v18a2.003 2.003 0 0 0 2 2h24a2.003 2.003 0 0 0 2-2V8a2.003 2.003 0 0 0-2-2M8 5h4v17H8Zm20 21H4V8h2v14a2.003 2.003 0 0 0 2 2h4a2.003 2.003 0 0 0 2-2V8h14Z" />
                    </svg>
                    <p class=" font-semibold text-[15px]">0812-1998-0188</p>
                </div>
                {{-- email --}}

                <div class="flex flex-row space-x-[20px] items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path fill="#001485"
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                    </svg>
                    <p class=" font-semibold text-[15px]">Adityamandirikonstruksi@loremipsum.com</p>
                </div>
            </div>
        </div>
        {{-- sosmed --}}
        <div class="pt-[50px] flex flex-col justify-center items-center space-y-5">
            <h1>FOLLOW US ON!</h1>
            <div class="flex flex-row space-x-10">
                {{-- WA --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path fill="#001485"
                        d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                </svg>
                {{-- facebook --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path fill="#001485"
                        d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                </svg>
                {{-- linkedin --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path fill="#001485"
                        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
                </svg>
                {{-- twitter --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 14 14">
                    <path fill="#001485"
                        d="M7 0c3.87 0 7 3.13 7 7s-3.13 7-7 7s-7-3.13-7-7s3.13-7 7-7M5.72 10.69c3.1 0 4.8-2.57 4.8-4.8v-.22c.33-.24.62-.54.84-.88c-.3.13-.63.22-.97.27c.35-.21.62-.54.74-.93c-.33.19-.69.33-1.07.41c-.31-.33-.75-.53-1.23-.53c-.93 0-1.69.76-1.69 1.69c0 .13.01.26.05.38c-1.4-.07-2.65-.74-3.48-1.76c-.14.25-.23.54-.23.85c0 .58.3 1.1.75 1.4c-.28 0-.54-.08-.76-.21v.02c0 .82.58 1.5 1.35 1.66c-.14.04-.29.06-.44.06c-.11 0-.21-.01-.32-.03c.21.67.84 1.16 1.57 1.17c-.58.45-1.31.72-2.1.72c-.14 0-.27 0-.4-.02c.74.48 1.63.76 2.58.76"
                        class="cls-1" />
                </svg>
            </div>
        </div>
    </div>
    <div class="bg-[#F2F2F2] mt-[100px] flex flex-col items-center">
        <h1 class="text-[30px] font-bold pt-[60px]">Message Us</h1>
        <p class="text-center pt-[20px] font-light text-[20px]">Lorem ipsum dolor sit amet consectetur. Ultrices sed
            adipiscing <br>
            tellus tellus
            suspendisse placerat in turpis. Et mollis nulla in<br> purus.</p>
        {{-- form --}}
        <form class="max-w-md mx-auto w-[1000px] py-[50px] flex flex-col justify-center items-center">
            <div class="grid md:grid-cols-2 md:gap-6 w-[1000px]">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                        name</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                        name</label>
                </div>
            </div>
            <div class="relative z-0 w-[1000px] mb-5 group">
                <input type="email" name="floating_email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    address</label>
            </div>
            <div class="relative z-0 w-[1000px] mb-6 group">
                <textarea name="message" id="message" rows="4"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required></textarea>
                <label for="message"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
            </div>
            <button type="submit"
                class="text-white bg-[#001485] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-[1000px]  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send
                Message </button>
        </form>

    </div>
@endsection
