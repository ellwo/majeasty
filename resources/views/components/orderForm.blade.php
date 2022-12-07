
@if(count($errors)>0)



    <div class="fixed  p-10 px-8 bg-red-600 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
        <div class="flex items-center justify-between mb-1">
            <span class="font-bold text-3xl text-red-800">
        {{__('عذرا !!')}}</span>
            <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        {{__('هناك بعض المعلومات الناقصة او غير الصحيحة')}}
        <a @isset($id) href="#{{$id}}" @else href="#my-modal" @endisset class="btn ">{{__('عرض ')}}</a>
    </div>
@endif

@if( session()->get('stat')=='ok')

    <div class="fixed p-4   bg-green-500 text-white bottom-5 right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
        <div class="flex items-center justify-between mb-1">
            <span class="font-bold text-blue-600">
        {{__(session()->get('title'))}}</span>
            <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        {{__(session()->get('message'))}}
    </div>
    @endif
<div  @isset($id) id="{{$id}}" @else id="my-modal" @endisset
      :class="{'opacity-100 visible modal-open': openmodal}"
    {{ $attributes->merge(['class' =>'modal  mx-auto'])}}>
    <div class="modal-box bg-white">

        <div class="dialog-header">{{env('APP_NAME')}}
            <a  @click="openmodal=false" class="btn btn-light btn-sm btn-icon" aria-label="Close" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
        </div>


        <form  method="post"

               @auth
                   action="{{route('neworder')}}"
                   @else
               action="{{route('newNoorder')}}"
               @endauth
               class="sm:w-full mx-auto">
           @csrf



            <input type="hidden" name="product_id" value="{{$proid}}" />
            <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{__('تقديم طلب')}}</h1>
                </div>
            </div>



            @guest
            <div class="grid grid-cols-1 md:mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الاسم')}}</label>
                <input  name="name" value="{{old('name')}}" class="py-2 px-3 rounded-lg border-2
                    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('الاسم')}}" />
                @error('name')
                <span class="text-sm text-red-800">{{$message}}</span>
                @enderror

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الايميل')}}</label>
                    <input class="py-2 px-3 @error('email') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                           name="email" value="{{old('email')}}"  type="email"  placeholder="email@me.com" />
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('رقم الهاتف')}}</label>
                    <input name="phone"  value="{{old('phone')}}"
                           class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('رقم الهاتف')}}" />
                </div>

            </div>

            @endguest





            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 md:mt-5 mx-7">

                <div class="grid grid-cols-1 md:mt-5 mt-1 ">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('المدينة')}}</label>
                    <select name="city_id"
                        class="py-2 @error('city_id') border-red-800 @enderror px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">


                        @foreach($city as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>

                    @error('city_id')
                    <span class="text-red-800 text-xs">{{$message}}</span>
                    @enderror

                </div>
                <div class="grid grid-cols-1 md:mt-5 mt-1 ">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('العنوان')}}</label>
                    <input class=" px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                           name="address"
                           type="text"  />
                    @error('address')
                    <span class="text-red-800 text-xs">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="flex ">
            <div class="grid grid-cols-1 md:mt-5 mx-auto ">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الكمية')}}</label>
                <input name="qun" required @isset($qun) value="{{$qun}}"  @else value="1" @endisset min="1" type="number"
                       class="py-1 px-1 @error('qun') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">

            </div>


            <div class="grid grid-cols-1  md:mt-5 mt-1  ">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('ملاحظات')}}</label>
                <textarea class="py-1 px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3" >
                    </textarea>
            </div>
            </div>




            <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                <button type="submit" class="btn btn-primary">{{__('ارسال الطلب')}}</button>
                <a href="#mo" class="btn btn-ghost text-red-800">{{__('الغاء')}} </a>
            </div>




        </form>




    </div>
</div>
