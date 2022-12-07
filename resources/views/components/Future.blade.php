@props(['dept'=>'','name'=>'','img'=>'','note'=>'note','id'=>'0'])
<div {{ $attributes->merge(['class' =>"lg:w-3/12 sm:w-6/12 w-full"])}}>

    <section class="  py-12 flex justify-center">
        <div class="bg-white dark:bg-gray-800  mx-8  shadow-lg rounded-lg">
            <div class="w-full block">
               <a href="{{url('product/'.$id.'?name'.$name)}}">
                <img class="rounded-t-lg " src="{{$img}}"/></a>
            </div>

            <div class=" px-6   w-full block">
<a href="{{url('product/'.$id)}}">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white flex-nowrap">{{__($name)}} </h2>
                </a>
                @php
                    $v=$note;
$v1="";$v2="";


                    if(strlen($v)>80){
                         $v1=substr($v,0,80);
                         $v2=substr($v,80,strlen($v));
                    }
                    else
                        $v1=$note;



                @endphp

                <div class="collapse  border rounded-box border-base-300 collapse-arrow">
                    <input type="checkbox">
                    <div class="collapse-title ">
                        I{{$v1}}.
                    </div>
                    <div class="collapse-content m-0">
                        <p>
                            {{$v2}}
                        </p>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{url('product/'.$id.'?name'.$name)}}"
                       class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-red-900 rounded-md hover:bg-gray-700">{{__('Show')}} </a>
                </div>
            </div>
        </div>
    </section>

</div>








