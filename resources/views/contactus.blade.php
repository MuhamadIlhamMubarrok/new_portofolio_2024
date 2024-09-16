@extends('layouts.landingpage')

@section('title', 'PORTOFOLIO - ILHAM')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 mt-[100px]"
        data-aos="fade-up">
        <h1 class="font-Anek font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl pt-10"
            style="background: linear-gradient(178deg, #2300F9 51%, #009FF9 67%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
            GET IN TOUCH
        </h1>
        <p class="text-center text-white pt-2 text-lg sm:text-xl md:text-[24px] md:px-[250px] font-inter font-extralight">We
            Made a
            Design
            and
            Interior that serve a purpose and make your room more looks good</p>

        {{-- info --}}
        <div
            class="flex text-white flex-col md:flex-row justify-center items-center space-y-6 md:space-x-10 md:space-y-0 pt-12">
            {{-- foto --}}
            <div class="flex flex-shrink-0">
                <img src="{{ asset('./assets/images/contact1.png') }}" class="w-full md:w-[270px] h-auto object-cover"
                    alt="Deskripsi Gambar">
            </div>
            <div class="border-t md:border-l border-white md:h-[265px] w-full md:w-auto"></div>
            {{-- all info about PT --}}
            <div class="flex flex-col space-y-6">
                {{-- alamat --}}
                <div class="flex flex-row space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] md:w-[40px] h-[40px]"
                        viewBox="0 0 24 24">
                        <path fill="#009FF9"
                            d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173c-1.101 2.047-2.744 3.74-4.098 5.614c-.619.858-1.244 1.75-1.669 2.727c-.141.325-.263.658-.383.992c-.121.333-.224.673-.34 1.008c-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887c-.284-.874-.581-1.713-1.019-2.525c-.51-.944-1.145-1.817-1.79-2.671zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18q.371.465.737.936l4.984-5.925l-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.4 3.4 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689l-.058-.05zM14.661.436l-3.838 4.563l.027-.01c1.6-.551 3.403.15 4.22 1.626c.176.319.323.683.377 1.045c.068.446.085.773.012 1.22l-.003.016l3.836-4.561A8.38 8.38 0 0 0 14.67.439zM9.466 5.868L14.162.285l-.047-.012A8.3 8.3 0 0 0 11.986 0a8.44 8.44 0 0 0-6.169 2.766l-.016.018z" />
                    </svg>
                    <p class="md:text-[20px] text-sm font-semibold font-inter">Panunggangan, Pinang, Kota Tangerang</p>
                </div>
                {{-- phone number --}}
                <div class="flex flex-row space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] md:w-[40px] h-[40px]"
                        viewBox="0 0 32 32">
                        <path fill="#009FF9"
                            d="M16 14h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8 4h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8 4h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-8-12h10v2H16z" />
                        <path fill="#009FF9"
                            d="M28 6H14V5a2.003 2.003 0 0 0-2-2H8a2.003 2.003 0 0 0-2 2v1H4a2.003 2.003 0 0 0-2 2v18a2.003 2.003 0 0 0 2 2h24a2.003 2.003 0 0 0 2-2V8a2.003 2.003 0 0 0-2-2M8 5h4v17H8Zm20 21H4V8h2v14a2.003 2.003 0 0 0 2 2h4a2.003 2.003 0 0 0 2-2V8h14Z" />
                    </svg>
                    <p class="md:text-[20px] text-sm font-semibold font-inter">0813-8996-3530</p>
                </div>
                {{-- email --}}
                <div class="flex flex-row space-x-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] md:w-[40px] h-[40px]"
                        viewBox="0 0 24 24">
                        <path fill="#009FF9"
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                    </svg>
                    <p class="md:text-[20px] text-sm font-semibold font-inter">milhammubarrok@gmail.com</p>
                </div>
            </div>
        </div>
        {{-- sosmed --}}
        <div class="pt-[50px] flex flex-col font-inter font-semibold justify-center items-center space-y-5">
            <h1 class="text-white">FOLLOW US ON!</h1>
            <div class="flex flex-row space-x-10">
                {{-- IG --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="47" height="47"
                        viewBox="0 0 24 24">
                        <path fill="#009FF9"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                </a>
                {{-- TWITTER --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="47" height="47"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M15 6.947c-.368.16-.763.27-1.178.318c.424-.25.748-.646.902-1.117a4.2 4.2 0 0 1-1.304.49A2.06 2.06 0 0 0 11.923 6c-1.133 0-2.051.905-2.051 2.02q0 .237.053.46a5.85 5.85 0 0 1-4.228-2.11a2 2 0 0 0-.278 1.015c0 .7.363 1.32.913 1.681a2.1 2.1 0 0 1-.93-.253v.025a2.03 2.03 0 0 0 1.646 1.98a2.1 2.1 0 0 1-.927.034a2.05 2.05 0 0 0 1.916 1.403a4.16 4.16 0 0 1-2.548.864q-.248 0-.489-.028A5.86 5.86 0 0 0 8.144 14c3.774 0 5.837-3.078 5.837-5.748l-.007-.262A4.1 4.1 0 0 0 15 6.947" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
                {{-- LINKEDIN --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="47" height="47"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M15 11.13v3.697h-2.143v-3.45c0-.866-.31-1.457-1.086-1.457c-.592 0-.945.398-1.1.784c-.056.138-.071.33-.071.522v3.601H8.456s.029-5.842 0-6.447H10.6v.913l-.014.021h.014v-.02c.285-.44.793-1.066 1.932-1.066c1.41 0 2.468.922 2.468 2.902M6.213 5.271C5.48 5.271 5 5.753 5 6.385c0 .62.466 1.115 1.185 1.115h.014c.748 0 1.213-.496 1.213-1.115c-.014-.632-.465-1.114-1.199-1.114m-1.086 9.556h2.144V8.38H5.127z" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
                {{-- FACEBOOK --}}
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse" width="47" height="47"
                        viewBox="-2 -2 24 24">
                        <g fill="#009FF9">
                            <path
                                d="M8.695 6.937v1.377H7.687v1.683h1.008V15h2.072V9.997h1.39s.131-.807.194-1.69h-1.576v-1.15c0-.173.226-.404.45-.404h1.128V5h-1.535C8.644 5 8.695 6.685 8.695 6.937" />
                            <path
                                d="M4 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0-2h12a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-[#F2F2F2]/15 mt-24 flex flex-col w-full items-center px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16"
        data-aos="fade-up">
        <h1 class="font-Anek font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl pt-10"
            style="background: linear-gradient(178deg, #2300F9 55%, #009FF9 67%, #08FFF0 77%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
            MESSAGE US
        </h1>
        <p
            class="md:text-center text-justify pt-2 text-lg sm:text-xl md:text-[24px] md:px-[250px] font-inter text-white font-extralight">
            We’d love to hear from you! Whether you have questions, need more information, or are ready to start your next
            project, feel free to reach out. Fill out the form below, and we’ll get back to you as soon as possible.
        </p>
        {{-- form --}}
        <form id="contactForm" class="md:px-[260px] mx-auto w-full py-12 flex flex-col justify-center items-center"
            method="POST" action="{{ route('submitContactForm') }}" onsubmit="sendWhatsAppMessage(event)">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="floating_nama"
                        class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_nama"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nama
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama_instansi" id="floating_nama_instansi"
                        class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_nama_instansi"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nama Instansi
                    </label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <select name="status" id="status"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required>
                    <option value="" disabled selected>Select your status</option>
                    <option value="mahasiswa" class="text-gray-500">Mahasiswa</option>
                    <option value="pekerja" class="text-gray-500">Pekerja</option>
                    <option value="perusahaan" class="text-gray-500">Perusahaan</option>
                </select>
                <label for="status"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Status
                </label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <textarea name="deskripsi" id="deskripsi" rows="4"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required></textarea>
                <label for="deskripsi"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Deskripsi
                </label>
            </div>
            <button type="submit" id="submit-button"
                class="flex flex-row justify-center items-center gap-x-4 text-white w-[180px] md:w-[240px] font-Anek bg-gradient-to-br from-[#2300F9] via-[#009FF9] to-[#08FFF0] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-bold rounded-full txt-[18px] px-4 md:px-5 py-2.5 text-center me-2 mb-4 md:mb-2">
                Send Message
            </button>
        </form>
        <script>
            function disableSubmitButton() {
                document.getElementById('submit-button').disabled = true;
            }
        </script>

    </div>

@endsection
