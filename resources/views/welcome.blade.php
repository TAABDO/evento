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

        <nav class="bg-white dark:bg-white-700 bg-opacity-65 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-600">EvenTo</span>
                </a>
                @auth
                {{-- User Authenticated --}}
                <div class="flex items-center md:order-2 space-x-3 gap-10 md:space-x-0 rtl:space-x-reverse">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text" placeholder="Search" class="block w-64 py-2 px-4 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:border-gray-600">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 focus:outline-none">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                            <!-- Dropdown Content -->
                        </div>
                    </div>
                    <!-- Mobile Menu Toggle -->
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                @else
                {{-- User Not Authenticated --}}
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <!-- Authentication Links -->
                    <a href="{{ route('login') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
                    <a href="{{ route('register') }}"> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button></a>
                    <!-- Mobile Menu Toggle -->
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                @endauth
                {{-- Mobile Menu --}}
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <!-- Mobile Menu Content -->
                </div>
            </div>
        </nav>

        <section class="bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply" style="background-image: url('{{ asset('img/header.jpg') }}')">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">EvenTo The Most Complete On The Market</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">EvenTo that adapts precisely to your needs and the different formats that your event can have
                    (salon, business meeting, conference, meeting).</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Get started
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Learn more
                    </a>
                </div>
            </div>
        </section>

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

    <div class="relative flex flex-col items-center mb-20 mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
                <img class="h-full w-full object-cover" src="{{ URL::asset('img/161854-edm-festival-wallpaper.jpg')}}" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
            <div class="flex flex-col p-12 md:px-16">
                    <h2 class="text-2xl font-medium uppercase text-indigo-800 lg:text-4xl">Best Events With Evento</h2>
                  <p class="mt-4">
                        Welcome to Evento! We specialize in creating unforgettable experiences tailored to your desires.
                        Whether your planning a dream wedding, charity gala, fashion show, outdoor adventure, wellness retreat,
                        gourmet tasting, or extreme sports event,
                        we have got you covered. Let us turn your vision into reality and make your next event truly exceptional.
                  </p>
                  <div class="">
                        <a href="#" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-indigo-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                            More
                        </a>
                  </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 mt-44">
        <div class="py-4 max-w-screen-lg mx-auto">
            <div class="text-center mb-20">
                <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                    The last<span class="text-indigo-600"> Events</span>
                </h3>
            </div>
            <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($events as $event)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1">
                        <div class="px-6 py-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
                            <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Location:</span> {{ $event->location }}</p>
                            <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Date:</span> {{ $event->date }}</p>
                            <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Available Places:</span> {{ $event->availablePlaces }}</p>
                            <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Category:</span> {{ $event->category->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
         {{--  @endforeach  --}}
        {{--  ========================================= Footer --}}
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
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
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">EvenTo™</a>. All Rights Reserved.</span>
    </div>
</footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    </body>
</html>
