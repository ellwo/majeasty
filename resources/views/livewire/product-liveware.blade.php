
<section

x-data="{
    openTab: 1,
    activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
    inactiveClasses: 'text-blue-500 hover:text-blue-800'
  }" class="wow fadeInUp " data-wow-delay=".1s">
  @if( session()->get('stat')=='ok')

  <div class="fixed p-4 text-white bg-green-500 bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
      <div class="flex items-center justify-between mb-1">
      <span class="font-bold text-blue-600">
  {{__(session()->get('title'))}}</span>
          <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
      </div>
      {{__(session()->get('message'))}}
  </div>
 @endif


    <nav aria-label="secondary"
         class="sticky top-0 z-10 flex items-center justify-between px-4 py-4 mx-auto transition-transform duration-500 bg-white navbar lg:w-1/4 navbar-end sm:px-6 dark:bg-dark-eval-1"
         {{-- :class="{
        '-translate-y-full': scrollingDown,
        'translate-y-0': scrollingUp,
    }"> --}}
    >

        <div class="px-2 mx-2 navbar-center lg:flex">
            <div class="flex items-stretch">

        <div class="dropdown dropdown-hover sm:dropdown-left">
            <div tabindex="0" class="cursor-pointer">

                <x-bi-heart-fill class="w-6 h-5 text-red-800 cursor-pointer"/>
                المفضلات({{$cart->count()}})
            </div>
            <ul tabindex="0" class="p-2 bg-white shadow menu dropdown-content dark:bg-dark-eval-1 dark:text-white rounded-box w-52">


                        @foreach($cart->take(2) as $c)
                    <li>
                        <div class="flex mt-3 text-xs text-black bg-white rounded-lg">

                            <div class="p-4 mx-auto bg-gray-200 rounded-lg">
                                <img  src="{{$c->options->img}}" class="w-20 h-20 bg-blue-900 rounded-full"/>

                                <a title="{{__('اظهار المنتج ')}}" class="font-bold text-blue-900 cursor-pointer hover:text-red-800 hover:bg-success " wire:click="changePro({{$c->id}})">
                                    {{$c->name}}
                                </a>
                                <hr/>
                                <a   wire:click="dislike('{{$c->rowId}}')"  title="{{__('حذف من المفضلات')}}" class="font-bold bg-red-900 rounded-full cursor-pointer hover:bg-indigo-500 "  >
                                    <x-heroicon-s-x class="w-6 h-6 text-red-800"/>
                                </a>
                            </div>
                        </div>

                    </li>
                        @endforeach
                <li>
                    <a href="{{route('wishlist')}}">See More</a>
                </li>


            </ul>
        </div>
            </div>
        </div>




    </nav>





        <nav aria-label="breadcrumbs" class="mt-8 mb-4 ">
            <ul class="flex space-x-4 breadcrumb ">
                @php
                $name="all";
                @endphp
                <li class="breadcrumb-item dark:text-white">

                            <div class="dropdown dropdown-hover">
                                <div tabindex="0" class="cursor-pointer">
                                    {{__('الاقسام')}}
</div>
                                <ul tabindex="0" class="p-2 bg-white shadow menu dropdown-content dark:bg-dark-eval-1 dark:text-white rounded-box w-52">

                                    <li> <a class="hover:text-red-800" wire:click="changeDept('all')"> all
                                        </a>
                                    </li>

                                @foreach($depts as $dept)


                                            @if(isset($deptid) && $deptid!=$dept->id)
                                        <li class="">
                                            <a class="flex flex-wrap hover:text-red-800" wire:click="changeDept({{$dept->id}})">        {{$dept->name}}
                                            </a>

                                        </li>
                                        @else
                                                @php
                                                $name=$dept->name;

                                                @endphp
                                            @endif

                                        @endforeach

                                </ul>
                            </div>
                    </li>

                <li class="breadcrumb-item dark:text-white">
                |</li>

                <li class="breadcrumb-item" aria-current="page">{{$name}}</li>
            </ul>
        </nav>























    <div  class="relative flex flex-wrap px-2 py-4 mb-12 bg-white border-2 dark:bg-dark-eval-2 rounded-box">










        <div class="w-full mb-4 ">
            <form  wire:submit.prevent="subsearch" class="flex flex-wrap items-center justify-center">



                <div class="flex ">
                <select wire:model="deptid" class="m-2 rounded-full dark:bg-dark-bg form-select" id="color1" >
                    <option  @if(isset($deptid) && $deptid =="all") @endif value="all"> القسم /الجميع </option>
                    @foreach($depts as $dept)

                    <option @if(isset($deptid) && $dept->id==$deptid) selected @endif value="{{$dept->id}}">القسم/{{$dept->name}}</option>
                    @endforeach
                </select>
                </div>

                <x-input-with-icon-wrapper >


                    <x-slot name="icon">
                        <x-bi-search aria-hidden="true" class="w-5 h-5" />
                    </x-slot>
                    <x-input wire:model.lazy="search" withicon id="name" class="rounded-full" dir="auto" type="text" name="name" :value="old('name')"
                             required autofocus placeholder="{{ __('بحث') }}" />
                </x-input-with-icon-wrapper>

            </form>
        </div>



















        <div class="absolute top-0 bottom-0 z-30 w-full bg-white bg-opacity-50" wire:loading
             wire:target="changeDept,changePro,subsearch,gotoPage,nextPage,perviousPage,addtocart,openmodalme,resetopid" >
            <div class="bottom-0 w-full h-4 my-auto bg-red-600 rounded animate-pulse top-10"></div>
        </div>

















        <div class="sm:w-3/4" >


        <div  class="flex flex-wrap px-2 py-4 mb-12 text-left  border-2 rounded-box">



            @isset($products)
            <div class="w-full mb-4">
                {{$products->withQueryString()->links()}}

            </div>

{{--
                <div dir="rtl" class="flex w-full mb-4" >
 <label class="text-xs text-black sm:px-4" for="bydate">ترتيب التاريخ</label>
                <select class="flex-1 text-sm rounded-xl dark:bg-dark-bg" id="bydate" wire:model="bydate">
                    <option value="ASC">  تصاعدي</option>
                    <option value="DESC">تنازلي</option>
                </select>
                <label class="text-xs text-black sm:px-4" for="byprice">ترتيب السعر</label>
                <select class="flex-1 text-sm rounded-xl dark:bg-dark-bg" wire:model="byprice" id="byprice">
                    <option value="ASC">  تصاعدي</option>
                    <option value="DESC">تنازلي</option>
                </select>
                </div> --}}

        @foreach($products as $pro)

            @auth


                @include('components.product',[
                                   "reatavg"=>$pro->reatsAvga(),
                                   "isliked"=>count($cart)>0?$cart->where('id',$pro->id)->count():0,
                                   "isincart"=>$shopcart->where('id',$pro->id)->count(),
                                   "name"=>$pro->name,
                                    "deptid"=>$deptid,
                                   "img"=>$pro->Mimg,
                                    "price"=>$pro->price,

                                    'product'=>$pro,
                                     "id"=>$pro->id                      ])

                @else

                        @include('components.product',[
                                               "reatavg"=>$pro->reatsAvga(),
                                               "isliked"=>count($cart)>0?$cart->where('id',$pro->id)->count():0,
                                               "isincart"=>$shopcart->where('id',$pro->id)->count(),
                                               "name"=>$pro->name,
                                                "deptid"=>$deptid,
                                               "img"=>$pro->Mimg,
                                                "price"=>$pro->price,
                                                 "id"=>$pro->id,
                                                 'product'=>$pro

                                         ])

                    @endauth
            @endforeach
                @if(count($products)==0)
                    <div class="w-full text-black ">
                        <span class="mx-auto text-center alert dark:text-white">
                            {{__('لاتوجد نتائج ')}}
                        </span>
                        <button wire:click="changeDept('all')">عرض النتائج في جميع الاقسام </button>

                    </div>
                    @endif

            @endisset





            @isset($product)
                <div class="w-full ">
                    @if($shopcart->where('id',$product->id)->count()>0)
                       @php $isincart=true;@endphp
                    @else
                       @php $isincart=false; @endphp
                    @endif


                    @include('components.productdeit',[
                        'reatavg'=>$product->reatsAvga(),
                        'product'=>$product,
                        "isliked"=>count($cart)>0?$cart->where('id',$product->id)->count():0
                        ,'openmodal'=>$openmodal,
                            'openmodal'=>$openmodal,
                                     'comments'=>$comments,
                                     'visit'=>$visit
])



                </div>

        @endisset


        </div>


</div>







    <div class="sm:w-1/4">
        <nav class="ml-2 text-sm font-medium text-gray-600 bg-white rounded-lg shadow-2xl " aria-label="Main Navigation">


            <h1 class="my-6 text-center text-black">{{__('الاقسام ')}} </h1>

            <a class=" @if(isset($deptid) && $deptid=='all') active bg-red-300 @endif flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
               wire:click="changeDept('all')"
            >
                <span>{{__('الكل')}}</span> </a>

            @foreach($depts as $dept)
            <a class=" @if(isset($deptid) && $deptid==$dept->id) active bg-red-300 @endif flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-100 hover:text-gray-900"
            wire:click="changeDept({{$dept->id}})"
            >
               <span>{{$dept->name}}</span> </a>

            @endforeach
        </nav>




    </div>

    </div>




    </div>



    <x-slot name="meta">
        @isset($product)
            <x-mate name="{{$product->name}}"
                    img="{{$product->Mimg}}" desc="{{$product->note}}"
                    url="{{request()->url()}}"
            />

        @endisset
    </x-slot>


</section>

