

<div x-data="showPhotoPopUp"  data-wow-wait=".6s" data-wow-delay=".8s" class="mt-6 text-black bg-white shadow-2xl wow fadeInUp rounded-xl dark:bg-dark-eval-2 lg:px-8" >


    <transition
        enter-active-class="transition"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
       >
<div   x-show="showPhoto" class="relative">
<div class="fixed inset-0 z-30 flex w-full h-full transition-transform duration-500 transform bg-black opacity-80">
</div>

<div class="fixed inset-x-0 inset-y-0 z-50 flex flex-col items-center justify-center mx-auto my-auto transition-transform duration-500 transform bg-white sm:inset-x-1/3 ">
    <div class="relative flex flex-col">
    <img class="my-auto align-middle " :src="image_src"/>

 <a class="z-50 p-4 font-bold text-white align-bottom bg-black border rounded-md cursor-pointer " :href="image_src" download> تنزيل </a>
</div>
</div>

<div class="fixed z-50 mx-auto my-auto transition-transform duration-500 transform top-6">
<span @click="showPhoto=false" class="p-4 text-red-600 bg-white rounded-full cursor-pointer sm:p-6 sm:text-2xl hover:bg-slate-200">X</span>
</div>

</div>
</transition>
    <a class="p-4 text-sm text-white bg-green-600 border rounded cursor-pointer" wire:click='come_back()' >عودة</a>
    <div class="flex flex-col p-4 rounded lg:flex-row ">





        <div data-wow-wait="2s" data-wow-delay="2s" class="wow fadeInUp lg:flex-1 sm:px-4">
            <div x-data="{ image: '{{$product->Mimg}}' }" x-cloak>
                <div class="mb-4 bg-gray-100 border border-blue-600 rounded-lg lg:h-80">
                    <div  class="flex items-center justify-center mb-4 bg-gray-100 rounded-lg lg:h-80">
                        <img  @click="image_src=image; showPhoto=true;"  class="h-full rounded-lg" :src="image">
                    </div>



                </div>

                <div class="flex flex-wrap mb-4 -mx-2">

                    <div class="w-6/12 px-2 mb-2 lg:w-1/4">
                        <img src="{{$product->Mimg}}" x-on:click="image = '{{$product->Mimg}}'"
                             :class="{ 'ring-2 ring-indigo-300 ring-inset': image === '{{$product->Mimg}}' }" class="flex h-24 mt-2 bg-gray-100 border border-black rounded-lg cursor-pointer focus:outline-none sm:h-24 lg:h-32 "
                        />
                    </div>
                    @foreach($product->imgs??[] as $im)

                        <div class="w-6/12 px-2 mb-2 lg:w-1/4">
                            <img src="{{$im}}" x-on:click="image = '{{$im}}'"
                                 :class="{ 'ring-2 ring-indigo-300 ring-inset': image === '{{$im}}' }" class="flex h-24 mt-2 bg-gray-100 border border-black rounded-lg cursor-pointer focus:outline-none sm:h-24 lg:h-32">

                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div data-wow-wait="1s" data-wow-delay="1s" class="lg:flex-1 wow fadeInDown sm:px-4" >

            @if($openmodal==1)
            @livewire('order-model', ['proid' => $product->id,'open'=>$openmodal], key('ordermode'.$product->id))

            @endif


            <div x-data="{tap:1}"
                class="p-2"
                dir="rtl">
                <ul class="flex border-b">
                    <li @click="tap=1" class="mb-px mr-1"

                   :class="{'border text-blue-700':tap==1}"
                    >
                        <a   class="inline-block px-4 py-2 font-semibold bg-white cursor-pointer" >
                             المنتج
                        </a>
                    </li>
                    <li @click="tap=3" class="mb-px mr-1"

                    :class="{'border text-blue-700':tap==3}">
                        <a  class="inline-block px-4 py-2 font-semibold bg-white cursor-pointer" >
                            تفاصيل المنتج</a>
                    </li>
                    <li @click="tap=2" class="mb-px mr-1"

                    :class="{'border text-blue-700':tap==2}">
                        <a  class="inline-block px-4 py-2 font-semibold bg-white cursor-pointer" >
                            المراجعات</a>
                    </li>

                </ul>
                <div class="w-full pt-4">




                    <div x-show="tap==3"  >

                        <div dir="rtl"  class="flex flex-col items-end justify-end dark:text-white lg:flex-1 sm:px-4">

                            <div  class="flex flex-col w-full border border-b-0 rounded-md">


                                @foreach ($product->discrip??[] as $k => $v)
                                    <div dir="" class="flex items-start justify-start space-x-2 text-right">
                                        <div class="w-1/4 h-full px-2 font-bold text-blue-700 border-l-2">
                                            {{ $k }}

                                        </div>
                                        <div class="w-3/4 px-2">
                                            {{ $v }}

                                        </div>

                                    </div>
                                    <hr class="dark:border-m_primary-50" />
                                @endforeach


                            </div>
                        </div>
                    </div>



                    <div x-show="tap==1"  >

                        <div dir="rtl"  class="flex flex-col items-start justify-start dark:text-white lg:flex-1 sm:px-4">
                            <h2  class="mb-2 text-xl font-bold text-gray-800 dark:text-white md:text-2xl">{{$product->name}}
                                </h2>
                            <p class="mb-2 text-sm text-gray-500 dark:text-white">{{__('الموديل')}}::[
                                <a  class="text-indigo-600 cursor-pointer dark:text-grey-200 hover:underline">{{$product->modal}}</a>
                                ]
                            </p>

                            <p class="mb-2 text-sm text-gray-500 dark:text-white">{{__('القسم')}}/
                                <a wire:click="changeDept({{$product->department?->id}})" class="text-indigo-600 cursor-pointer dark:text-grey-200 hover:underline">{{$product->department?->name}}</a>
                            </p>
{{--
                            <p class="mb-2 text-sm text-gray-500 dark:text-white">{{__('الماركة العلامة التجارية')}}/

                                <a wire:click="setBrand({{$product->brand->id?? 'all'}})" class="inline-flex justify-between p-1 space-x-2 text-indigo-700 border rounded-md cursor-pointer dark:text-info-light hover:underline">{{$product->brand?->name}}
                                <img class="inline-flex h-6 mx-2" src="{{ $product->brand?->img }}" />
                                </a>
                            </p> --}}
