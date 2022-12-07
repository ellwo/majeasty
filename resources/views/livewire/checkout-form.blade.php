<div  x-data="{openform:0}">

    @if( session()->get('stat')=='ok')

        <div x-show="open"  class="fixed p-4  pt-8 px-8  bg-green-500 text-white top-10 right-5 toast"  x-data="{ open: true }" >
            <div class="flex items-center justify-between mb-1">
            <span class="font-bold text-blue-600">
        {{__(session()->get('title'))}}</span>
                <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            {{__(session()->get('message'))}}
        </div>
    @endif





    <div  >
        <a
        @click="openform=1" class="cursor-pointer text-white bg-blue-900 btn btn-sm p-1 mb-2  ">
            اطلب الكل
            <x-bi-cart class="w-6 h-6 text-yellow-400"/>



        </a>

        <div wire:ignore class="dialog dialog-full" x-show="openform"  >
            <div class="dialog-content">
                <div class="dialog-header">
                    <button type="button"
                            class="btn btn-light btn-sm btn-icon" aria-label="Close" @click="openform=0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
                <div class="dialog-body ">


                    <div class="mx-auto w-full bg-white text-black">

                        <div class="rounded-lg mx-auto bg-gray-300">
                            <span class="font-bold">عدد المنتجات:</span>
                            {{$cart->count()}}
                            <hr/> <span class="font-bold">اجمالي السعر:</span>
                            {{Cart::instance('shopcart')->priceTotal()}}
                            <hr/> <span class="font-bold">Info:</span>
                            lx ljs skks kx;;c
                            <hr/> <span class="font-bold">Info:</span>
                            lx ljs skks kx;;c
                            <hr/>

                        </div>




                    </div>

                    <form  wire:submit.prevent="checkout"
                           class=" mx-auto dark:text-gray-500">
                        @csrf
                        <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                            <div class="flex">
                                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{__('تقديم طلب')}}</h1>
                            </div>
                        </div>



                        @guest
                            <div class="grid grid-cols-1 md:mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الاسم')}}</label>
                                <input  name="name" wire:model.lazy="name" value="{{old('name')}}" class="py-2 px-3 rounded-lg border-2
                    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('الاسم')}}" />
                                @error('name')
                                <span class="text-sm text-red-800">{{$message}}</span>
                                @enderror

                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الايميل')}}</label>
                                    <input class="py-2 px-3 @error('email') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                         wire:model.lazy="email"  name="email" value="{{old('email')}}"  type="email"  placeholder="email@me.com" />
                                    @error('email')
                                    <span class="text-sm text-red-800">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('رقم الهاتف')}}</label>
                                    <input wire:model.lazy="phone" name="phone"  value="{{old('phone')}}"
                                           class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('رقم الهاتف')}}" />
                                    @error('phone')
                                    <span class="text-sm text-red-800">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>

                        @endguest





                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 md:mt-5 mx-7">

                            <div class="grid grid-cols-1 md:mt-5 mt-1 ">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('المدينة')}}</label>
                                <select name="city_id"
                                        wire:model.lazy="city_id"
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
                                       wire:model.lazy="address"
                                       type="text"  />
                                @error('address')
                                <span class="text-red-800 text-xs">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="flex ">
                            <div class="grid grid-cols-1 md:mt-5 mx-auto ">
                                <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                                    <button type="submit" class="btn btn-primary">{{__('ارسال الطلب')}}</button>
                                    <a href="#mo" class="btn btn-ghost text-red-800">{{__('الغاء')}} </a>
                                </div></div>


                            <div class="grid grid-cols-1  md:mt-5 mt-1  ">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('ملاحظات')}}</label>
                                <textarea
                                    wire:model.lazy="note"
                                    class="py-1 px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3" >
                    </textarea>
                            </div>
                        </div>









                    </form>



                </div>
                <div class="dialog-footer mt-4">
                    <button type="button" class="btn btn-light" @click="openform=0">Close</button>

                </div>
            </div>
        </div>
    </div>




</div>
