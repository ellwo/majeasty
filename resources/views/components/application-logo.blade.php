<img x-show="isSidebarOpen || isSidebarHovered" src="{{config("mysetting.logo")}}" class="h-8 dark:hidden">
<img x-show="!isSidebarOpen && !isSidebarHovered" src="{{config("mysetting.site_header_logo")}}" class="h-8">
<img x-show="isSidebarOpen || isSidebarHovered" src="{{asset('myimages/bg-images/migestlogoLight.svg')}}" class="h-8 hidden dark:block">
