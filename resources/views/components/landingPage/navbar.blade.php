<nav class="bg-white border-gray-200 dark:bg-gray-900 drop-shadow-lg sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse md:pl-0 pl-[20px] space-x-[50px]">
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/logo2.png') }}" class="md:h-[40px] h-[30px] w-auto"
                        alt="Flowbite Logo" />
                </div>
                <p class="md:text-[14px] text-[8px] font-semibold">ADITYA MANDIRI KONSTRUKSI</p>
            </div>
            <div class="hidden md:block border-l border-black h-[55px]"></div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto item" id="navbar-default">
            <ul
                class="font-medium flex flex-col md:items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-[80px] rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class=" font-inter block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ Request::is('/') ? 'text-blue-700' : 'text-gray-900' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/about-us"
                        class="font-inter block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ Request::is('about-us') ? 'text-blue-700' : 'text-gray-900' }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="/contact-us"
                        class=" text-white font-inter font-semibold border-blue-700 border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-[16px] text-[14px] px-6 px-5 md:mt-0 py-2.5 = dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 {{ Request::is('contact-us') ? 'bg-blue-800' : 'bg-blue-700' }}"
                        aria-current="page">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
