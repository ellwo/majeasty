<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="حسابي" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">

            <x-heroicon-s-user class="w-6 h-6  text-blue-600"/>
        </x-slot>

        @auth

        <x-sidebar.sublink title="تعديل حسابي" href="{{ route('myprofile') }}"
            :active="request()->routeIs('myprofile')" />


        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <x-sidebar.sublink title="تسجيل خروج"
                           :active="request()->routeIs('buttons.text-icon')"
                           onclick="
                                        this.closest('form').submit();">
        </x-sidebar.sublink>
        </form>

    @else
        <x-sidebar.sublink title="تسجيل دخول" href="{{ route('login') }}"
                           :active="request()->routeIs('myprofile')" />

        <x-sidebar.sublink title="انشاء حساب" href="{{ route('register') }}"
                           :active="request()->routeIs('myprofile')" />


    @endauth
    </x-sidebar.dropdown>

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Dummy Links</div>

    @php
        $links = array_fill(0, 20, '');
    @endphp




    @role('admin')



    <x-sidebar.link title="{{__('ادارة الطلبات')}}" href="{{route('myorders')}}" >

        <x-slot name="icon">
            <x-bi-cart class="h-6 w-6 cursor-pointer text-yellow-400 "/>
        </x-slot>
    </x-sidebar.link>



@else
    <x-sidebar.link title="{{__('المفضلة')}}" href="{{route('wishlist')}}" :active="Str::startsWith(request()->route()->uri(), 'wishlist')" >

        <x-slot name="icon">
            <x-heroicon-s-heart class="h-6 w-6 cursor-pointer text-red-800"/>
        </x-slot>
    </x-sidebar.link>


    <x-sidebar.link title="{{__('طلباتي')}}" href="{{route('myorders')}}" >

        <x-slot name="icon">
            <x-bi-cart class="h-6 w-6 cursor-pointer text-yellow-400 "/>
        </x-slot>
    </x-sidebar.link>


    @endrole



</x-perfect-scrollbar>
