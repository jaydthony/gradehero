<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="GRADE/SELL YOUR CARD ONLINE">
    <meta property="og:description" content="LOW-COST, TRANSPARENT AND FULL ONLINE GRADING FOR EVERYONE AROUND THE GLOBE">
    <meta property="og:image" content="/Gradehero-imgs/pokemon-card-pictures.jpg">
    <meta property="og:url" content="https://www.gradehero.it">
    <meta property="og:type" content="website">
    <link rel="icon" href="/Gradehero-imgs/favicon.ico" />
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> --}}
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>GRADEHERO</title>
    @vite('resources/css/app.css')
    <style>
        @media (min-width: 1024px) {
            .top-navbar {
                display: inline-flex !important;
            }
        }
    </style>
</head>

<body class="text-center p-4 md:px-10 items-center"
    style=" 
background-image: url(/Gradehero-imgs/carbon-image1.png);
background: linear-gradient(to left, rgba(0, 0, 0, 0.911), rgba(0, 0, 0, 0.911)); 
background: -webkit-linear-gradient(left, black, rgba(0, 0, 0, 0.911));
background-blend-mode: overlay;">

    {{-- Import --}}
    <nav class="flex items-center p-3 flex-wrap">
        <a href="{{ url('/') }}">
            <!-- <img src="/Gradehero-imgs/transparent 1.png" alt="Logo" class=" mr-2" height="32.125" width="150"> -->
            <img src="/Gradehero-imgs/transparent 1.png" alt="Logo" class="mr-7">
        </a>
        <button
            class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
            data-target="#navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
            <div
                class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">
                <a href="/"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>@lang('public.home')</span>
                </a>
                <a href="https://www.gradehero.shop"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>@lang('public.shop')</span>
                </a>
                <a href="about-us"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>@lang('public.who_are_we')</span>
                </a>
                <a href="archives"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>@lang('public.archives')</span>
                </a>
                <a href="faqs"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>@lang('public.faqs')</span>
                </a>
                <a href="{{ url('upload-card') }}"
                    class="md:p-4 block bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md justify-center text-sm font-medium">
                    @lang('public.grade_your_card_now')
                </a>
                <div class="flex justify-around">
                    <a href="locale/it"
                        class="block text-white px-3 py-2 rounded-md justify-center text-sm font-medium">
                        {{-- <img width="50px" src="{{ asset('Gradehero-imgs/lang-it.png') }}" alt="italian"> --}}
                        ITA
                    </a>
                    <a href="locale/en"
                        class="block text-white px-3 py-2 rounded-md justify-center text-sm font-medium">
                        {{-- <img width="50px" src="{{ asset('Gradehero-imgs/lang-en.jpg') }}" alt="english"> --}}
                        ENG
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{-- ! Import --}}