<p class="mb-2 text-sm text-gray-500 dark:text-white">{{__('الفئات')}}/
                                 @foreach ($product->parts as $item)
                                 <a class="cursor-pointer hover:bg-info hover:text-white" wire:click='setPart({{ $item->id }})'>
                                 <span class="p-4 badge badge-md">{{ $item->name }}</span>
                                 </a>
                                 @endforeach
                            </p>

                            {{-- <p class="flex text-sm text-gray-500">

                               @for($i=1; $i<=ceil($reatavg); $i++)
                                   <x-bi-star-fill class="w-4 h-4 text-yellow-400 " />
                                @endfor
                                @for($j=1; $j<=5-ceil($reatavg); $j++)
                                       <x-bi-star-fill class="w-4 h-4 text-gray-800" />
                                   @endfor
                                <a @click="openTab = 2"  class="link ">  تقييم</a>


                            </p> --}}

                            <div class="flex items-center my-4 space-x-4">
                                {{-- <div>
                                    <div class="flex px-3 py-2 bg-yellow-400 rounded-lg">
                                        <span class="mt-1 mr-1 text-red-400">RY/</span>
                                        <span class="text-3xl font-bold text-black">{{$product->price}}</span>
                                    </div>
                                </div>

                                 --}}
                            </div>

                            <h2>الوصف</h2>

                            <div x-data='{openmore:false, len:{{ strlen($product->note) }}}' x-transition :class="{'h-32  overflow-y-hidden ':!openmore && len>400}" class="relative text-sm text-right transition-all ">

                                <p dir="rtl" class="">



                                    @php
                                    echo $product->note;

                                @endphp
                            </p>
                            <div x-show="openmore"><br></div>

                            @if (strlen($product->note)>400)

                            <div x-show='openmore==false' x-on:click='openmore=true' class="absolute left-0 z-40 justify-end underline bg-white cursor-pointer bottom-2 text-info ">...المزيد</div>

                            @endif
                            <div x-show="openmore" x-on:click='openmore=false' class="absolute bottom-0 left-0 right-0 z-40 justify-end underline bg-white cursor-pointer text-info">...اخفاء</div>

                        </div>

                                @php
                                $open=0;
                                    if($openmodal!=0)
                                    $open=1;

                                @endphp

                            <div  class="flex py-4 mx-2 space-x-4">

                                {{-- <a   wire:click="openmodalme()"  id="neworderbtn" class="px-6 py-2 font-semibold text-white bg-indigo-600 btn h-14 rounded-xl hover:bg-indigo-500">
                                    {{__('طلب')}}
                                </a>
 --}}



                                @if($isliked==true)
                                <div class="flex">
                                    <a wire:click="dislike('{{$cart->where('id',$product->id)->pluck('rowId')->first()}}')" class="flex p-4 mx-2 space-x-2 cursor-pointer">
                                        <x-bi-heart-fill class="w-6 h-6 text-red-800 "/>
                                        {{__('ازالة من للمفضلات')}}
                                    </a>
                                </div>
                                @else
                                    <div class="flex">
                                        <a wire:click="like({{$product->id}})" class="flex p-4 mx-2 cursor-pointer">
                                            <x-bi-heart class="w-6 h-6 text-yellow-400 hover:text-red-800 "/>
                                            {{__('اضف للمفضلات')}}
                                        </a>
                                    </div>
                                @endif


                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-semibold text-green-500">

                                <div class="flex">
                                    <a class="m-2">
                                        <x-bi-share aria-hidden="true" class="flex w-5 h-5"/>
                                    </a>


                                    <a href="https://www.facebook.com/sharer.php?u={{url('product/'.$product->department->id.'/'.$product->id)}}" rel="me" target="_blank"
                                     class ="m-2">
                                        <x-bi-facebook aria-hidden="true" class="flex w-5 h-5 text-blue-500 cursor-pointer"/>
                                    </a>
                                    <a href="shareto://send?text={{url('product/'.$product->department->id.'/'.$product->id)}}"  class ="m-2">
                                        <x-bi-whatsapp aria-hidden="true" class="flex w-5 h-5 text-green-500 cursor-pointer"/>
                                    </a>

                                </div>

                                </p>




                            </div>

                            <div class="flex">

