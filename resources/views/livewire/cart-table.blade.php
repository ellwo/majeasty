<section class="mt-4 sm:w-6/12 mx-auto">




    <div wire:loading class="top-0 bottom-0 z-30 flex w-full h-full bg-white bg-opacity-50 ">
<div class="w-full h-4 bg-blue-900 rounded animate-pulse ">

</div>
    </div>




    <div class="w-full mx-auto mb-12 ">
        <div id="table" class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg dark:text-gray-200 dark:bg-dark-eval-2">
            <div class="px-4 py-3 mb-0 border-0 rounded-t">
                <div class="flex flex-wrap items-center">
                    <div class="w-full max-w-full px-4 ">
                        <h3 class="relative flex text-base font-semibold text-blueGray-700">
                            {{__('المفضلات')}}
                            <x-bi-cart-fill class="flex w-10 h-10 text-yellow-400"/>
                            <span class="p-1 bg-indigo-500 rounded-full ">+{{$wishlist->count()}}</span>

                        </h3>

                    </div>
                    <div class="block w-full px-4 text-right">
{{--
                        @if ($wishlist->count()>0)

                        @livewire('checkout-form',[],key(time()))

                        @endif --}}
                    </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th colspan="2" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            المنتج
                        </th>
                        {{-- <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            الكمية
                        </th>
                        <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            اجمالي السعر
                        </th> --}}
                        <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            عمليات
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($wishlist as $c)

                        <tr class="border-b-2">
                            <th colspan="2" class="p-4 px-6 text-xs align-middle border-l-0 border-r-0 whitespace-nowrap">

                                <div class="flex mx-auto px">
                                    <a href="{{url('product/all/'.$c->id)}}" class="text-black bg-gray-100 rounded-lg shadow-lg link">
                                        {{$c->name}}

                                        <img class="h-20 p-1 rounded-full "
                                             src="{{$c->options->img}}">
                                        {{$c->price}}/RY
                                    </a>
                                </div>
                            </th>
                            {{-- <td class="px-6 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap ">

                                <x-counter id="{{$c->id}}"/>
                            </td> --}}

{{--
                            <td class="text-xs align-middle border-t-0 border-l-0 border-r-0 ">


                                <span class="p-4 text-xs font-bold text-white bg-blue-900 rounded-full">{{$c->price*$c->qty}}/RY</span>
                            </td> --}}
                            <td  class="p-1 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">

                                    {{-- <a @click="openmodal=true"  wire:click="setorderproid({{$c->id}})"  class="font-bold text-gray-100 bg-green-500 rounded-full btn btn-ghost hover:bg-gray-800">
                                        اطلب
                                        <x-bi-cart class="w-6 h-6 text-yellow-400"/>
                                    </a> --}}


                                @if($orderproid==$c->id)
                                {{--
                                <x-orderForm  x-data="{openmodal:true}" qun="{{$c->qty}}" id="mod{{$c->id}}" proid="{{$c->id}}"/>
                                --}}
                                @livewire('order-model',['proid'=>$orderproid,'open'=>1])
                                @endif

                                <a wire:click="dislike('{{$c->rowId}}')" class="text-gray-100 bg-red-700 rounded-full btn hover:bg-gray-800 ">
                                        <x-bi-x/>
                                    </a>


                            </td>

                        </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    {{--Her is Cart Orders--}}
{{--
    @auth

        <div class="mx-auto mb-12 ">
            <div id="table" class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg dark:text-gray-200 dark:bg-dark-eval-2">

                <div class="px-4 py-3 mb-0 border-0 rounded-t">
                    <div class="flex flex-wrap items-center">
                        <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                            <h3 class="relative flex text-base font-semibold text-blueGray-700">
                                {{__('طلباتي')}}
                                <x-bi-cart2 class="flex w-10 h-10 text-yellow-400"/>
                                <span class="p-1 bg-indigo-500 rounded-full ">+{{count($cartorders)}}</span>
                            </h3>

                        </div>
                        <div class="relative flex-1 flex-grow w-full max-w-full px-4 text-right">
                            {{$cartorders->links()}}
                        </div>
                    </div>
                </div>



                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th colspan="2" class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                المنتجات
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                اجمالي السعر
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                الحالة
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cartorders as $co)

                            <tr class="border-b-2">

                                <td colspan="2">


                                    <div class="px-4 py-3 mb-0 border-0 rounded-t">
                                        <div class="flex flex-wrap items-center h-32">
                                            <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">


                                            @foreach($co->products as $pro)
                                            <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                                              <a class="flex border rounded-lg shadow focus:border-blue-300" href="{{url('product/all/'.$pro->id)}}">
                                                  {{$pro->name}}
                                                  <img src="{{$pro->Mimg}}" class="h-16"/>
                                                  <span class="flex text-xs "> {{__('الكمية')}}
                                                <span class="badge">{{$pro->pivot->qun}}</span>
                                                </span>
                                              </a>


                                            </div>
                                                @endforeach
                                            </x-perfect-scrollbar>
                                        </div>
                                    </div>


                                </td>



                                <td class="text-xs align-middle border-t-0 border-l-0 border-r-0 ">


                                    <span class="p-4 text-xs font-bold text-white bg-blue-900 rounded-full">{{$co->summ()}}/RY</span>
                                </td>
                                <td  class="p-1 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                    @if($co->state)
                                        <span class="p-2 text-white bg-gray-400 rounded-full">تم</span>

                                        @else
                                        <span class="p-2 text-white bg-red-500 rounded-full">لم يتم بعد</span>
                                        @endif


                                </td>

                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    @endauth --}}


</section>
