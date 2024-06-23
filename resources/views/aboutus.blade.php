@extends('layouts.landingpage')

@section('title', 'PT.ADITYA MANDIRI KONSTRUKSI')

@section('content')
    <div class="flex flex-col justify-center items-center px-[272px]">
        <h3 class="pt-[20px]">ABOUT US</h3>
        <h1 class="py-[30px]">WHO ARE WE ?</h1>
        <div>
            <img src="{{ asset('./assets/images/gambarDetail.png') }}" class="rounded-[15px] h-[550px] w-auto" alt="">
        </div>
        <h1 class="mt-[30px] mb-[20px]">
            ADITYA MANDIRI KONSTRUKSI
        </h1>
        <p class="  text-center">
            Lorem ipsum dolor sit amet consectetur. At vitae neque faucibus pharetra et vulputate malesuada dapibus pretium.
            Viverra imperdiet sed arcu nibh ut ut nec aliquam. Erat malesuada aliquet faucibus elit sed fermentum euismod.
            Diam justo nibh lacus felis felis.
        </p>
        {{-- visi misi --}}
        <div class="flex flex-row my-[30px]">
            <div class="flex flex-col items-center text-center">
                <h1>VISI</h1>
                <P> Lorem ipsum dolor sit amet consectetur. At vitae neque faucibus pharetra et vulputate malesuada dapibus
                    pretium.
                    Viverra imperdiet sed arcu nibh ut ut nec aliquam. Erat malesuada aliquet faucibus elit sed fermentum
                    euismod.
                    Diam justo nibh lacus felis felis.</P>
            </div>
            <div class="flex flex-col items-center text-center">
                <h1>MISI</h1>
                <p> Lorem ipsum dolor sit amet consectetur. At vitae neque faucibus pharetra et vulputate malesuada dapibus
                    pretium.
                    Viverra imperdiet sed arcu nibh ut ut nec aliquam. Erat malesuada aliquet faucibus elit sed fermentum
                    euismod.
                    Diam justo nibh lacus felis felis.</p>
            </div>
        </div>
        {{-- maps --}}
        <div>
            <div class="flex flex-col items-center justify-center">
                {{-- logo --}}
                <div class="flex justify-center">
                    <img src="{{ asset('./assets/images/logo2.png') }}" class="md:h-[40px] h-[30px] w-auto"
                        alt="Flowbite Logo" />
                </div>
                <p class="md:text-[20px] text-[8px] font-semibold">ADITYA MANDIRI KONSTRUKSI</p>
                {{-- maps --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9343164982233!2d106.91056437505087!3d-6.40246449358821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699583f0993975%3A0x25f64d88e74aef3!2sPT.%20Aditya%20Mandiri%20Konstruksi!5e0!3m2!1sid!2sid!4v1718705892330!5m2!1sid!2sid"
                    width="1015" height="650" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-[15px]"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- our Service --}}
        <div class="flex flex-col justify-center items-center">
            <h1>OUR SERVICES</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Urna eget enim scelerisque nibh non mauris et eros. Vel venenatis
                placerat eu scelerisque sit eget felis. Ultricies nunc egestas ultricies et auctor et urna lectus. In
                faucibus at sit eget accumsan. Varius scelerisque rhoncus etiam dictum tempus amet sed. Posuere sodales
                pellentesque pellentesque tellus. Dictumst ipsum nunc proin cras. Gravida cursus lacus faucibus arcu sed
                porttitor. </p>
            <a href="{{ route('home.contactus') }}"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Our Service
                </span>
            </a>
        </div>
    </div>
@endsection
