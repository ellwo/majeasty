<div class="overflow-x-auto" x-data="locform()">


    <div class=" overflow-x-auto bg-transparent w-full flex items-center justify-center  font-sans ">
        <div class="w-full  lg:w-5/6">
            <div class="rounded-t md:min-h-screen bg-white dark:bg-dark-eval-2 mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full sm:px-4 max-w-full flex-grow sm:flex-1">
                        <h3 class="font-semibold relative mb-4 flex text-base text-blueGray-700">
                            {{ __('نقاط البيع') }}
                            <x-bi-map class="w-10 h-10 text-yellow-400 flex" />

                        </h3>
                        {{-- <x-input-with-icon-wrapper>
                            <x-slot name="icon" role="button">
                                <x-bi-search aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input wire:model="search" name="search" withicon id="search"
                                class="block rounded-full w-full" type="text" :value="old('name')" required autofocus
                                placeholder="{{ __('ابحث') }}" />
                        </x-input-with-icon-wrapper> --}}
{{--
                        <div class="w-full  mb-4 flex" dir="auto">
                            <label class=" text-xs  dark:text-white text-black sm:px-4" for="bydate">ترتيب
                                التاريخ</label>
                            <select class=" form-select flex-1 form-select-sm" id="bydate" wire:model="dateorder">
                                <option value="no">بلا</option>
                                <option value="ASC"> تصاعدي</option>
                                <option value="DESC">تنازلي</option>
                            </select>
                        </div> --}}

                    </div>
                    <div x-data='{openform:true}' class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">


                        <a @click="openform=!openform" class="cursor-pointer text-white hover:text-dark bg-blue-900 btn btn-sm p-1 mb-2  ">
                            اضافة فرع
                            <x-bi-map class="w-6 h-6 text-yellow-400" />
                        </a>

                        <div x-show="openform"  class="  w-full rounded border">

                            <form dir="ltr" x-on:submit.prevent="submitForm"   >
                                @csrf
                               <div dir="rtl" class="md:flex  space-x-2 align-right items-center">

                                <div class="flex md:w-3/4 flex-col space-y-4 p-2">


                                    <div class="space-y-2 w-full" >
                                        <x-label :value="__('المدينة')" />
                                        <select x-model="city_id" class="bg-white rounded  w-full dark:bg-dark-bg" name="city_id" id="">
                                            @foreach ($city as $ci)
                                                <option value="{{ $ci->id }}">{{ $ci->name }}</option>
                                            @endforeach

                                        </select>

                                    @error('city_id')
                                    <span class="text-sm text-danger">{{ $message }}</span>

                                    @enderror
                                    </div>
                                    <div class="space-y-2" >
                                        <x-label :value="__('اسم نقطة البيع')" />

                                    <x-input x-model="name" name="name"  class=" p-2
                                    @error('name')
                                    border-danger
                                    @enderror border w-full border-info text-right " placeholder="اسم" value="{{ old('name') }}"/>

                                    <span class="text-sm text-danger" x-text="errors.name"></span>
                                    </div>

                                    <div class="space-y-2" >
                                        <x-label :value="__('العنوان')" />

                                    <x-input name="address" x-model="address" type="address"  class=" p-2
                                    @error('name')
                                    border-danger
                                    @enderror border w-full border-info text-right " placeholder="العنوان" value="{{ old('name') }}"/>

                                    <span class="text-sm text-danger" x-text="errors.address"></span>

                                    </div>


                                    <hr>

                                </div>

                                <div class="flex flex-col space-y-4 p-2">

                                    <div dir="ltr" class="space-y-2" x-data='{pc:2}'>
                                        <x-label :value="__('ارقام التواصل')" />
                                        <template x-for="i in phones.length">

                                            <div  class="relative">
                                            <x-input x-model="phones[i-1]" name="phones[]" type="tel"  class=" p-2
                                            @error('name')
                                            border-danger
                                            @enderror border border-info mx-2  " placeholder="+967-777-777-777" value="{{ old('name') }}"/>
                                            <span @click="  phones.splice(i-1,1);"  class="absolute top-0 right-0"><x-bi-x class="h-6 w-6 text-danger bg-white rounded-full cursor-pointer border"/></span>
                                        </div>
                                            <span class="text-sm text-danger" x-text="pc"></span>

                                        </template>
                                        <button type="button" x-show="phones.length<4" @click="pc++; phones.push('')" class="bg-green-400 rounded text-white">اضف رقم</button>
                                    </div>
                                </div>


                            </div>
                                <div class="mt-2 mx-auto w-full text-center flex">
                                    <x-button variant='success' class="mx-auto">
                                        حفظ
                                        <x-bi-save class="h-5 w-5"/>
                                    </x-button>

                                </div>

                            </form>

                        </div>






                    </div>

                </div>

                <div class="flex mt-4 dark:text-white flex-col ">


                    {{ $locs->links() }}
                </div>


                <div
                    class="bg-white overflow-x-auto relative dark:bg-dark-eval-2 dark:text-white w-full shadow-md rounded my-6">

                    <div class="w-full top-0 bottom-0 z-30 bg-white bg-opacity-50 absolute" wire:loading
                        >
                        <div class="w-full h-4 bg-blue-900 mt-16 rounded animate-pulse top-10 bottom-0 my-auto"></div>
                    </div>


