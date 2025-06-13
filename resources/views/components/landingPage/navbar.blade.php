<nav id="navbar" class="bg-white border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700 font-poppins">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('./images/logo/logo.png') }}" class="h-10" alt="Logo" />
            <div class="border h-[25px] hidden md:block"></div>
            <span
                class="text-[15px] hidden md:block font-bold font-dmsans text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-300 to-text-blue-700 dark:text-white uppercase">Portofolio</span>
        </a>

        <!-- Mobile Menu Button -->
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Navbar Menu -->
        <div class="hidden w-full md:block md:w-auto uppercase" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="/"
                        class="font-bold text-[15px] block py-2 px-3 rounded hover:bg-gray-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('/') ? 'text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-300' : 'text-gray-700 dark:text-white' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/our-client"
                        class="font-bold text-[15px] block py-2 px-3 rounded hover:bg-gray-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('our-client') ? 'text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-300' : 'text-gray-700 dark:text-white' }}">
                        Client
                    </a>
                </li>
                <li>
                    <a href="/about-us"
                        class="font-bold text-[15px] block py-2 px-3 rounded hover:bg-gray-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('about-us') ? 'text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-300' : 'text-gray-700 dark:text-white' }}">
                        About Me
                    </a>
                </li>
                <li>
                    <a href="/news"
                        class="font-bold text-[15px] block py-2 px-3 rounded hover:bg-gray-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('news*') ? 'text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-300' : 'text-gray-700 dark:text-white' }}">
                        News
                    </a>
                </li>
                <li class="md:hidden block my-3 ml-1 md:my-0 md:pl-[100px]">
                    <a href="/kontak-form"
                        class="bg-gradient-to-r from-blue-600 to-blue-400 hover:from-blue-700 hover:to-blue-500 text-white font-bold py-2 px-6 rounded-full">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex-shrink-0 hidden md:block">
            <a href="/contact-us"
                class="bg-gradient-to-r from-blue-600 to-blue-400 hover:from-blue-700 hover:to-blue-500 text-white font-bold py-2 px-6 rounded-full">
                Contact Us
            </a>
        </div>
    </div>
</nav>
