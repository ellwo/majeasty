
<div x-data="drawer()">
    <x-button id="drawershowbtn" class="hidden" type="button" iconOnly variant="secondary" srText="Open main menu"
              x-spread="trigger">

        <x-heroicon-o-menu aria-hidden="true" class="w-6 h-6" />
    </x-button>
    <div class="dialog dialog-right" x-spread="drawer" x-cloak>
        <div class="drawer-content">
            <div class="dialog-header">{{env('APP_NAME')}}
                <button type="button" class="btn btn-light btn-sm btn-icon" aria-label="Close" @click="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <div class="dialog-body">

                <nav class=" z-30 h-full text-sm font-medium text-gray-600" aria-label="Main Navigation">



                    @auth
                        <div class=" items-center justify-between flex-shrink-0 px-3">



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
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth





                    <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
                       href="{{url('Home')}}">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-600"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg> <span>{{__('الرئيسية')}}</span> </a>



                    <div x-data="collapse()" x-spread="trigger">
                        <div class="flex items-center justify-between px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
                              >
                            <div class="flex items-center">
                                <x-bi-menu-button class="h-4 w-4 mr-2 ml-2"/>
                                <span>{{__('الاقسام')}}</span>
                            </div> <svg :class="{ 'rotate-90': open }"
                                        class="flex-shrink-0 w-4 h-4 ml-2 transition transform" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="mb-4" x-spread="collapse" x-cloak>
                            @foreach($depts as $dept)
                                <a class=" @if(request()->url()==env('APP_URL'). "/product/".$dept->id) active  bg-gray-100 border-b-2 border-red-900  @endif flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
                                   @if(request()->url()!=env('APP_URL'). "/product/".$dept->id)
                                       href="{{url('product/'.$dept->id)}}"
                                   @else

                                   href="#"
                                   @endif

>
                                    <span>{{$dept->name}}</span> </a>

                            @endforeach

                        </div>
                    </div>
                        <a
                            class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
                            href="{{url('contact')}}">
                            <span>{{__('اتصل بنا')}}</span> </a>
                        <a
                            class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
                            href="{{url('wishlist')}}">
                            <x-bi-cart class="h-6 w-6 text-yellow-400"/>
                            <span>{{__('السلة')}}</span> </a>
                </nav>



            </div>
            <div class="dialog-footer">
                <button type="button" class="btn btn-light" @click="close">Close</button>
            </div>
        </div>
    </div>
</div>