{{--

                    @if ($deleteproid != 'no')
                        <div x-data="{dpm{{ $deleteproid }}: 1}">
                            <div x-show="dpm{{ $deleteproid }}" class="dialog">
                                <div class="dialog-content">
                                    <div class="dialog-header dark:text-black">هل انت متاكد من الحذف
                                    </div>
                                    <div class="dialog-footer flex mx-auto">
                                        <button type="button" class="btn btn-light" wire:click="setDeleteproid('no')"
                                            @click="dpm{{ $deleteproid }}=!dpm{{ $deleteproid }}">Cancel</button>
                                        <button type="button" wire:click="deletePro({{ $deleteproid }})"
                                            class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif --}}



                    <table class="min-w-max w-full table-auto overflow-x-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm ">

                                <th class="py-3 px-2  text-left">اسم الفرع

                                </th>
                                <th class="py-3 px-2  text-left"> العنوان</th>
                                <th class="py-3  text-center">ارقام التواصل

                                </th>

                                <th class="py-3  text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 dark:text-white text-sm font-light">


                            @foreach ($locs as $product)
                                <tr
                                    class="border-b relative border-gray-200 hover:bg-gray-100 dark:hover:bg-dark-bg dark:hover:text-info">
                                    <td class="py-3 px-2 mb-4 text-left">
                                        <div class="flex items-center">
                                            <span class="font-bold">{{ $product->name }}
                                                <span
                                                    class="block w-1/2 text-blue-700 hidden sm:block font-light text-xs ">


                                                </span>
                                            </span>


                                        </div>
                                        <div>
                                            <span class=" mb-6 mt-4 text-green-600 font-bold py-1 px-1  text-xs">
                                                {{ date('d/M/Y', strtotime($product->updated_at)) }}

                                            </span>
                                        </div>



                                    </td>

                                    <td class="px-2">
                                        <span> {{ $product->address }}</span>
                                    </td>
                                    <td class="py-3  text-center">

                                        <div class="flex flex-col space-y-2">
                                        @foreach ($product->phones as $ph)

                                        <span
                                        class="bg-purple-200 mb-2 text-blue-700 font-bold py-1 px-3 rounded-full text-xs">

                                        {{ $ph }}</span>
                                        @endforeach
                                        </div>
                                    </td>
                                    <td class="py-3   text-right">
                                        <div class="flex item-center justify-center">

                                            <div x-data="{phones2:''}" x-init="phones2='{{ json_encode($product->phones) }}'" @click=" edit({{ $product->id }},'{{ $product->name }}','{{ $product->address }}',{{ $product->city_id }},phones2);"
                                                class="w-4 mr-2 mt-2 cursor-pointer transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>
                                            <div @click="$wire.set('deleteproid',{{ $product->id }})"
                                                class="w-4 mr-2 mt-2 cursor-pointer transform hover:text-red-800 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div>
                                        @if ($deleteproid != 'no' && $deleteproid==$product->id)
                                        <div class="bg-white rounded-lg " x-data="{dpm{{ $deleteproid }}: 1}">
                                            <div x-show="dpm{{ $deleteproid }}" class="dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-body lg:flex" dir="auto">
                                                        <h1 class="text-sm text-red-800 font-bold p-4 rounded-lg ">
                                                            هل انت متاكد من الحذف. .؟

                                                        </h1>
                                                    </div>
                                                    <div class="dialog-footer space-x-4 w-1/2 flex mx-auto">
                                                        <button type="button" class="bg-blue-700 text-white rounded-box p-2 "
                                                            @click="$wire.set('deleteproid','no'); dpm{{ $deleteproid }}=!dpm{{ $deleteproid }}">الغاء</button>
                                                        <button type="button" wire:click="deletePro({{ $deleteproid }})"
                                                            class="bg-red-700 text-white rounded-box p-2">حذف </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>






        </div>
    </div>



    @if (session()->get('statt') == 'ok')
        <div class="fixed p-4   bg-green-500 text-white top-10 w-32 mx-auto right-5 toast" role="alert"
            x-on:toast1.window="open = !open" x-data="{ open: true }" x-show.transition="open" x-cloak>
            <div class="flex items-center justify-between mb-1">
                <span class="font-bold text-blue-600">
                    {{ __(session()->get('title')) }}</span>
                <button  class="btn btn-dark btn-xs" @click="open = false"><svg class="w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            {{ __(session()->get('message')) }}
        </div>
    @endif


    {{-- <x-slot name="script"> --}}

        <script type="text/javascript">



                var FORM_URL="{{ route('locs.store') }}";

