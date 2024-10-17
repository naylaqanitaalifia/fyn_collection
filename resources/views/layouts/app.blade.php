<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'FYN_COLLECTION') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @livewireStyles --}}

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

            <div>
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                
                <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
                
                    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                        <div class="flex items-center justify-center mt-8">
                            <div class="flex items-center">
                                <span class="mx-2 text-2xl font-semibold text-white">FYN_COLLECTION</span>
                            </div>
                        </div>
                
                        <nav class="mt-10">
                            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ request()->routeIs('dashboard.index') ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}" href="{{ route('dashboard') }}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                
                                <span class="mx-3">Dashboard</span>
                            </a>
                
                            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ request()->routeIs('category.index') ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                                href="{{ route('category.index') }}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                    </path>
                                </svg>
                
                                <span class="mx-3">Category</span>
                            </a>
                
                            <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ request()->routeIs('service.index') ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}"
                                href="{{ route('service.index') }}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                
                                <span class="mx-3">Service</span>
                            </a>
                
                            <a class="flex items-center px-6 py-2 mt-4 text-gray-500">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12,9a3.982,3.982,0,0,0-2.96,6.666A7,7,0,0,0,5,22a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1,7,7,0,0,0-4.04-6.334A3.982,3.982,0,0,0,12,9Zm0,2a2,2,0,1,1-2,2A2,2,0,0,1,12,11Zm4.9,10H7.1a5,5,0,0,1,9.8,0ZM12,7a1,1,0,0,1-1-1V2a1,1,0,0,1,2,0V6A1,1,0,0,1,12,7Zm4.6,1.9A1,1,0,0,1,15.89,7.2l2.828-2.829a1,1,0,1,1,1.414,1.414L17.3,8.611A1,1,0,0,1,16.6,8.9ZM8.11,8.611a1,1,0,0,1-1.414,0L3.868,5.782A1,1,0,0,1,5.282,4.368L8.11,7.2A1,1,0,0,1,8.11,8.611ZM23,13a1,1,0,0,1-1,1H18.5a1,1,0,0,1,0-2H22A1,1,0,0,1,23,13ZM1,13a1,1,0,0,1,1-1H5.5a1,1,0,0,1,0,2H2A1,1,0,0,1,1,13Z"></path>
                                    </g>
                                </svg>
                                
                
                                <span class="mx-3">Outfit Inspiration</span>
                            </a>
                            
        
                            <a class="flex items-center px-6 py-2 mt-4 {{ request()->routeIs('gallery.index') ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}" href="{{ route('gallery.index') }}">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                      <path d="M22 13.4375C22 17.2087 22 19.0944 20.8284 20.2659C19.6569 21.4375 17.7712 21.4375 14 21.4375H10C6.22876 21.4375 4.34315 21.4375 3.17157 20.2659C2 19.0944 2 17.2087 2 13.4375C2 9.66626 2 7.78065 3.17157 6.60907C4.34315 5.4375 6.22876 5.4375 10 5.4375H14C17.7712 5.4375 19.6569 5.4375 20.8284 6.60907C21.4921 7.27271 21.7798 8.16545 21.9045 9.50024" stroke-width="1.5" stroke-linecap="round"></path>
                                      <path d="M3.98779 6C4.10022 5.06898 4.33494 4.42559 4.82498 3.93726C5.76553 3 7.27932 3 10.3069 3H13.5181C16.5457 3 18.0595 3 19 3.93726C19.4901 4.42559 19.7248 5.06898 19.8372 6" stroke-width="1.5"></path>
                                      <circle cx="17.5" cy="9.9375" r="1.5" stroke-width="1.5"></circle>
                                      <path d="M2 13.9376L3.75159 12.405C4.66286 11.6077 6.03628 11.6534 6.89249 12.5096L11.1822 16.7993C11.8694 17.4866 12.9512 17.5803 13.7464 17.0214L14.0446 16.8119C15.1888 16.0077 16.7369 16.1009 17.7765 17.0365L21 19.9376" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                  </svg>
                                  
                
                                <span class="mx-3">Gallery</span>
                            </a>

                            <a class="flex items-center px-6 py-2 mt-4 text-gray-100 hover:bg-gray-100 hover:bg-opacity-25 hover:text-gray-100 {{ request()->routeIs('order.index') ? 'text-gray-100 bg-gray-700 bg-opacity-25' : 'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' }}""
                                href="{{ route('order.index') }}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                
                                <span class="mx-3">Order</span>
                            </a>
                        </nav>
                    </div>
                    <div class="flex flex-col flex-1 overflow-hidden">
                        <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                            <div class="flex items-center">
                                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                
                                <div class="relative mx-4 lg:mx-0">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                
                                    <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600" type="text"
                                        placeholder="Search">
                                </div>
                            </div>
                
                            <div class="flex items-center">
                                <div x-data="{ notificationOpen: false }" class="relative">
                                    <button @click="notificationOpen = ! notificationOpen"
                                        class="flex mx-4 text-gray-600 focus:outline-none">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </button>
                
                                    <div x-show="notificationOpen" @click="notificationOpen = false"
                                        class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                
                                    <div x-show="notificationOpen"
                                        class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80"
                                        style="width: 20rem; display: none;">
                                        <a href="#"
                                            class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                                alt="avatar">
                                            <p class="mx-2 text-sm">
                                                <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                                    class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                                src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                                                alt="avatar">
                                            <p class="mx-2 text-sm">
                                                <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                                src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                                alt="avatar">
                                            <p class="mx-2 text-sm">
                                                <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                                    class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                                src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80"
                                                alt="avatar">
                                            <p class="mx-2 text-sm">
                                                <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                            </p>
                                        </a>
                                    </div>
                                </div>
                
                                <div x-data="{ dropdownOpen: false }" class="relative">
                                    <button @click="dropdownOpen = ! dropdownOpen"
                                        class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                        <img class="object-cover w-full h-full"
                                            src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                            alt="Your avatar">
                                    </button>
                
                                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"
                                        style="display: none;"></div>
                
                                    <div x-show="dropdownOpen"
                                        class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                        style="display: none;">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                            <div class="container px-6 py-4 mx-auto">
                                <h3 class="text-3xl font-medium text-gray-700">
                                    @yield('page-title', 'Dashboard')
                                </h3>
                            </div>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}
        </div>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
        {{-- @livewireScripts --}}

    </body>
</html>
