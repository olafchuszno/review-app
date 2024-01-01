<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Homepage</title>

</head>

<body class="text-raisinBlack bg-lightGrey">
    <nav class="justify-between bg-lightGrey fixed top-0 left-0 right-0">
        <div class="mx-10 px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                    Icon when menu is closed.

                    Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                    Icon when menu is open.

                    Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:justify-start">
                    <div class="flex items-center">
                        <svg class="aspect-auto" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" width="70px" height="70px" viewBox="0 0 100 100" fill="#3f51b5">
                            <!-- Curved Lines -->


                            <!-- Circles -->
                            <circle cx="30" cy="60" r="5" fill="#f97316" />
                            <circle cx="70" cy="60" r="5" fill="#f97316" />
                        </svg>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4 items-center">

                            <!-- Navbar Left links -->
                            <a href="/posts" class="{{ request()->is('posts') ? 'bg-secondaryIndigo ' : 'hover:bg-secondaryIndigo' }} active:bg-neutralStone active:text-primaryIndigo active:ring ring-neutralStone transition rounded-full px-4 py-2 text-lg font-semibold">Posts</a>
                            <a href="/" class="{{ request()->is('/') ? 'bg-secondaryIndigo ' : 'hover:bg-secondaryIndigo' }} active:bg-neutralStone active:text-primaryIndigo active:ring ring-neutralStone transition rounded-full px-4 py-2 text-lg font-semibold">Airport Search</a>
                            <a href="#" class="{{ request()->is('journey_search') ? 'bg-secondaryIndigo ' : 'hover:bg-secondaryIndigo' }} active:bg-neutralStone active:text-primaryIndigo active:ring ring-neutralStone transition rounded-full px-4 py-2 text-lg font-semibold">Journey Search</a>
                            <a href="/about" class="{{ request()->is('about') ? 'bg-secondaryIndigo ' : 'hover:bg-secondaryIndigo' }} active:bg-neutralStone active:text-primaryIndigo active:ring ring-neutralStone transition rounded-full px-4 py-2 text-lg font-semibold">About</a>

                        </div>
                    </div>
                </div>
                @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" id="notification-bell-button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span id="notification-bell" class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button id="dropdown-menu-button" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-expanded="false" aria-haspopup="true">
                                <span id="trigger" class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="users avatar">
                            </button>
                        </div>

                        <!--
                        Dropdown menu, show/hide based on menu state.

                        Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                        <div id="menu-dropdown" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <form action="/session" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</button>
                            </form>

                        </div>
                    </div>
                </div>
                @endauth
                @guest
                <div class="mx-10">
                    <a href="/register" class="{{ request()->is('register') ? 'bg-secondaryIndigo' : 'hover:bg-secondaryIndigo' }} rounded-full pl-4 pr-3 py-2 text-xl font-bold">
                        Register
                    </a>
                    <a href="/login" class="{{ request()->is('login') ? 'bg-secondaryIndigo' : 'hover:bg-secondaryIndigo' }} rounded-full px-4 py-2 text-xl font-bold ml-2">
                        Log in
                    </a>
                </div>
                @endguest
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>


    {{ $slot }}

    @if (session()->has('success'))
    <div class="fixed bottom-3 right-3 bg-primaryIndigo p-3 text-md font-bold rounded-2xl">
        {{ session('success') }}
    </div>
    @elseif (session()->has('failure'))
    <div class="fixed bottom-3 right-3 bg-red-500 p-3 text-md font-bold rounded-2xl">
        {{ session('failure') }}
    </div>
    @endif

</body>

<script src="{{asset('js/layout.js')}}"></script>

</html>