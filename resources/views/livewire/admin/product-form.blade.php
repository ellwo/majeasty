<div>

    @if (session()->get('stat') == 'ok')
        <div @onload="close" class="fixed p-4  pt-8 px-8  bg-green-500 text-white top-10 right-5 toast" role="alert"
            x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
            <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-blue-600">
                    {{ __(session()->get('title')) }}</span>
                <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            {{ __(session()->get('message')) }}
        </div>
    @endif




    <div class="lg:flex" dir="rtl">

        @if ($editproid == 'no')
        <form onsubmit="ajxaproform(event,this,'{{ url('admin/newproduct') }}')"
            class="addpro lg:w-full mx-auto border-blue-500 bg-white rounded-lg border dark:text-gray-500">
            @csrf
            <input type="hidden" value="{{ $editproid }}" id="editproid" name="editproid" />
            <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{ __('اضافة منتج ') }}
                    </h1>
                </div>
            </div>


            <div dir="auto" class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('الاسم') }}</label>
                    <input required id="name" name="name" value="{{ old('name') }}"
                        class="py-2 px-3 rounded-lg border-2
    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ __('الاسم') }}" />
                    @error('name')
                        <span class="text-sm text-red-800">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('السعر') }}</label>
                    <input required name="price" value="{{ old('price') }}"
                        class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="number" placeholder="{{ __('السعر') }}" />
                    @error('price')
                        <span class="text-sm text-red-800">{{ $message }}</span>
                    @enderror
                </div>

            </div>




            <div dir="auto" class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 md:mt-5 mx-7">

                <div class="  mt-1 ">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('القسم') }}</label>
                    <select required name="department_id" id="department_id"
                        class="py-2 @error('department') border-red-800 @enderror
                            px-3 rounded-lg w-full border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        @foreach ($depts as $c)
                            <option @if (isset($deptid) && $deptid == $c->id) selected @endif
                                value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('ملاحظات') }}</label>
                  <br/>
                        <textarea name="note"
                        class="py-1 w-full px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        rows="3">
    </textarea>

                    @error('department_id')
                        <span class="text-red-800 text-xs">{{ $message }}</span>
                    @enderror

                </div>
                <div class=" mt-1 text-center ">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('صورة المنتج') }}</label>

                    <style>
                        #imgviewsh canvas {
                            height: 100% !important;
                            width: 100% !important;
                            position: absolute;
                            top: 0px;

                        }

                    </style>

                    <div class=" relative pb-6 px-4 mb-4  mx-auto bg-green-500">
                        <button type="button" onclick="document.getElementById('imguploade').click()"
                            class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2">اختر
                            صورة</button>
                        <input type="hidden" name="imgurl" id="imgurl" />
                        <input id="imguploade" onchange="imginput($(this),event,650,'imgurl','imgview')"
                            class="imguploade hidden px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="imguploade" type="file" />
                        <div id="imgview">
                            <div id="imgviewimgv" class="object-center mx-auto text-center  py-4 mb-4 ">
                                <img class=" rounded-full h-32 w-32 mx-auto rounded-full image-full"
                                    src="https://via.placeholder.com/640x480.png/009988?text=illo" />
                            </div>
                        </div>

                    </div>

                    @error('imgurl')
                        <span class="text-red-800 text-xs">{{ $message }}</span>
                    @enderror
                </div>


            </div>

            <div class="flex ">
                <div class="grid grid-cols-1 md:mt-5 mx-auto ">
                    <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                        <button type="submit" class="btn btn-primary ">{{ __('حفظ') }}</button>
                        <a @click="showmodel=!showmodel"
                            class="btn btn-ghost text-red-800">{{ __('الغاء') }} </a>
                    </div>
                </div>


            </div>








            <input type="hidden" name="imgsurl" id="imgsurl" />

        </form>
        <div class="lg:w-full h-80 bg-green-500">

            <div class=" relative pb-6 px-4 mb-4  mx-auto bg-green-500">
                <button type="button" onclick="document.getElementById('imgsuploade').click()"
                    class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2">اختر
                    صورة</button>
                <input onchange="imgsuploades(event)" id="imgsuploade"
                    class="imguploade hidden px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    name="imguploade" type="file" multiple />


                <div class="lg:flex" id="rowsofimgs">

                    <input type="hidden" id="ic" value="0" />


                </div>


            </div>


        </div>
    @else
        <form id="updatepro" onsubmit="ajxaproform(event,this,{{ url('/updateproduct') }})"
            class="addpro lg:w-6/12 mx-auto border-red-800 rounded-lg border dark:text-gray-500">
            @csrf
            <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{ __('تعديل منتج ') }}
                    </h1>
                </div>
            </div>
            <input type="hidden" value="{{ $editproid }}" id="editproid" name="editproid" />

            <div dir="auto" class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('الاسم') }}</label>
                    <input required id="name" name="name" value="{{ $product->name }}"
                        class="py-2 px-3 rounded-lg border-2
    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="{{ __('الاسم') }}" />
                    @error('name')
                        <span class="text-sm text-red-800">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('السعر') }}</label>
                    <input required name="price" value="{{ $product->price }}"
                        class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="number" placeholder="{{ __('السعر') }}" />
                    @error('price')
                        <span class="text-sm text-red-800">{{ $message }}</span>
                    @enderror
                </div>

            </div>


            <div dir="auto" class="flex mt-5 mx-7">
                <div class="md:w-6/12">

                    <label
                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('القسم') }}</label>
                <select required name="department_id" id="department_id"
                    class=" @error('department') border-red-800 @enderror
                             rounded-lg border-2 w-full border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    @foreach ($depts as $c)
                        <option @if ($product->department_id == $c->id) selected @endif
                            value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
                <label
                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('ملاحظات') }}</label>

                <br/>
            <textarea name="note"
                class="py-1 w-full px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                rows="5">
{{ $product->note }}</textarea>

                </div>

                <div class="w-6/12">

                    <div class="  mt-1 text-center ">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ __('صورة المنتج') }}</label>

                        <style>
                            #imgviewsh canvas {
                                height: 100% !important;
                                width: 100% !important;
                                position: absolute;
                                top: 0px;

                            }

                        </style>

                        <div class="  pb-6 px-4 mb-4  mx-auto">
                            <button type="button" onclick="document.getElementById('imguploade').click()"
                                class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2">اختر
                                صورة</button>
                            <input type="hidden" name="imgurl" value="{{ $product->Mimg }}"
                                id="imgurl" />
                            <input id="imguploade" onchange="imginput($(this),event,650,'imgurl','imgview')"
                                class="imguploade hidden px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                name="imguploade" type="file" />
                            <div id="imgview">
                                <div id="imgviewimgv"
                                    class="object-center mx-auto text-center  py-4 mb-4 ">
                                    <img class=" rounded-full h-32 w-32 mx-auto rounded-full image-full"
                                        src="{{ $product->Mimg }}" />
                                </div>
                            </div>

                        </div>

                        @error('imgurl')
                            <span class="text-red-800 text-xs">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

            </div>



            <div class="flex ">
                <div class="grid grid-cols-1 md:mt-5 mx-auto ">
                    <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                        <button type="submit"
                            class="btn btn-primary ">{{ __(' حفظ التعديلات') }}</button>
                        <a @click="showmodel=!showmodel"
                            class="btn btn-ghost text-red-800">{{ __('الغاء') }} </a>
                    </div>
                </div>


            </div>








            <input type="hidden" name="imgsurl" id="imgsurl" />
        </form>









        <div class="lg:w-6/12 h-80 bg-green-500">


            <h1> her</h1>
            <div name="newimage" id="newimage">
            </div>





            <div class=" relative pb-6 px-4 mb-4  mx-auto bg-green-500">
                <button type="button" onclick="document.getElementById('imgsuploade').click()"
                    class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2">اختر
                    صورة</button>
                <input onchange="imgsuploades(event)" id="imgsuploade"
                    class="imguploade hidden px-3 @error('address') border-red-800 @enderror rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    name="imguploade" type="file" multiple />


                <div class="lg:flex" id="rowsofimgs">

                    <input type="hidden" id="ic" value="{{ count($product->imgs) + 1 }}" />

                    @for ($i = 0; $i < count($product->imgs); $i++)
                        <div id="imgview{{ $i }}" class="flex-1 rounded-lg m-2 ">
                            <div id="imgview{{ $i }}imgv"
                                class="object-center mx-auto text-center  py-4 mb-4 ">
                                <img class=" rounded-full h-32 w-32 mx-auto rounded-full image-full"
                                    src="{{ $product->imgs[$i] }}" />
                            </div>
                        </div>
                    @endfor


                </div>


            </div>


        </div>

    @endif





    </div>




    <div x-data="{showmodel : {{ $showmodel }}}">
        <a @click="showmodel=true" class="cursor-pointer text-white bg-blue-900 btn btn-sm p-1 mb-2  ">
            اضافة منتج
            <x-bi-cart class="w-6 h-6 text-yellow-400" />



        </a>

        <div x-show="showmodel" :class="{'opacity-100 visible modal-open': showmodel}" class="dialog dialog-lg modal ">
            <div class="dialog-content modal-box">
                <div class="dialog-header dark:text-black">اضافة منتج
                    <button type="button" class="btn btn-light btn-sm btn-icon" aria-label="Close"
                        wire:click="cancelEdit()" @click="showmodel=!showmodel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></button>
                </div>
                <div class="dialog-body modal-box" dir="auto">



                </div>
            </div>
        </div>
    </div>













    <x-slot name="script">

        <script>
        //alert("sk");
        newimage=new ImagetoServer("","newimage");
       // newimage.create();
        </script>

    </x-slot>


</div>
