<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <nav class="bg-white border-gray-700 dark:bg-gray-700 dark:border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">EvenTo</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ $participants->getFirstMediaUrl('image') }}"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-gray-500 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-00 dark:divide-gray-00"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-200 dark:hover:text-white">Reservation</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-200 dark:hover:text-white"
                                    value="logout ">
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
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 dark:bg-gray-00 md:dark:bg-gray-00 ">
                    <li>
                        <a href="{{ route('welcome') }}"
                            class="block py-2 px-3 text-gray-900 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Publication</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-10 flex flex-col items-center md:flex-row justify-center md:items-end gap-20">
        <!-- Profile Section -->
        <div id="profile" class="w-full lg:w-4/5 mr-0 md:mr-10 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Profile Image -->
                <div class="hidden lg:block rounded-none lg:rounded-lg shadow-2xl mb-8">
                    <img src="{{ $participants->getFirstMediaUrl('image') }}" class="rounded-lg shadow-xl" alt="{{ $participants->name }}">
                </div>

                <div class="flex flex-col justify-evenly gap-10 md:w-2/3 md:pl-8 pt-4 md:pt-0">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">{{ $participants->name }}</h1>
                    </div>
                    <hr>
                    <div class="flex flex-col md:flex-row justify-between mt-2 text-gray-600">
                        <h3 class="mt-2 md:mt-0 md:ml-1">
                            <span class="text-gray-900 text-lg">Address :</span> {{ $participants->address }}
                        </h3>
                        <hr class="md:hidden">
                        <h3 class="mt-2 md:mt-0 md:ml-1">
                            <span class="text-gray-900 text-lg">Phone :</span> {{ $participants->phone }}
                        </h3>
                    </div>
                </div>
                <div class="mt-10">
                    <a href="{{ route('participant.update', $participants->id) }}">
                        <button type="button" class="text-white rounded-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Reservation Section -->
        <div class="container mx-auto px-4 opacity-75">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">My Last Reservation</h2>
            <div class="grid grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="relative overflow-hidden">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" alt="Product">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-300">View Product</button>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                    <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-900 font-bold text-lg">$29.99</span>
                        <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>
