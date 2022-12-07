<section class="sm:flex ">


    <div class="lg:w-6/12 mx-auto mb-12">
        <div id="table" class="relative w-full flex dark:text-gray-200 dark:bg-dark-eval-2 flex-col min-w-0 break-words bg-white  mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-blueGray-700">
                            {{__('طلباتي')}}
                        </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                       {{$orders->links()}}
                    </div>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th colspan="2" class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            المنتج
                        </th>
                        <th class="px-6  bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            المدينة
                        </th>

                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            عمليات
                        </th>
                    </tr>
                    </thead>
                    <tbody class="md:h-32"  >
                    @foreach($orders as $order)


                            <tr  >
                            <th colspan="2" class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">

                                <div class="flex mx-auto px">
                                    <a href="{{url('product/all/'.$order->product->id)}}" class="link bg-gray-100 shadow-lg text-black rounded-lg">
                                    {{$order->product->name}}

                                    <img class="rounded-full  h-20 p-1 "
                                         src="{{$order->product->Mimg}}">
                                    {{$order->product->price}}
                                    </a>
                                </div>
                            </th>
                            <td class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-1 ">
                               {{$order->city->name}}
                            </td>

                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    @if($order->stat)
                                        <span class="bg-gray-400 text-white rounded-full p-2">تم</span>

                                    @else
                                        <span class="bg-red-500 text-white rounded-full p-2">لم يتم بعد</span>
                                    @endif
                                        <span class="text-blue-500 bg-gray-200 rounded-lg text-xs block mt-4">{{$order->created_at}}</span>

                            </td>

                            </tr>
                            <tr x-data="collapse()" class="text-center">
                                <td colspan="4"  x-spread="trigger" class="mx-auto px-8 " role="button" aria-controls="basicAccordion{{$order->id}}" aria-expanded="false">
                                    <a class="text-center mx-auto ">
                                    التفاصيل
                                    <svg :class="{ 'rotate-180': open }" class="transition transform h-4 w-4 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
</a>
                                <div    x-spread="collapse" x-cloak class=" " id="basicAccordion{{$order->id}}">

                                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-1 ">

                                        {{$order->note}}

                                        <span class="text-blue-500 bg-gray-200 rounded-lg text-xs block">{{$order->created_at}}</span>
                                    </div>
                                </div>
                                </td>


                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>




@livewire('cart-table')
</section>
