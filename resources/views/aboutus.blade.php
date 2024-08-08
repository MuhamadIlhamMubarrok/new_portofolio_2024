@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-4 md:px-[200px] py-[40px] ">
        <h3 class="md:text-[24px] font-inter" data-aos="fade-up">ABOUT US</h3>
        <h1 class=" font-julius text-[32px] md:text-[64px]" data-aos="fade-up">WHO ARE WE?</h1>
        <div data-aos="fade-up">
            <img src="{{ asset('./assets/images/gambarDetail.png') }}" class="h-auto w-full md:w-[1200px]" alt="">
        </div>
        <h1 data-aos="fade-up" class="mt-[30px] mb-[20px] text-center font-julius text-[32px] md:text-[64px]">ADITYA MANDIRI
            KONSTRUKSI
        </h1>
        <p data-aos="fade-up" class=" text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
            PT. Aditya Mandiri Konstruksi is a company specializing in Design and Build services, with a focus on interior
            and exterior design for retail stores, housing, offices, and residential sectors. Established to meet the
            growing demand for high-quality design and interior solutions, we also offer consultation services for clients
            seeking insights into interior and exterior design. We are committed to completing every project entrusted to us
            with careful planning, execution, and control. By implementing effective and efficient project management
            systems and adhering to health, safety, and environmental standards, we ensure that every job is carried out to
            the highest quality standards.
        </p>
        {{-- Visi Misi --}}
        <div data-aos="fade-up"
            class="flex flex-col md:flex-row gap-y-8 md:gap-y-0 md:gap-x-[155px] my-[50px] md:my-[50px]">
            <div
                class="flex flex-col items-center text-center bg-[#503C2B] p-[20px] text-white rounded-[16px] w-full md:w-[500px]">
                <h1 class="text-[24px] md:text-[36px] font-inter font-semibold">OUR VISION</h1>
                <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-start space-x-4 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-left text-white font-inter font-extralight text-[16px] md:text-[20px]">
                            To become a construction service company that continuously grows by prioritizing professionalism
                            in every project undertaken to ensure customer satisfaction.</span>
                    </li>
                </ul>
            </div>
            <div
                class="flex flex-col items-center text-center bg-[#503C2B] p-[20px] text-white rounded-[16px] w-full md:w-[500px]">
                <h1 class="text-[24px] md:text-[36px] font-inter font-semibold">OUR MISSION</h1>
                <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                    <li class="flex items-start space-x-4 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span
                            class="text-left text-white font-inter font-extralight text-[16px] md:text-[20px]">Prioritizing
                            Human Resource Management within the scope of work.</span>
                    </li>
                    <li class="flex items-start space-x-4 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-left text-white font-inter font-extralight text-[16px] md:text-[20px]">Emphasizing
                            the achievement of work results in accordance with estimated timelines.</span>
                    </li>
                    <li class="flex items-start space-x-4 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-left text-white font-inter font-extralight text-[16px] md:text-[20px]">Meeting
                            customer needs with high-quality and innovative products and services.</span>
                    </li>
                    <li class="flex items-start space-x-4 rtl:space-x-reverse">
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-left text-white font-inter font-extralight text-[16px] md:text-[20px]">Creating
                            strong partnerships with customers and business partners.</span>
                    </li>
                </ul>
            </div>
        </div>
        {{-- Maps --}}
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center">
                {{-- Logo --}}
                <div class="mb-[40px] text-center">
                    <img src="{{ asset('./assets/images/logo2.png') }}" class="md:h-[40px] h-[30px] w-auto mx-auto"
                        alt="Flowbite Logo" />
                    <p class="md:text-[20px] text-[12px] font-inter font-bold">ADITYA MANDIRI KONSTRUKSI</p>
                </div>
                {{-- Maps --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9343164982233!2d106.91056437505087!3d-6.40246449358821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699583f0993975%3A0x25f64d88e74aef3!2sPT.%20Aditya%20Mandiri%20Konstruksi!5e0!3m2!1sid!2sid!4v1718705892330!5m2!1sid!2sid"
                    height="400" md:height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    class="rounded-[15px] w-[400px] md:w-[1160px]" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- Our Service --}}
        <div data-aos="fade-up" class="flex flex-col justify-center items-center my-[40px] md:my-[20px]">
            <h1 class="font-inter font-semibold text-[24px] md:text-[32px] py-[20px]">OUR SERVICES</h1>
            <p class=" text-justify font-inter font-light px-4 md:px-[150px] text-[16px] md:text-[20px]">
                At PT. Aditya Mandiri Construction, we offer a comprehensive range of Design and Build services tailored to
                meet the unique needs of our clients. From concept development to the final execution, our team is dedicated
                to delivering high-quality interior and exterior designs for retail stores, residential properties, offices,
                and more. We also provide expert consultation services to help you make informed decisions about your space.
                Trust us to bring your vision to life with precision, creativity, and a commitment to excellence.
            </p>
            <a href="/contact-us"
                class="hover:text-white w-[150px] md:w-[200px] text-[#6B5E36] font-inter font-semibold border-[2px] border-[#6B5E36] hover:bg-[#6B5E36] focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] md:px-4 py-2.5 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center">
                CONTACT US
            </a>
        </div>
    </div>
@endsection
