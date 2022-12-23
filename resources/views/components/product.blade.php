
<div data-wow-wait="1s" data-wow-delay="1s" class ="w-full p-0 mx-auto text-sm wow fadeInUp sm:w-6/12 xl:w-1/3 lg:w-6/4" >
    <div   class="p-1 m-1 border-2 rounded-box hover:bg-white hover:text-black hover:border-yellow-900 ">
       <div dir="rtl" class="relative flex justify-start space-x-2">
        <div class="" x-data="{img:'{{ $product->Mimg }}'}">
             <div class="relative inline-flex items-center justify-center flex-shrink-0 w-full h-full mx-auto mb-5 rounded-full">

            <a   wire:click="changePro({{$id}})">
            <img x-on:mouseleave="img='{{ $product->Mimg  }}'" x-on:mouseenter="img='{{ count($product->imgs??[])>0?$product->imgs[rand(0,count($product->imgs)-1)]:$product->Mimg }}'"
            class="object-cover object-center w-full h-24 rounded-t-lg cursor-pointer md:h-32 " src="{{ $product->Mimg }}" alt="blog">
            </a>

            <div style="" class="absolute top-0 right-0 text-xs bg-red-700 badge badge-sm">NEW</div>

        </div>
    </div>


        <div class="pr-2 mr-2 border-r ">
            <h2  class="mb-1 overflow-hidden text-sm font-medium tracking-widest text-right text-black uppercase hover:text-red-800 title-font">
                <a class="font-bold cursor-pointer " dir="rtl" wire:click="changePro({{$id}})">


                    @php

                        $len=Str::length($name);

                        $name2=$name;
                        if($len>32){
                        $name2=Str::substr($name, 0, 29);
                        $name2.="...";

                    }




                    @endphp




                    {{$name2}}</a>
                    {{-- <a wire:click="setBrand({{$product->brand?->id}})" class="inline-flex justify-between p-1 text-xs text-indigo-700 border rounded-md cursor-pointer dark:text-info-light hover:underline">{{$product->brand?->name}}
                        <img class="inline-flex w-6 h-6 mx-1 border rounded-full" src="{{ $product->brand?->img }}" />
                        </a> --}}

            </h2>

            <strong class="absolute bottom-0 right-0 flex text-sm bg-white badge badge-accent badge-lg ">
                {{-- {{$price}} R.Y <span class="text-sm"> /one </span> --}}
                {{-- <div class="flex">
                    @for($i=1; $i<=$reatavg; $i++)
                        <x-bi-star-fill class="w-4 h-4 text-yellow-400 " />
                    @endfor
                    @for($j=1; $j<=5-$reatavg; $j++)
                        <x-bi-star-fill class="w-4 h-4 text-gray-800" />
                    @endfor
                </div> --}}
            </strong>

            <hr>
            <div class="grid grid-cols-1 gap-2 mt-1 text-right">
                <a class="text-xs cursor-pointer text-info">
                    {{ $product->department?->name }}
                </a>
                <div class="flex flex-wrap ">
                    @foreach ($product->parts??[] as $item)
                    <a class="p-1 text-xs border rounded-md">
                        {{ $item->name }}
                    </a>
                    @endforeach
                </div>
{{--
                <div class="flex">
                    @for($i=1; $i<=$reatavg; $i++)
                        <x-bi-star-fill class="w-4 h-4 text-yellow-400 " />
                    @endfor
                    @for($j=1; $j<=5-$reatavg; $j++)
                        <x-bi-star-fill class="w-4 h-4 text-gray-800" />
                    @endfor
                </div> --}}
            </div>


            <div class="p-1 card-actions">
                {{-- @if(isset($isincart) && $isincart==1)
                <a
                    class="btn-sm ">
                    <x-bi-cart-fill  aria-hidden="true" class="w-6 h-6 text-yellow-400" />
                    <span class="text-xs ">في السلة</span>
                </a>
                @else
                    <a  wire:click="addtocart({{$id}})"
                        class="text-black btn btn-outline btn-sm hover:btn-accent ">

                        <x-bi-cart  aria-hidden="true" class="w-6 h-6" />
                    </a>

                @endif --}}

                @if($isliked>0)

                    <a wire:click="dislike('{{$cart->where('id',$pro->id)->pluck('rowId')->first()}}')" class="relative p-2 text-red-800 cursor-pointer ">

                        <x-heroicon-s-heart  aria-hidden="true" class="w-10 h-10 hover:text-red-800" />
                    </a>

                    @else

                    <a wire:click="like({{$id}})" class="relative p-2 text-black cursor-pointer ">

                        <x-heroicon-s-heart  aria-hidden="true" class="w-10 h-10 hover:text-red-800" />
                    </a>


                @endif

            </div>
    </div>




    </div>




        {{-- Hear is The Share Menu--}}
        {{-- <div class="w-full py-0 bg-light ">
            <ul  class="flex justify-center w-full px-2 border border-red-700 shadow-lg rounded-box horizontal">
                <li>
                    <a href="whatsapp://send?text={{url('product/'.$deptid.'/'.$id)}}">
                        <x-bi-whatsapp class="w-4 h-4 m-2 text-green-600" />
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/sharer.php?u={{url('product/'.$deptid.'/'.$id)}}" rel="me" target="_blank">
                        <x-bi-facebook class="w-4 h-4 m-2 text-blue-600" />
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com/share?url={{url('product/'.$deptid.'/'.$id)}}">
                        <x-bi-twitter class="w-4 h-4 m-2 text-blue-900"/>

                    </a>
                </li>
                <li>
                    <a href="shareto://send?text={{url('product/'.$deptid.'/'.$id)}}">
                        <x-bi-share class="w-4 h-4 text-accent" />
                    </a>
                </li>

            </ul>
        </div> --}}
    </div>
</div>

{{--  End  Products  Hear --}}







{{--  End  Products  Hear --}}
