

<div style="position: fixed; top: 0px;  z-index: 10;"  class=" navbar w-full   mb-2 shadow-lg  rounded-box">
    <div class="flex-1 px-2 mx-2">
        <span class="text-primary text-lg font-bold">
                DaisyUI
              </span>
    </div>
    <div data-theme="mytheme" class="flex-none hidden  px-2 mx-2 lg:flex">
        <div class="flex items-stretch">
            <x-nav-link class="btn  btn-ghost btn-sm rounded-btn" href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
            </x-nav-link>

            <x-nav-link class="btn btn-ghost btn-sm rounded-btn" href="{{ route('dashboard') }}" :active="request()->routeIs('product')">

                {{ __('Products') }}
            </x-nav-link>
            <a class="btn btn-ghost  btn-sm rounded-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 mr-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
                Notifications

            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">

                <div dir="rtl" class="flex px-2 space-x-2 relative ">
                    <input type="text" placeholder="Search" class="rounded-box w-full  input input-sm input-primary input-bordered">
                    <button  class="rounded-box absolute top-0 left-0  btn px-2 btn-sm btn-primary fas fa-search"></button>
                </div>
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 mr-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
                Config

            </a>
        </div>
    </div>
    <div class="flex-none">
        <button class="btn btn-square btn-ghost" onclick=" opnesidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>


</div>

<div id="sidebar2" onclick="colsesidebar()" class="w-full h-full lg:w-3/4 xl:w-3/4 md:w-3/4 bg-white" style="opacity: 0.8; z-index:10;background-color: #ccc; display: none; opacity: .8; position: fixed;  top: 70px">

</div>
<div id="sidebar"  style="z-index:10;background-color: #fff; display: none;  position: fixed;  top: 70px" dir="rtl"
     class=" w-full lg:w-1/4 xl:w-1/4 md:w-1/4 absolute hidden top-0 h-full right-0 z-index-10 flex-col  w-full md:flex md:flex-row md:min-h-screen bg-blueGray-50">

    <div class="flex flex-col px-4 flex-shrink-0 w-full ml-auto bg-white shadow-xl text-blueGray-700 md:w-64">
        <div class="flex flex-row items-center justify-between flex-shrink-0 py-4">
            <div onclick="colsesidebar()" class="btn w-2 h-2 p-2 mr-2 rounded-full fas fa-times-circle ">

            </div>
            <a href="/" class="px-8 focus:outline-none">
                <div class="inline-flex items-center">

                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> wickedblocks </h2>
                </div>
            </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>



        <nav   class="flex-grow pb-4 nav-side pl-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <li class="py-4">
                    <div dir="rtl" class="flex px-2  space-x-2 relative ">
                        <input type="text" placeholder="Search" class="rounded-box w-full  input input-sm input-primary input-bordered">
                        <button  class="rounded-box absolute top-0 left-0  btn px-2 btn-sm btn-primary fas fa-search"></button>
                    </div>
                </li>
                <li>
                    <x-nav-link class="btn btn-ghost block btn-sm rounded-btn" href="{{ route('dashboard') }}" :active="request()->routeIs('product')">

                        {{ __('Products') }}
                    </x-nav-link>
                </li>
                <li>
                    <a

                        class="block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-r-4 border-blue-600 rounded-l-lg text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black bg-blueGray-50" href="#">
                        Prices</a>
                </li>
                <li>
                    <a
                        class="block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-r-4 border-white rounded-l-lg text-blueGray-500 hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-50" href="#">Contact</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-r-4 border-white rounded-l-lg text-blueGray-500 hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-50" href="#">Services</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-r-4 border-white rounded-l-lg text-blueGray-500 hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-50" href="#">Services</a>
                </li>
            </ul>
        </nav>
    </div>
</div>


