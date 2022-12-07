<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @isset($meta)
        {{$meta}}
    @endisset




    <title>{{ config('mysetting.site_name', 'K UI') }}</title>

    <link rel="icon" href="{{ config('mysetting.site_header_logo')}}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
        [x-cloakD]{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('GoStartup - Tailwind CSS Template_files/animate.css') }}">
    <script src="{{ asset('GoStartup - Tailwind CSS Template_files/wow.min.js.download') }}"></script>
     @livewireStyles



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body  class="font-sans antialiased" >
<div x-data="mainState" :class="{ dark: isDarkMode }" @resize.window="handleWindowResize" x-cloak>
    <div class="min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-bg dark:text-gray-200">
        <!-- Sidebar -->

        <!-- Page Wrapper -->

        <x-auth-session-status :status="session('status')"/>
        <div class="flex flex-col min-h-screen w-full"
             :class="{
                    'lg:ml-0': isSidebarOpen,
                    'md:ml-0': !isSidebarOpen
                }"
             style="transition-property: margin; transition-duration: 150ms;"
        >
            <!-- Navbar -->
            <x-navbar isfrombase="true" />

            <!-- Page Heading -->
            <header class="hero " >

                @isset($header)
                    {{$header}}
                @endisset
            </header>


            <!-- Page Content
             <div class=" grid xl:grid-cols-1 mx-auto  md:grid-cols-1 grid-cols-1 gap-2 ">
                            <div class="flex bg-gray-200  rounded-lg p-4 m-2">
                <div class="flex flex-col items-start ml-4">
                    <h4 class="text-xl font-semibold">Heading</h4>
                    <p class="text-sm">Some text about the thing that goes over a few lines.</p>
                    <a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="#">Click Here</a>
                </div>
            </div>
        </div>-->
            <main class="px-4 sm:px-6 flex-1">




                @isset($slot)
                {{$slot}}
                @endisset
            </main>

            <!-- Page Footer -->
            <x-footer />
        </div>
    </div>
</div>
@livewireScripts

<script src="{{ asset('js/wow.min.js') }}" defer></script>
<script>
var wow = new WOW({
    boxClass: 'wow', // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0, // distance to the element when triggering the animation (default is 0)
    mobile: true, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null, // optional scroll container selector, otherwise use window,
    resetAnimation: true, // reset animation on end (default is true)
});
wow.init();

</script>
</body>

</html>
