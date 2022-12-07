<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="لوحة التحكم" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="حسابي" :active="Str::startsWith(request()->route()->uri(), 'profile')">
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




{{--
    <x-sidebar.link title="{{__('ادارة الطلبات')}}" href="{{route('admin.orders')}}"  >

        <x-slot name="icon">
            <x-heroicon-o-shopping-cart class="h-6 w-6 cursor-pointer text-yellow-400 "/>
        </x-slot>
    </x-sidebar.link> --}}


    <x-sidebar.link title="{{__('ادارة الاقسام')}}" href="{{route('departments.show')}}" :isActive="request()->routeIs('departments.show')" >
        <x-slot name="icon">
            <x-heroicon-o-book-open class="h-6 w-6 cursor-pointer  "/>
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="{{__('ادارة الفئات')}}" href="{{route('parts')}}" :isActive="request()->routeIs('parts')||request()->routeIs('part/any')" >
        <x-slot name="icon">
            <x-heroicon-o-book-open class="h-6 w-6 cursor-pointer  "/>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="{{__('ادارة الماركات')}}" href="{{route('brands')}}" :isActive="request()->routeIs('brands')||request()->routeIs('brand/any')" >
        <x-slot name="icon">
            <x-heroicon-o-book-open class="h-6 w-6 cursor-pointer  "/>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="{{__('ادارة المنتجات')}}" href="{{route('admin.products')}}" :isActive="request()->routeIs('admin.products')">
        <x-slot name="icon">
            <x-heroicon-o-collection class="h-6 w-6 cursor-pointer text-yellow-400 "/>
        </x-slot>
    </x-sidebar.link>


    <x-sidebar.link title="{{__('الرسائل')}}"  href="{{ route('admin.contacts') }}"  :isActive="request()->routeIs('admin.contacts')">
        <x-slot name="icon">
            <x-heroicon-s-inbox class="h-6 w-6 cursor-pointer text-blue-700 "/>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="{{__('Setting')}}" href="{{route('sitesetting')}}"  :isActive="request()->routeIs('sitesetting')">
        <x-slot name="icon">
            <x-bi-magnet class="h-6 w-6 cursor-pointer "/>
        </x-slot>
    </x-sidebar.link>



</x-perfect-scrollbar>
