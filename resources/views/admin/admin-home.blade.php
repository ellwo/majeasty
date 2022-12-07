<x-admin-layout>

    <div class="relative pt-12 pb-32 bg-pink-600 md:pt-32">

        <div class="w-full px-4 mx-auto md:px-10">
            <div>
                <!-- Card stats -->
                <div class="flex flex-wrap dark:text-black">
                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                            Traffic
                                        </h5>
                                        <span class="text-xl font-semibold text-blueGray-700">
                            350,897
                          </span>
                                    </div>
                                    <div class="relative flex-initial w-auto pl-4">
                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                            <i class="far fa-chart-bar"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-blueGray-400">
                        <span class="mr-2 text-emerald-500">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                                    <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                            عدد العملاء
                                        </h5>
                                        <span class="text-xl font-semibold text-blueGray-700">
                            {{$userscount}}
                          </span>
                                    </div>
                                    <div class="relative flex-initial w-auto pl-4">
                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-blueGray-400">
                        <span class="mr-2 text-red-500">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                                    <span class="whitespace-nowrap">
                          Since last week
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                            عدد زيارات المنتجات
                                        </h5>
                                        <span class="text-xl font-semibold text-blueGray-700">
                             {{$provisitcount}}
                          </span>
                                    </div>
                                    <div class="relative flex-initial w-auto pl-4">
                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-blueGray-400">
                        <span class="mr-2 text-orange-500">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                                    <span class="whitespace-nowrap">
                          Since yesterday
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                            عدد الطلبات
                                        </h5>
                                        <span class="text-xl font-semibold text-blueGray-700">
                            {{$orderscount}}
                          </span>
                                    </div>
                                    <div class="relative flex-initial w-auto pl-4">
                                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white rounded-full shadow-lg bg-lightBlue-500">
                                            <i class="fas fa-percent"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-blueGray-400">
                        <span class="mr-2 text-emerald-500">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                    <span class="whitespace-nowrap">
                          Since last month
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="w-full mx-auto mb-20 -m-24 sm:px-4 md:px-10">
        <div class="flex flex-wrap">
            <div class="w-full mb-12 xl:w-8/12 xl:mb-0 sm:px-4">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-6 break-words rounded shadow-lg bg-blueGray-800"
                >
                    <div class="px-4 py-3 mb-0 rounded-t ">
                        <div class="flex flex-wrap items-center">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h6
                                    class="mb-1 text-xs font-semibold uppercase text-blueGray-100"
                                >
                                    Overview
                                </h6>
                                <h2 class="text-xl font-semibold text-white">
                                    Sales value

                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-2 sm:p-4">
                        <!-- Chart -->
                        <div class="relative " style="height:350px">

                            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg dark:text-black">
                                <div class="py-3 mb-0 border-0 rounded-t sm:px-4">
                                    <div class="flex flex-wrap items-center">
                                        <div class="relative flex-1 flex-grow w-full max-w-full sm:px-4">
                                            <h3 class="text-base font-semibold text-blueGray-700">
                                                المنتجات الاكثر طلب
                                            </h3>
                                        </div>
                                        <div class="relative flex-1 flex-grow w-full max-w-full px-4 text-right">
                                            <button
                                                class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase bg-indigo-500 rounded outline-none active:bg-indigo-600 focus:outline-none"
                                                type="button"
                                                style="transition:all .15s ease"
                                            >
                                                See all
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="block w-full overflow-x-auto ">
                                    <!-- Projects table -->
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                        <tr>
                                            <th class="px-4 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                                المنتج
                                            </th>
                                            <th class="px-4 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                                عدد الطلبيات
                                            </th>
                                            <th class="px-4 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                                عدد الزيارات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($pro1 as $mp)
                                            <tr class="border-b-2">
                                                <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                    {{$mp->name}}
                                                </th>
                                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                    {{$mp->ocount+$mp->nocount+$mp->cocount+$mp->cncount}}
                                                </td>
                                                <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                    {{$mp->vzt()->count()}}
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="w-full px-4 xl:w-4/12">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg dark:text-black"
                >
                    <div class="px-4 py-3 mb-0 bg-transparent rounded-t">
                        <div class="flex flex-wrap items-center">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h2 class="text-xl font-semibold text-blueGray-700">
                                احصائيات الطلبات
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4">
                        <!-- Chart -->
                        <div class="relative" style="height:350px">
                            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg">
                                <div class="block w-full overflow-x-auto">
                                    <!-- Projects table -->
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="px-2 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                                                الفئة
                                            </th>


                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($counterorder as $co)
                                        <tr>
                                            <th colspan="2" class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{$co['name']}}
                                                <div class="flex items-center mt-2">
                                                    <span class="py-3 mr-2 text-xs badge">{{$co['count']}}/طلب</span>


                                                    <span class="mr-2 text-xs">{{$co['persint']}}%</span>
                                                    <div class="relative w-full">
                                                        <div class="flex h-2 overflow-hidden text-xs rounded bg-indigo-50 ">
                                                            <div
                                                                style="width:{{$co['persint']}}%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center
                                @if($co['persint']<50) bg-red-700
                            @elseif($co['persint']>50 && $co['persint']<70 ) bg-yellow-500 @else bg-indigo-500 @endif"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="p-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">

                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>




    </div>



</x-admin-layout>