function locform(){

    return {
        name:'',
        errors:{
            name:'',
            address:'',
        },
        address:'',
        phones:[''],
        city_id:1,
        id:-1,
        edit(id,name,address,city_id,phones){
            FORM_URL="{{ route('locs.update') }}";
           this.id=id;
            this.name=name;
            this.address=address;
            this.city_id=city_id;
            this.phones=JSON.parse(phones);
        }
        ,
        submitForm() {


    //         document.addEventListener('livewire:load', function () {
    //     // Get the value of the "count" property
    //     @this.emit('add_new');
    // });
            if(this.name=='' || this.address=='' || this.city_id==''){
                if(this.name=='')
                this.errors.name='الاسم يجب الا يكون فارغ';
                if(this.address=='')
                this.errors.address='العنوان يجب الا يكون فارغ';
            }

            else
            fetch(FORM_URL, {
                    method: "POST",
                    headers: {
                      "Content-Type": "application/json",
                      "Accept": "application/json",
                      'X-CSRF-TOKEN': '{{csrf_token()}}'

                    },
                    body: JSON.stringify({'name':this.name,
                    "address":this.address,
                    "city_id":this.city_id,
                    'phones':this.phones,
                    'id':this.id
                                }),

                  }).then(response=>{
                      if(!response.ok){
                    //   this.formMessage="اعدالمحاولة";
                    console.log(response)
                      return null;
                      }
                      return response.json()
                  }).then(data => {
                      if(data!=null){

                      if(data.status==true){

                      //  this.emit('add_new');

                window.location.reload();

                        console.log(data);
                        this.name='';
                        this.address='';
                        this.city_id=1;
                        this.phones=[''];

                      }
                      else{

                        // this.formMessage=data.message;

                      }


                      }
                      console.log(data);

                    }).catch((e) => {
                        console.log(e);
                    });


        }
    }

}



</script>

    {{-- </x-slot> --}}


</div>
