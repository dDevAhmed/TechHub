<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechHub</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/brands.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/assets/fontawesome/webfonts/fa-regular-400.woff2') }}"> --}}

    @vite('resources/css/app.css')
</head>

<body class="font-sans w-full">
    {{-- night mode = #1C1B22; --}}
    <nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6 shadow-lg sticky top-0 z-10">
        <div class="flex items-center text-white">
            <a href="/">
                <img src="{{ asset('/assets/img/logo_landscape.png') }}" alt="TechHub Logo" class="h-10">
            </a>
        </div>
        <div class="text-md">
            <a href="/"
                class="block mt-4 sm:inline-block sm:mt-0  hover:border-b-2 hover:inline hover:py-2 mr-4 text-white font-bold">Home</a>
            <a href="/jobs"
                class="block mt-4 sm:inline-block sm:mt-0  hover:border-b-2 hover:inline hover:py-2 mr-4 text-gray-300">Jobs</a>
            <a href="#"
                class="block mt-4 sm:inline-block sm:mt-0  hover:border-b-2 hover:inline hover:py-2 mr-4 text-gray-300">Resources</a>
            <a href="#"
                class="block mt-4 sm:inline-block sm:mt-0  hover:border-b-2 hover:inline hover:py-2 mr-4 text-gray-300">Community</a>
            <a href="#"
                class="block mt-4 sm:inline-block sm:mt-0  hover:border-b-2 hover:inline hover:py-2 mr-4 text-gray-300">Blog</a>
        </div>
        <div class="text-gray-300 text-md flex gap-4 items-center">
            <a href="#" target="_blank" title="Github"
                class="hover:text-white hover:scale-150 hover:transition(3s)"><i class="fa-brands fa-github"></i></a>
            <a href="#" target="_blank" title="Twiiter"
                class="hover:text-white hover:scale-150 hover:transition(3s)"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" target="_blank" title="Facebook"
                class="hover:text-white hover:scale-150 hover:transition(3s)"><i class="fa-brands fa-facebook"></i></a>
                |
            <a href="#" target="_blank" title="Night Mode"
                class="hover:text-white"><i class="fa-solid fa-moon"></i></a>
        </div>
    </nav>

    @yield('content')

    <footer>

    </footer>



</body>

</html>
