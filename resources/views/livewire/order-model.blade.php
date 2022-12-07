


<div >






<div
    @isset($proid) id="{{$proid}}" @else id="my-modal" @endisset
class="modal mx-auto  @if ($open==1)
opacity-100 visible modal-open
@endif"

dir="rtl"

>
    <div class="bg-white modal-box">

        <div class="dialog-header">{{env('APP_NAME')}}
            <a  wire:click="closemodal()"  class="btn btn-light btn-sm btn-icon" aria-label="Close" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
        </div>


        <form   wire:submit.prevent="addorder"
               class="mx-auto overflow-y-scroll sm:overflow-y-visible sm:w-full">
            @csrf



            <input type="hidden"  wire:model="proid" />
            <div class="flex justify-center mx-auto lg:w-3/4 md:w-6/12">
                <div class="flex">
                    <h1 class="text-xl font-bold text-gray-600 md:text-2xl">{{__('تقديم طلب')}}</h1>
                </div>
            </div>



            @guest
                <div class="grid grid-cols-1 mt-2 mx-7">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('الاسم')}}</label>
                    <input  name="name" wire:model.lazy="name" value="{{old('name')}}" class="py-2 px-3 rounded-lg border-2
                    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('الاسم')}}" />
                    @error('name')
                    <span class="text-sm text-red-800">{{$message}}</span>
                    @enderror

                </div>

                <div class="grid grid-cols-1 gap-5 mt-2 md:grid-cols-2 md:gap-8 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('الايميل')}}</label>
                        <input dir="ltr" wire:model.lazy="email" class="py-2 px-3 @error('email') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                               name="email" value="{{old('email')}}"  type="email"  placeholder="email@me.com" />
                        @error('email')
                        <span class="text-sm text-red-800">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('رقم الهاتف')}}</label>
                        <input dir="ltr" name="phone" wire:model.lazy="phone"  value="{{old('phone')}}"
                               class="px-3 py-2 mt-1 border-2 border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('رقم الهاتف')}}" />
                        @error('phone')
                        <span class="flex text-sm text-red-800">{{$message}}</span>
                        @enderror
                    </div>

                </div>

            @endguest





            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-8 md:mt-2 mx-7">

                <div class="grid grid-cols-1 mt-2 ">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('المدينة')}}</label>
                    <select name="city_id" wire:model.lazy="city_id"
                            class="py-2 @error('city_id') border-red-800 @enderror px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">


                        @foreach($city as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>

                    @error('city_id')
                    <span class="text-xs text-red-800">{{$message}}</span>
                    @enderror

                </div>
                <div class="grid grid-cols-1 md:mt-2 ">
                    <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('العنوان')}}</label>
                    <input wire:model.lazy="address"  class=" px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                           name="address"
                           type="text"  />
                    @error('address')
                    <span class="text-xs text-red-800">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 ">
                <div class="grid grid-cols-1 mx-auto md:mt-2 ">

<div dir="ltr" class="custom-number-input h-10 w-32" x-data="{qun:1}">
    <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">{{__('الكمية')}}
    </label>
    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
        <button type="button" @click="qun > 1 ? qun--:''; $wire.muns()" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
            <span class="m-auto text-2xl font-thin">−</span>
        </button>
        <input x-model="qun"  wire:model="qun" type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" />
        <button type="button" @click="qun++;$wire.plus()" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
            <span class="m-auto text-2xl font-thin">+</span>
        </button>
    </div>
</div>


                </div>


                <div class="grid grid-cols-1  mt-3 md:mt-5 ">
                    <label class="text-xs text-right font-semibold text-gray-500 uppercase md:text-sm text-light">{{__('ملاحظات')}}</label>
                    <textarea wire:model.lazy="note" class="px-1 py-1 mt-1 border-2 border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3" >
                    </textarea>
                </div>
            </div>




            <div class="mx-auto mt-1 mb-1 md:mt-8 md:mb-4">
                <button type="submit" class="border rounded-md bg-success text-white p-2 mx-2">{{__('ارسال الطلب')}}</button>
                <a  wire:click="closemodal()" class="text-red-800 btn btn-ghost">{{__('الغاء')}} </a>
            </div>




        </form>




    </div>


</div>

</div>
