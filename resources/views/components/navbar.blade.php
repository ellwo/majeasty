@props(['isfrombase'=>false])
<div class="sticky top-0 z-20 transition-transform duration-500" x-data="{ open: false }"
:class="{
    '-translate-y-full': scrollingDown,
    'translate-y-0': scrollingUp,
}">
<nav aria-label="secondary"
    class="flex items-center justify-between px-4 py-4 transition-transform duration-500 bg-white navbar sm:px-6 dark:bg-dark-eval-1"
    >

    <div class="px-2 mx-2 navbar-start">
    <span class="text-lg font-bold">
        <img class="h-12 dark:hidden" src="{{config("mysetting.logo")}}">
        <img class="h-12 hidden dark:block" src="{{asset('myimages/bg-images/migestlogoLight.svg')}}">
    </span>
    </div>

    <div  class="hidden px-2 mx-2 navbar-center md:flex">
        <div class="flex items-stretch">
            <a href="{{url('Home')}}" class="btn btn-ghost btn-sm rounded-btn">
                {{__('الرئيسية')}}
                <x-heroicon-s-home class="flex-1 w-4 h-4 m-1"/>
            </a>


    <a href="{{route('product',['deptid'=>'all'])}}" class="btn btn-ghost btn-sm rounded-btn">
        {{__('المعرض ')}}
        <x-bi-grid class="w-4 h-4 m-1 "/>
    </a>

            <a href="{{url('contact')}}" class="btn btn-ghost btn-sm rounded-btn">
                {{__('اتصل بنا')}}
                <x-bi-inbox class="w-4 h-4 m-1 "/>
            </a>
        </div>
    </div>

    <div class="navbar-end ">
        <button class="btn btn-square btn-ghost" type="button"  iconOnly variant="secondary" srText="Toggle dark mode"
                @click="toggleTheme">
            <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
            <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />


        </button>


        @if($isfrombase==true)
        <x-button class="btn btn-square btn-ghost md:hidden"  iconOnly variant="secondary" srText="Open main menu"
               @click="open=!open">

            <x-heroicon-o-menu aria-hidden="true" class="w-6 h-6" />


        </x-button>

        @else

            <x-button type="button" iconOnly variant="secondary" srText="Open main menu"
                      @click="isSidebarOpen = !isSidebarOpen">
                <x-heroicon-o-menu x-show="!isSidebarOpen" aria-hidden="true" class="w-6 h-6" />
                <x-heroicon-o-x x-show="isSidebarOpen" aria-hidden="true" class="w-6 h-6" />
            </x-button>

            @endif

        @auth
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center p-2 text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none focus:ring focus:ring-purple-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1 dark:text-gray-400 dark:hover:text-gray-200">
                        <div>

                            {{ Auth::user()->name }}
                        </div>





                        <div class="ml-1">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->


                    <x-dropdown-link href="{{route('myorders')}}">
                        {{__('طلباتي')}}
                        <x-bi-cart class="w-4 h-4 text-yellow-400"/>
                    </x-dropdown-link>
                    <x-dropdown-link href="{{route('dashboard')}}">
                        {{__('حسابي ')}}
                        <x-bi-cart class="w-4 h-4 text-yellow-400"/>
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>


                </x-slot>
            </x-dropdown>

            @else




            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center p-2 text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none focus:ring focus:ring-purple-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1 dark:text-gray-400 dark:hover:text-gray-200">
                        <div>

                            <x-heroicon-s-user class="w-6 h-6 text-blue-600"/>
                        </div>





                        <div class="ml-1">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('login')" >
                        {{ __('Login') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('register')" >
                        {{ __('Register') }}
                    </x-dropdown-link>

                </x-slot>
            </x-dropdown>

        @endauth





    </div>

</nav>

<div x-show="open" class="flex flex-col items-stretch space-y-4 text-right bg-white dark:bg-dark-bg dark:text-white">
    <a href="{{url('Home')}}" class="border btn btn-ghost btn-sm rounded-btn">
        {{__('الرئيسية')}}
        <x-heroicon-s-home class="w-4 h-4 m-2"/>
    </a>
    <hr>
    <a href="{{route('product',['deptid'=>'all'])}}" class="mt-2 border btn btn-ghost btn-sm rounded-btn">
        {{__('المعرض ')}}
        <x-bi-grid class="w-4 h-4 m-1 "/>
    </a>

      {{-- <div class="px-2 cursor-pointer dropdown btn btn-ghost btn-sm dropdown-hover">
            <div tabindex="0" class="">
                {{__('الاقسام')}}
            </div>
            <ul tabindex="0" class="p-2 bg-white shadow menu dropdown-content dark:bg-dark-eval-1 dark:text-white rounded-box w-52">

                <li> <a class="hover:text-red-800" href="{{url('product/all')}}"> all
                    </a>

                @foreach($depts as $dept)



                        <li> <a class="hover:text-red-800" href="{{url('product/'.$dept->id)}}">
                            {{$dept->name}}
                            </a>

                        </li>

                @endforeach

            </ul>
        </div>
 --}}

 <hr>
    <a href="{{url('contact')}}" class="border btn btn-ghost btn-sm rounded-btn">
        {{__('اتصل بنا')}}
        <x-bi-inbox class="w-4 h-4"/>
    </a>
</div>
</div>











<!-- Mobile bottom bar -->
<div class="fixed inset-x-0 bottom-0 z-30 flex items-center justify-between px-4 py-4 transition-transform duration-500 bg-white sm:px-6 md:hidden dark:bg-dark-eval-1"
    :class="{
        'translate-y-full': scrollingDown,
        'translate-y-0': scrollingUp,
    }">
    <x-button href="{{route('wishlist')}}" type="button" iconOnly variant="secondary" srText="Search">
        <x-bi-cart-fill aria-hidden="true" class="w-6 h-6 text-yellow-400" />
    </x-button>

    <a href="{{ route('dashboard') }}">
        <x-application-logo aria-hidden="true" class="w-10 h-10" />
        <span  class="sr-only">K UI</span>
    </a>



    @if($isfrombase==true)
    <x-button type="button" iconOnly variant="secondary" srText="Open main menu"
              onclick="document.getElementById('drawershowbtn').click();" x-spread="drawer">

        <x-heroicon-o-menu aria-hidden="true" class="w-6 h-6" />
    </x-button>

    @else
        <x-button type="button" iconOnly variant="secondary" srText="Open main menu"
                  @click="isSidebarOpen = !isSidebarOpen">
            <x-heroicon-o-menu x-show="!isSidebarOpen" aria-hidden="true" class="w-6 h-6" />
            <x-heroicon-o-x x-show="isSidebarOpen" aria-hidden="true" class="w-6 h-6" />
        </x-button>
    @endif
</div>