{{--


                                <div class=" artboard artboard-demo bg-base-200">
                                    <ul class="shadow-lg menu bg-base-100 rounded-box horizontal">
                                        <li class="p-1 m-2 border-r-4">

                                            <div class="text-sm ">
                                                <div class="text-xs text-red-800 ">
                                                    <x-bi-heart class="w-4 h-4 text-red-600 "/>
                                                </div>الاعجابات
                                                <div class="m-0 text-sm text-red-800 stat-value lg:text-xl">25.6K</div>
                                            </div>
                                        </li>
                                        <li class="p-1 m-2 border-r-4">

                                            <div class="text-sm"> <div class="p-0 m-0 text-sm stat-figure text-info">
                                                    <x-bi-cart-fill class="w-6 h-6 text-yellow-400"/>
                                                </div>


                                                الطلبات<div class="text-sm text-yellow-400 stat-value lg:text-xl">

                                                    K
                                                </div>

                                            </div>

                                        </li>
                                        <li class="p-1 m-2">
                                            <div class="text-sm "> <div class="p-0 m-0 text-sm stat-figure text-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                    </svg>
                                                </div> الزيارات    <div class="text-sm stat-value text-info lg:text-xl"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}



                            </div>



                        </div>
                    </div>





















                    <div  x-show="tap==2"   class="">


                        <div class="w-full px-2 py-4 space-x-4 border border-blue-600 rounded-lg lg:px-4s h-80">
                            <x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 overflow-x-hidden " >
                            @forelse ($comments as $comment)





                                    <div class="flex mx-4 mb-4 border border-gray-400 rounded-lg shadow">
                                        <div class="block h-full py-2 bg-blue-600 rounded-lg shadow-inner lg:w-2/12">
                                            <div class="px-2 tracking-wide text-center">
                                                <div class="text-xl font-bold text-white ">{{$comment->value}}</div>
                                                <div class="text-xl font-normal text-white"><x-bi-star-fill class="w-6 h-6 text-yellow-400"/></div>
                                            </div>
                                        </div>
                                        <div class="w-full px-1 py-5 tracking-wide bg-white lg:w-11/12 xl:w-full lg:px-2 lg:py-2">
                                            <div class="flex flex-row justify-center lg:justify-start">
                                                <div class="px-2 text-xs font-medium text-center text-blue-700 lg:text-left">
                                                    {{date('d/M h:s:A', strtotime($comment->updated_at))}}

                                                </div>
                                            </div>
                                            <div class="px-2 text-lg font-semibold text-center text-gray-800 lg:text-left">
                                           {{--     @if (auth()->user()->email !=null  && $comment->user->email == auth()->user()->email)
                                                    انت
                                                    @else
                                                {{$comment->user->name}}
                                                    @endif
                                           --}}
                                            </div>

                                            <div class="px-2 pt-1 text-sm font-medium text-center text-gray-600 lg:text-left">
                                               <h4 class="text-blue-700 border-b">{{ $comment->user->name }}</h4>
                                                {{$comment->comment}}
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="flex col-span-1">
                                        <div class="relative px-4 mb-16 leading-6 text-left">
                                            <div class="box-border text-lg font-medium text-gray-600">
                                                No ratings
                                            </div>
                                        </div>
                                    </div>

                                @endforelse
                            </x-perfect-scrollbar>
                    </div>



                    <livewire:ratelivemodal :wire:key="'ratelivemodal'.$product->id" :product_id="$product->id"/>

                    </div>

                </div>



            </div>



        </div>





    </div>



</div>
