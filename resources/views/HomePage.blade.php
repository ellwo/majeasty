<x-base-layout>



    {{--
            <div x-data="dialog()">
                <button class="btn btn-primary" x-spread="trigger">Full Screen Dialog</button>
                <div class="dialog dialog-full" x-spread="dialog" x-cloak>
                    <div class="dialog-content">
                        <div class="dialog-header">Full Screen Dialog
                            <button type="button" class="btn btn-light btn-sm btn-icon" aria-label="Close" @click="close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        </div>
                        <div class="dialog-body"><img class="w-5/6 mx-auto rounded" src="/og.png" /></div>
                        <div class="dialog-footer">
                            <button type="button" class="btn btn-light" @click="close">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>--}}

    <x-slot name="header" >



        <x-Hero  headingline="{{ config('mysetting.site_name') }}" img="{{config('mysetting.site_hero_image')}}" para="{{config('mysetting.note')}}"/>

    </x-slot>





    <x-futuer/>



    <div  class="flex rounded-box items-center justify-center px-2 bg-white py-4 border-2 flex-wrap mb-12 text-left">

{{--
        <form method="get" action="{{url('product/all/')}}">
        <x-input-with-icon-wrapper>
            <x-slot name="icon" role="button">
                <x-bi-search aria-hidden="true" class="w-5 h-5" />
            </x-slot>
            <x-input name="search" withicon id="search" class="block rounded-full w-full" type="text"  :value="old('name')"
                     required autofocus placeholder="{{ __('ابحث') }}" />
        </x-input-with-icon-wrapper>
        </form> --}}



    </div>
    <div class="w-full block mx-auto text-center">
        <div dir="rtl" class="flex flex-col w-full ">
            <h1 class="text-3xl font-semibold flex mx-auto text-gray-800 capitalize lg:text-4xl dark:text-white">اين تقدم منتجاتنا

                <span class="text-danger">
                <svg  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </span>
                        </h1>

            <div class="mt-2">
                <span class="inline-block w-44 h-1 rounded-full bg-blue-500"></span>
                <span class="inline-block w-6 h-1 ml-1 rounded-full bg-blue-500"></span>
                <span class="inline-block w-5 h-1  rounded-full bg-blue-500"></span>
            </div>
        </div>
    </div>
    <hr/>

    <div dir="rtl" class="flex flex-col rounded-lg">



            @foreach ($locs as $key=>$v)
            <div  class=" mx-auto flex  flex-wrap">

                <h1 class="mx-2 text-xl">
{{ $key }}
<div class="">
    <span class="inline-block w-40 h-1 rounded-full bg-blue-500"></span>
    <span class="inline-block w-3 h-1 ml-1 rounded-full bg-blue-500"></span>
    <span class="inline-block w-1 h-1 ml-1 rounded-full bg-blue-500"></span>
</div>
                </h1>
<hr/>
                @foreach ($locs[$key] as  $lo)

            <div class=" block space-y-2 mt-2">
                <div class="flex flex-wrap items-top mb-1 ">
                    <div class="p-6 mr-2 bg-white  shadow-lg rounded-lg border dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-xl sm:text-xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                            {{$lo->name}}
                        </h1>

                        <div class="flex items-center cursor-pointer mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4 text-sm tracking-wide font-semibold w-40">
                                {{ $lo->address }}
                            </div>
                        </div>

                        @foreach ($lo->phones as $p)

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <x-heroicon-s-phone class="h-6 w-6 text-blue-700"/>
                                <div class="ml-4 text-sm tracking-wide font-semibold w-40">
                                {{ $p }}
                                </div>
                            </div>
                        @endforeach



                    </div>

                </div>
            </div>

            @endforeach

    </div>
            @endforeach


    </div>



</x-base-layout>
