<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Details</title>
</head>

<body>



    <nav class="bg-white border-gray-200 dark:bg-gray-800 dark:border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">EvenTo</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    {{--  <img class="w-8 h-8 rounded-full" src="{{ Auth::users()->getFirstMediaUrl('image') }}" alt="user photo">  --}}
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-00 dark:divide-gray-00"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-00 dark:hover:bg-gray-00 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('participant.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-00 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-00 dark:text-gray-200 dark:hover:text-white">Favoris</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-00 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
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
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 dark:bg-gray-00 md:dark:bg-gray-00 ">
                    <li>
                        <a href=""
                            class="block py-2 px-3 text-gray-900 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('participant.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-900 md:dark:hover:text-blue-00 dark:hover:bg-gray-00 dark:hover:text-gray-900 md:dark:hover:bg-transparent ">Profile</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-900 md:dark:hover:text-blue-00 dark:hover:bg-gray-00 dark:hover:text-gray-900 md:dark:hover:bg-transparent ">Favoris</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('error2'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
     @endif
    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="flex flex-col md:flex-row items-center md:space-x-12">
            <div class="md:w-1/2">
                <img class="w-full h-96 object-cover rounded-lg shadow-lg" name="picture"
                    src="{{ $event->getFirstMediaUrl('picture') }}" alt="Event Image">
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $event->title }}</h2>
                <p class="text-xl text-gray-800 mb-8">{{ $event->description }}</p>
                <div class="flex items-center mb-8">
                    <div class="mr-8">
                        <span class="font-bold text-lg text-gray-700">Date:</span>
                        <span class="text-lg text-gray-600">{{ $event->date }}</span>
                    </div>
                    <div>
                        <span class="font-bold text-lg text-gray-700">Location:</span>
                        <span class="text-lg text-gray-600">{{ $event->location }}</span>
                    </div>
                </div>
                <div class="mb-8">
                    <span class="font-bold text-lg text-gray-700">Availability:</span>
                    <span class="text-lg text-gray-600">{{ $event->availablePlaces }} Places</span>
                </div>
                <div class="mb-8">
                    <span class="font-bold text-lg text-gray-700">Category:</span>
                    <span class="text-lg text-gray-600">{{ $event->category->name }}</span>
                </div>
                <div class="mb-12">
                    <form action="{{ route('reservation', $event->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Book Now</button>
                    </form>
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
            <div class="flex flex-wrap justify-center -mx-4">
                @foreach ($events as $event)
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-6">
                        <div
                            class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1">
                            <div>
                                <img class="w-full h-60 md:h-auto object-cover rounded-t-lg shadow-lg" name="picture"
                                    src="{{ $event->getFirstMediaUrl('picture') }}" alt="Event Image">
                            </div>
                            <div class="px-6 py-4">
                                <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
                                <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Location:</span>
                                    {{ $event->location }}</p>
                                <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Date:</span>
                                    {{ $event->date }}</p>
                                <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Available
                                        Places:</span> {{ $event->availablePlaces }}</p>
                                <p class="text-gray-700 text-sm mb-2"><span class="font-semibold">Category:</span>
                                    {{ $event->category->name }}</p>
                            </div>
                            <div class="px-6 py-4">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="{{ route('event.show', $event->id) }}">View Details</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--  ==================== footer  --}}


    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                    class="hover:underline">Evento™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
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
    </footer>

    {{--  =============================  --}}
</body>

</html>
