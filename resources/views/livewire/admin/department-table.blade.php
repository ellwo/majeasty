
<div class="overflow-x-auto"
 {{-- x-data="{showform:{{$showform}}}" --}}
 >






    <div class=" overflow-x-auto bg-transparent w-full flex items-center justify-center  font-sans ">
        <div class="w-full lg:w-5/6">
            <div class="rounded-t bg-white dark:bg-dark-eval-2 mb-0 px-4 py-3 border-0">

                <div class="flex flex-wrap items-center">



                    @if($deleteDept!="no")

                        <div x-data="{dpm{{$deleteDept}}: 1}">
                            <div  x-show="dpm{{$deleteDept}}" class="dialog">
                                <div class="dialog-content">
                                    <div class="dialog-header dark:text-black">هل انت متاكد من الحذف
                                    </div>
                                    <div class="dialog-body lg:flex" dir="auto">
                                        <h1 class="text-2xl text-red-800 font-bold p-4 rounded-lg ">
                                            سيتم حذف جميع منتجات هذا القسم وطلباته ؟
                                            هل انت متأكد من الحذف ؟؟!!
                                        </h1>
                                    </div>
                                    <div class="dialog-footer flex mx-auto">
                                        <button type="button" class="btn btn-light"
                                                wire:click="setDeleteDept('no')"
                                                @click="dpm{{$deleteDept}}=!dpm{{$deleteDept}}">Cancel</button>
                                        <button type="button" wire:click="DeleteDept({{$deleteDept}})"  class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                @if($dept_id!="no")

                        <form
                            dir="auto"

                            onsubmit="ajxaproform(event,this,'{{route('departments.update')}}')"
                            class="addpro lg:w-6/12 mx-auto s dark:text-gray-500">
                            @csrf
                            <input type="hidden"  id="dept_id" name="dept_id" value="{{$dept_id}}"/>
                            <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                                <div class="flex">
                                    <a  class="btn bg-green-500">
                                        <h1 class="text-white dark:text-white font-bold md:text-2xl text-xl">{{__('تعديل قسم +')}}</h1>
                                    </a>
                                </div>
                            </div>


                            <div
                             {{-- x-show="showform" --}}
                             @if ($showform==0)
                                style="display: none;"
                            @endif
                              class="transition-all   transform transition rounded-lg border-blue-600 border sm:flex  p-4  mt-4">

                                <div class="w-6/12">


                                    <div class="mt-4 mx-auto">
                                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الاسم')}}</label>
                                        <input required  id="name" name="name"  value="{{$dept->name}}" class="py-2 px-3 rounded-lg border-2
                    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('الاسم')}}" />
                                        @error('name')
                                        <span class="text-sm text-red-800">{{$message}}</span>
                                        @enderror
                                    </div>


                                    <div class="mx-auto ">
                                        <label class="uppercase  md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('ملاحظات')}}</label>
                                        <textarea
                                            name="note"

                                            class="py-1 px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3" >
                   {{$dept->note}} </textarea>
                                        @error('note')
                                        <span class="text-sm text-red-800">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="w-6/12">
                                    <div class=" mt-1 text-center flex-col ">
                                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('صورة القسم')}}</label>
                                        <div class=" relative  px-4 mb-4  mx-auto ">
                                            <button type="button" onclick="document.getElementById('imguploade').click()" class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2" >اختر صورة</button>
                                            <input type="hidden" name="imgurl" value="{{$dept->img}}"  id="imgurl"  />
                                            <input id="imguploade" onchange="imginput($(this),event,650,'imgurl','imgview')" class="imguploade hidden "
                                                   name="imguploade"
                                                   type="file" />
                                            <div id="imgview">
                                                <div id="imgviewimgv" class="object-center mx-auto text-center  py-4 mb-4 " >
                                                    <img class=" rounded-full h-32 w-32 mx-auto rounded-full image-full" src="{{$dept->img}}"/>
                                                </div>
                                            </div>

                                        </div>

                                        @error('imgurl')
                                        <span class="text-red-800 text-xs">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="grid grid-cols-1  mx-auto ">
                                            <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                                                <button type="submit" class="btn btn-primary ">{{__('حفظ')}}</button>
                                                <a wire:click="cancelEdit"  class="btn btn-ghost text-red-800">{{__('الغاء')}} </a>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                            </div>





                            <input type="hidden" name="imgsurl"  id="imgsurl"  value="{{$dept->img}}" />

                        </form>

                    @else
                    <form
                         dir="auto"
                         onsubmit="ajxaproform(event,this,'{{route('departments.store')}}')"
                        class="addpro lg:w-6/12 mx-auto s dark:text-gray-500">
                        @csrf
                        <div class="flex justify-center lg:w-3/4 md:w-6/12 mx-auto">
                            <div class="flex">
                                <a wire:click="setDept_id('no')" class="btn bg-green-500">
                                <h1 class="text-white dark:text-white font-bold md:text-2xl text-xl">{{__('اضافة قسم +')}}</h1>
                                </a>
                            </div>
                        </div>


                        <div
                         {{-- x-show="showform" --}}
                         @if ($showform==0)
                         style="display: none;"
                     @endif
                          class="transition-all transform transition rounded-lg border-blue-600 border sm:flex  p-4  mt-4">

                      <div class="w-6/12">


                          <div class="mt-4 mx-auto">
                          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('الاسم')}}</label>
                          <input required  id="name" name="name"  value="{{old('name')}}" class="py-2 px-3 rounded-lg border-2
                    border-blue-300 @error('name') border-red-800 @enderror mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="{{__('الاسم')}}" />
                          @error('name')
                          <span class="text-sm text-red-800">{{$message}}</span>
                          @enderror
                          </div>


                          <div class="mx-auto ">
                          <label class="uppercase  md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('ملاحظات')}}</label>
                          <textarea
                              name="note"
                              class="py-1 px-1 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" rows="3" >
                    </textarea>
                          @error('note')
                          <span class="text-sm text-red-800">{{$message}}</span>
                          @enderror
                          </div>
                      </div>




                            <div class="w-6/12">
                          <div class=" mt-1 text-center flex-col ">
                              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('صورة القسم')}}</label>

                              <style>
                                  #imgviewsh canvas{
                                      height: 100% !important;
                                      width: 100% !important;
                                      position: absolute;
                                      top:0px;

                                  }
                              </style>

                              <div class=" relative  px-4 mb-4  mx-auto ">
                                  <button type="button" onclick="document.getElementById('imguploade').click()" class="btn btn-ghost bg-white w-full text-blue-700 rounded-lg  mt-2" >اختر صورة</button>
                                  <input type="hidden" name="imgurl"  id="imgurl"  />
                                  <input id="imguploade" onchange="imginput($(this),event,650,'imgurl','imgview')" class="imguploade hidden "
                                         name="imguploade"
                                         type="file" />
                                  <div id="imgview">
                                      <div id="imgviewimgv" class="object-center mx-auto text-center  py-4 mb-4 " >
                                          <img class=" rounded-full h-32 w-32 mx-auto rounded-full image-full" src="https://via.placeholder.com/640x480.png/009988?text=illo"/>
                                      </div>
                                  </div>

                              </div>

                              @error('imgurl')
                              <span class="text-red-800 text-xs">{{$message}}</span>
                              @enderror
                          </div>

                          <div class="flex flex-col">
                              <div class="grid grid-cols-1  mx-auto ">
                                  <div class="md:mt-8 mt-1 md:mb-4 mb-1 mx-auto">
                                      <button type="submit" class="btn btn-primary ">{{__('حفظ')}}</button>
                                      <a wire:click="cancelEdit"  class="btn btn-ghost text-red-800">{{__('الغاء')}} </a>
                                  </div>
                              </div>


                          </div>


                            </div>

                        </div>





                        <input type="hidden" name="imgsurl"  id="imgsurl"  />

                    </form>

                        @endif

                </div>
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full sm:px-4 max-w-full flex-grow sm:flex-1">
                        <h3 class="font-semibold relative mb-4 flex text-base text-blueGray-700">
                            {{__('المنتجات')}}
                            <x-bi-cart-fill class="w-10 h-10 text-yellow-400 flex"/>
                            <span class="rounded-full p-1 bg-indigo-500 ">+</span>

                        </h3>
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon" role="button">
                                <x-bi-search aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input wire:model="search" name="search" withicon id="search" class="block rounded-full w-full" type="text"  :value="old('name')"
                                     required autofocus placeholder="{{ __('ابحث') }}" />
                        </x-input-with-icon-wrapper>

                    </div>





                    <div class="flex mt-4 dark:text-white flex-col ">


                        {{$departments->links()}}
                    </div>




                    <div class="bg-white overflow-x-auto relative dark:bg-dark-eval-2 dark:text-white w-full shadow-md rounded my-6">

                        <div class="w-full top-0 bottom-0 z-30 bg-white bg-opacity-50 absolute" wire:loading
                             wire:target="changeDept,changePro,subsearch,gotoPage,nextPage,perviousPage,setDept_id" >
                            <div class="w-full h-4 bg-blue-900 mt-16 rounded animate-pulse top-10 bottom-0 my-auto"></div>
                        </div>


                        <table class="min-w-max w-full table-auto overflow-x-auto">
                            <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm ">

                                <th class="py-3 px-2  text-left">القسم

                                    <select class=" form-select w-6/12  lg:w-1/4   flex-1 form-select-sm" id="bydate" wire:model="dateorder">
                                        <option value="no">بلا</option>
                                        <option value="ASC">  تصاعدي</option>
                                        <option value="DESC">تنازلي</option>
                                    </select></th>
                                <th class="py-3 px-2  text-left"> عدد المنتجات</th>

                                <th class="py-3  text-center">Actions</th>
                            </tr>
                            </thead>


                            <tbody   class="text-gray-600 dark:text-white text-sm font-light">


                            @foreach($departments as $d)
                            <tr  class="border-b relative border-gray-200 hover:bg-gray-100 dark:hover:bg-dark-bg dark:hover:text-black">
                                <td   class="py-3 px-2 mb-4 text-left" >
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-10 h-10 rounded-full" src="{{$d->img}}"/>
                                        </div>
                                        <span class="font-bold">{{$d->name}}
                                            </span>
                                    </div>
                                    <div>
                                        <span class=" mb-6 mt-4 text-green-600 font-bold py-1 px-1  text-xs">
                                    {{date('d/M/Y', strtotime($d->updated_at))}}
                                            </span></div></td>


                                <td>
                                    {{$d->products_count}}
                                </td>


                                <td class="py-3   text-right">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4  mr-2 mt-2 cursor-pointer transform hover:text-purple-500 hover:scale-110">
                                            <a target="_blank" class="" href="{{url('product/'.$d->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>


                                        </div>
                                        <div wire:click="setDept_id({{$d->id}})"  class="w-4 mr-2 mt-2 cursor-pointer transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div wire:click="setDeleteDept({{$d->id}})" class="w-4 mr-2 mt-2 cursor-pointer transform hover:text-red-800 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
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
        </div>
    </div>

    @if( session()->get('statt')=='ok')

        <div class="fixed p-4   bg-green-500 text-white top-10 w-32 mx-auto right-5 toast" role="alert" x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
            <div class="flex items-center justify-between mb-1">
            <span class="font-bold text-blue-600">
        {{__(session()->get('title'))}}</span>
                <button class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            {{__(session()->get('message'))}}
        </div>
    @endif
</div>
