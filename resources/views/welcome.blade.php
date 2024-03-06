<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <nav class="bg-transparent dark:bg-white-200 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EvenTo</span>
                </a>
                @auth
                    {{--  ======================  --}}
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span
                                    class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                @if (Auth::user()->roles()->first()->name === 'Admin')
                                    <li>
                                        <a href=""
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                    </li>
                                @elseif(Auth::user()->roles()->first()->name === 'participant')
                                    <li>
                                        <a href={{ route('participant') }}
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                            Profile</a>
                                    </li>
                                @elseif(Auth::user()->roles()->first()->name === 'organizateur')
                                    <li>
                                        <a href={{ route('organizateur') }}
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                            Profile</a>
                                    </li>
                                @endif

                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer">
                                            Log Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    {{--  ==================================================  --}}
                @else
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a href="{{ route('login') }}"><button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
                        <a href="{{ route('register') }}"> <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regester</button></a>

                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    {{--  ===================================================  --}}
                @endauth
                {{--  ===================================================  --}}

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    {{--  <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>  --}}
                </div>
            </div>
        </nav>
        <div class="relative">
            <div class="overflow-hidden w-full max-w-full h-100vh md:h-100vh lg:h-100vh ">
                <img src="{{ URL::asset('img/header.jpg') }}" alt="" class="object-cover w-full h-100vh">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white">
                    <h1 class="text-4xl font-bold sm:text-5xl md:text-6xl lg:text-7xl">The Best For The Best</h1>
                    <h2></h2>
                </div>
            </div>
        </div>
{{--  ====================================================  --}}
            <div class="py-10 max-w-screen-lg mx-auto">
                <div class="text-center mb-16">
                    <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                        Events
                    </p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                        The last<span class="text-indigo-600"> Events</span>
                    </h3>
                </div>
            </div>
{{--  ================================================================  --}}

        <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
            <div class="w-full h-64 lg:w-1/2 lg:h-auto">
                <img class="h-full w-full object-cover" src="{{ URL::asset('img/161854-edm-festival-wallpaper.jpg')}}" alt="Winding mountain road">
            </div>

            <div
                class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
                <div class="flex flex-col p-12 md:px-16">
                    <h2 class="text-2xl font-medium uppercase text-indigo-800 lg:text-4xl">Best Events With Evento</h2>
                    <p class="mt-4">
                        Welcome to Evento! We specialize in creating unforgettable experiences tailored to your desires.
                        Whether your planning a dream wedding, charity gala, fashion show, outdoor adventure, wellness retreat,
                        gourmet tasting, or extreme sports event,
                        we have got you covered. Let us turn your vision into reality and make your next event truly exceptional."
                    </p>
                    <div class="mt-8">
                        <a href="#" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-indigo-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                            More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 h-screen mt-28">
            <div class="py-4 max-w-screen-lg mx-auto">
                <div class="text-center mb-16">
                    <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                        Events
                    </p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                        The last<span class="text-indigo-600"> Events</span>
                    </h3>
                </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                 <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
              </a>
        <div class="p-5">
              <a href="#">
                 <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
       </div>
         {{--  @endforeach  --}}
       </div>

        </div>
        {{--  ========================================= Footer --}}



        {{--  <footer class="bg-white rounded-lg shadow dark:bg-gray-900 ">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-10">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EvenTo</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class=" border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">EvenTo™</a>. All Rights Reserved.</span>
            </div>
        </footer>  --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    </body>
</html>
