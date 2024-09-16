<nav id="navbar"
    class="md:bg-transparent border-gray-200 drop-shadow-lg sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse md:pl-0 pl-[20px] space-x-[50px]">
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/favicon.png') }}" class="md:h-[50px] h-[30px] w-auto"
                    alt="Flowbite Logo" />
            </div>
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
                class="font-medium font-Anek flex uppercase flex-col md:items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-[80px] rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="font-Anek font-bold text-[17px] block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('/') ? 'text-transparent bg-clip-text bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]' : 'text-white' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/our-client"
                        class="font-Anek font-bold text-[17px] block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ Request::is('our-client') ? 'text-transparent bg-clip-text bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]' : 'text-white' }}">
                        Client
                    </a>
                </li>
                <li>
                    <a href="/about-us"
                        class="font-Anek font-bold text-[17px] block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0     {{ Request::is('about-us') ? 'text-transparent bg-clip-text bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]' : 'text-white' }}">
                        About Me
                    </a>
                </li>
                <li>
                    <a href="/news"
                        class="font-Anek font-bold text-[17px] block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0     {{ Request::is('news*') ? 'text-transparent bg-clip-text bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]' : 'text-white' }}">
                        News
                    </a>
                </li>
                <li>
                    <a href="/contact-us"
                        class="font-Anek font-bold text-[17px] block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0     {{ Request::is('contact-us') ? 'text-transparent bg-clip-text bg-gradient-to-r from-[#2300F9] via-[#009FF9] to-[#08FFF0]' : 'text-white' }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
