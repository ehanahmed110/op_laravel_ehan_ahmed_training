<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opinion Universe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.NJgGN_yGIWM.L.W.O/am=AAY/d=0/rs=AN8SPfrTSMIvWAFISYN4u74dPJrX0HgUsw/m=el_main_css">
    <script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.cE8Unu_HSqE.O/am=ACA/d=1/exm=el_conf/ed=1/rs=AN8SPfrYfjxpj7fTMNyxDDtorCibXGkrKA/m=el_main"></script>
    <script type="module" crossorigin="" src="/assets/index-oT7-K9R9.js"></script>
    <link rel="stylesheet" crossorigin="" href="/assets/index-C3Y9XlMW.css">

    <!-- ✅ Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: Custom colors (like orange-500) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orange: {
                            500: '#f97316',
                        },
                        yellow: {
                            400: '#facc15',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans overflow-x-hidden">
    <div class='bg-gradient-to-b from-white from-60% to-[#ffbb83f0] to95%'>

    <!-- ✅ Navbar -->
    <nav class="fixed right-0 left-0 top-0 z-50 bg-gradient-to-r from-[#ffbb83f0] from-10% to-white to-20% py-6 shadow-md">
    <div class="container-fluid mx-auto md:px-[80px] px-4 flex items-center justify-between">
        <!-- Logo -->
        <div>
            <a href="#">
                <img src="https://devopinionuniverse.in/assets/opinionuniverse_logo-BUDVpw3E.png" alt="Logo" class="w-52">
            </a>
        </div>

        <!-- Hamburger Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-[#ff5300] focus:outline-none text-3xl">
                ☰
            </button>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-6 items-center font-medium ms-auto">
            <li><a href="#" class="text-black hover:underline">Home</a></li>
            <li><a href="#" class="text-black hover:underline">Advertisers</a></li>
            <li class="relative group">
                <a href="#" class="text-black ">Monetize ▼</a>
                <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md hidden group-hover:block z-50 text-sm text-black">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Publisher</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Offerwall</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">SDK</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">API</a></li>
                </ul>
            </li>          
              <li><a href="#" class="text-black hover:underline">FAQ</a></li>
            <li><a href="#" class="text-black hover:underline">Get Docs</a></li>
        </ul>

        <!-- Login/Signup Buttons -->
        
        @if (Route::has('login'))
        <div class="hidden md:flex items-center space-x-3 ms-4">
        @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="text-[#ff5300] px-8 pt-1 pb-2 border border-[#ff5300] rounded-full shadow-md">Login</a>
                        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-[#ff5300] text-white px-7 pt-1 pb-2 border border-white rounded-full shadow-md">Signup</a>
            @endif
            @endauth
        </div>
        @endif
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 mt-2">
        <ul class="flex flex-col space-y-2 text-black font-medium">
            <li><a href="#" class="block hover:underline">Home</a></li>
            <li><a href="#" class="block hover:underline">Advertisers</a></li>
            <li>
                <details class="bg-white rounded-md shadow">
                    <summary class="px-4 py-2 cursor-pointer">Monetize</summary>
                    <ul class="pl-4 pb-2">
                        <li><a href="#" class="block hover:underline">Publisher</a></li>
                        <li><a href="#" class="block hover:underline">Offerwall</a></li>
                        <li><a href="#" class="block hover:underline">SDK</a></li>
                        <li><a href="#" class="block hover:underline">API</a></li>
                    </ul>
                </details>
            </li>            <li><a href="#" class="block hover:underline">FAQ</a></li>
            <li><a href="{{ route('login') }}" class="block hover:underline">Get Docs</a></li>
            @if (Route::has('login'))
            @auth
                       <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
            @else
            <li><a href="#" class="block text-[#ff5300] border border-[#ff5300] rounded-full px-4 py-1 text-center">Login</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" class="block bg-[#ff5300] text-white rounded-full px-4 py-1 text-center">Signup</a></li>
            @endif
            @endauth
            @endif
        </ul>
    </div>
</nav>