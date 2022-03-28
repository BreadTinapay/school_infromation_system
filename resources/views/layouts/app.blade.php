<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TS University</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css"
        />
    </head>
    <body class="bg-gray-100">
        <div class="py-4 bg-white">
            <nav class="px-2 border-gray-200">
                <div
                    class="container flex flex-wrap justify-between items-center mx-auto"
                >
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img
                            src="https://flowbite.com/docs/images/logo.svg"
                            class="mr-3 h-6 sm:h-10"
                            alt="Flowbite Logo"
                        />
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap"
                            >TS University</span
                        >
                    </a>
                    <button
                        data-collapse-toggle="mobile-menu"
                        type="button"
                        class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <svg
                            class="hidden w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <div
                        class="hidden w-full md:block md:w-auto"
                        id="mobile-menu"
                    >
                        <ul
                            class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                        >
                        @auth
                            <li>
                                <a
                                    href="{{ route('dashboard') }}"
                                    class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                    aria-current="page"
                                    >Dashboard</a
                                >
                            </li>
                        @endauth

                        @guest
                            <li>
                                <a
                                    href="{{ route('home') }}"
                                    class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                    aria-current="page"
                                    >Home</a
                                >
                            </li>
                        @endguest
                            <li>
                                <button
                                    id="dropdownNavbarLink"
                                    data-dropdown-toggle="dropdownNavbar"
                                    class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto"
                                >
                                    Colleges
                                    <svg
                                        class="ml-1 w-4 h-4"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </button>

                                <div
                                    id="dropdownNavbar"
                                    class="hidden z-10 w-96 bg-white rounded divide-y divide-gray-100 shadow"
                                    data-popper-reference-hidden=""
                                    data-popper-escaped=""
                                    data-popper-placement="top"
                                    style="
                                        position: absolute;
                                        inset: auto auto 0px 0px;
                                        margin: 0px;
                                        transform: translate(972px, 2169px);
                                    "
                                >
                                    <ul
                                        class="py-1 text-sm text-gray-700"
                                        aria-labelledby="dropdownLargeButton"
                                    >
                                        <li>
                                            <a
                                                href="{{ route('cas') }}"
                                                class="block py-2 px-4 hover:bg-indigo-600 hover:text-white"
                                                >College of Arts and Sciences</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('cofed') }}"
                                                class="block py-2 px-4 hover:bg-indigo-600 hover:text-white"
                                                >College of Education</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="{{ route('cme') }}"
                                                class="block py-2 px-4 hover:bg-indigo-600 hover:text-white"
                                                >College of Management and
                                                Entrepreneurship</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @guest
                            
                            <li>
                                <a
                                    href="{{ route('login') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                    >Sign in</a
                                >
                            </li>
                            @endguest
                            <li>
                                <a
                                    href="{{ route('apply') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                    >Apply</a
                                >
                            </li>
                            

                            @auth
                            <li>
                                <a
                                    href="{{ route('register') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                    >Register an admin</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ route('logout') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0  md:hover:text-blue-700 md:p-0"
                                    >Log out</a
                                >
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    </body>
</html>
