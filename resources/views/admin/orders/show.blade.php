<x-admin-layout>

    @if( session()->get('stat')=='ok')

        <div x-show="open"  class="fixed z-40 p-4  rounded-xl pt-8 px-8  bg-green-500 text-white top-10 right-5 toast"  x-data="{ open: true }" >
            <div class="flex items-center justify-between mb-1">
            <span class="font-bold text-blue-600">
        {{__(session()->get('title'))}}</span>
                <button class="btn mx-4 btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                {{__(session()->get('message'))}}

            </div>
        </div>
    @endif
    <div class=" w-full ">

        <div class="w-full  ">

            <div class="w-full min-w-full px-6 py-4 max-w-3xl my-6 overflow-hidden bg-white rounded-md shadow-md  dark:bg-dark-eval-1">





<section class="w-full ml-2 bg-blue-600">




    <div wire:loading class="flex top-0 bottom-0 bg-white w-full  bg-opacity-50 z-30  h-full ">
<div class="rounded animate-pulse bg-blue-900 h-4 w-full ">

</div>
    </div>




    <div class=" mx-auto w-full mb-12">
        <div id="table" class="relative w-full flex dark:text-gray-200 dark:bg-dark-eval-2 flex-col min-w-0 break-words bg-white  mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="w-full px-4 max-w-full ">
                        <h3 class="font-semibold relative flex text-base text-blueGray-700">
                            {{__('السلة xj')}}
                            <x-bi-cart-fill class="w-10 h-10 text-yellow-400 flex"/>
                            <span class="rounded-full p-1 bg-indigo-500 ">+555</span>

                        </h3>

                    </div>
                    <div class="block w-full px-4  text-right">

                        sldk
                    </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table dir="rtl" class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th colspan="2" class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            مقدم الطلب
                        </th>
                        <th  class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            المنتجات
                        </th>
                        <th class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            اجمالي السعر
                        </th>
                        <th class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            الحالة
                        </th>
                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            العنوان
                        </th><th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                            عمليات
                        </th>
                    </tr>
                    </thead>
                    <tbody>


                        @foreach ($orders as $co)

                        <tr class="border border-b-2 border-blue-900">
                        <td colspan="2"  class="border-t-0  align-top border-l-2 border-r-0 text-xs whitespace-nowrap p-1">

                            <div class="flex flex-col">
                                <span>{{$co->user->name}}</span>
                                <span>{{$co->user->email}}</span>
                                <span>{{$co->user->phone}}</span>


                            </div>
                        </td>

                    <td>


                        <div class="rounded-t mb-0   border-0">
                            <div class="flex  flex-wrap items-center h-32">
                                <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">


                                @foreach($co->products as $pro)
                                <div class="relative rounded-box border-gray-900 border w-48     px-4 flex-grow flex-1">
                                  <a class="rounded-lg focus:border-blue-300  flex " href="{{url('product/all/'.$pro->id)}}">
                                     <span class="flex-wrap text-2xs">
                                        @php

                                        $len=Str::length($pro->name);

                                        $name2=$pro->name;
                                        if($len>32){
                                        $name2=Str::substr($pro->name, 0, 29);
                                        $name2.="...";

                                    }
                                    @endphp
                                    {{$name2}} </span>
                                      <img src="{{$pro->Mimg}}" class="h-16"/>
                                      <span class="text-xs flex "> {{__('الكمية')}}
                                    <span class="badge">{{$pro->pivot->qun}}</span>
                                    </span>
                                  </a>


                                </div>
                                    @endforeach
                                </x-perfect-scrollbar>
                            </div>
                        </div>


                    </td>

                    <td   class="border-t-0  align-middle border-l-2 border-r-0 text-xs whitespace-nowrap p-1">
                        <span class="text-white text-xs rounded-full bg-blue-900 p-4 font-bold">{{$co->summ()}}/RY</span>

                    </td>
                    <td  class="border-t-0  align-middle border-l border-r-0 text-xs whitespace-nowrap p-1">
                        @if($co->state==1)
                            <span class="bg-gray-400 text-white rounded-full p-2">تم</span>

                            @else
                            <span class="bg-red-500 text-white rounded-full p-2">لم يتم بعد</span>
                            @endif


                    </td>
                    <td  class="border-t-0  align-top border-l border-r-0 text-xs whitespace-nowrap p-1">
                        <span class="text-blue-700 font-bold">المدينة:{{$co->city->name}}</span>
                        <hr/>
                        العنوان:
                        {{$co->address}}

                    </td>
                    <td  class="border-t-0   align-baseline border-l border-r-0 text-xs whitespace-nowrap p-1">
                        <div class="flex items-center ">

                            <a href="{{route("admin.orders.accept",["id"=>$co->id])}}" class="rounded-full hover:text-blue-700 p-2 mx-1 flex flex-col items-center text-center bg-green-600 text-white"  >
                                <x-heroicon-o-check class="cursor-pointer  h-8 font-bold m-2"/>
                                قبول

                            </a>

                            <a class="rounded-full p-2 mx-1 flex flex-col items-center text-center bg-red-800 text-white"  >
                                <x-heroicon-o-x class="cursor-pointer  h-8 font-bold m-2"/>
                              رفض

                            </a>

                        </div>

                    </td>
                </tr>

                @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    {{--Her is Cart Orders--}}

    @auth

        {{-- <div class=" mx-auto mb-12">
            <div id="table" class="relative w-full flex dark:text-gray-200 dark:bg-dark-eval-2 flex-col min-w-0 break-words bg-white  mb-6 shadow-lg rounded">

                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold relative flex text-base text-blueGray-700">
                                {{__('طلبات السلة')}}
                                <x-bi-cart-fill class="w-10 h-10 text-yellow-400 flex"/>
                                <span class="rounded-full p-1 bg-indigo-500 ">+{{count($cartorders)}}</span>
                            </h3>

                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            {{$cartorders->links()}}
                        </div>
                    </div>
                </div>



                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th colspan="2" class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                المنتجات
                            </th>
                            <th class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                اجمالي السعر
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                الحالة
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cartorders as $co)

                            <tr class="border-b-2">

                                <td colspan="2">


                                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                                        <div class="flex flex-wrap items-center h-32">
                                            <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">


                                            @foreach($co->products as $pro)
                                            <div class="relative  w-full px-4 max-w-full flex-grow flex-1">
                                              <a class="rounded-lg focus:border-blue-300 border flex shadow" href="{{url('product/all/'.$pro->id)}}">
                                                  {{$pro->name}}
                                                  <img src="{{$pro->Mimg}}" class="h-16"/>
                                                  <span class="text-xs flex "> {{__('الكمية')}}
                                                <span class="badge">{{$pro->pivot->qun}}</span>
                                                </span>
                                              </a>


                                            </div>
                                                @endforeach
                                            </x-perfect-scrollbar>
                                        </div>
                                    </div>


                                </td>



                                <td class="border-t-0 align-middle border-l-0 border-r-0 text-xs  ">


                                    <span class="text-white text-xs rounded-full bg-blue-900 p-4 font-bold">{{$co->summ()}}/RY</span>
                                </td>
                                <td  class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-1">
                                    @if($co->state)
                                        <span class="bg-gray-400 text-white rounded-full p-2">تم</span>

                                        @else
                                        <span class="bg-red-500 text-white rounded-full p-2">لم يتم بعد</span>
                                        @endif


                                </td>

                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div> --}}

    @endauth


</section>






            </div>
        </div>
    </div>
</x-admin-layout>
