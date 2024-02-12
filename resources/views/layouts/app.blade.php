<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            {{-- Main Menu Navigation --}}
            <section class="hidden md:block fixed bg-white border-r border-t border-gray-100 top-16 left-0 w-64 h-screen">
                <ul class=" flex flex-col space-y-6 p-6">
                    <li class="border-b border-gray-100 pb-4">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <div class="flex space-x-2 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                  
                                <span>{{ __('Dashboard') }}</span>
                            </div>
                        </x-nav-link>
                    </li>
                    <li class="border-b border-gray-100 pb-4">
                        <x-nav-link :href="route('transfer')" :active="request()->routeIs('transfer')">
                            {{ __('Transfers') }}
                        </x-nav-link>
                    </li>
                    <li class="border-b border-gray-100 pb-4">
                        <x-nav-link >
                            {{ __('FX Transfer Request') }}
                        </x-nav-link>
                    </li>
                </ul>
            </section>

            <!-- Page Content -->
            <main class="md:ml-64 mt-16">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
