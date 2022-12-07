<div >
    <div >
        <div class="flex " >


            <div class="justify-between sm:flex" >
            <div class="relative flex-col justify-between space-x-4 space-y-2 ">

                <x-label for="department_id" :value="__('اختر القسم ')" />

                <select  wire:model='dept' name="department_id" class="sm:pl-5 sm:pr-10 mx-2 w-4/5 sm:mx-0 dark:bg-darker dark:text-white text-gray-600 bg-white border border-gray-300 rounded-md appearance-none hover:border-gray-400 focus:outline-none">

                   @foreach( $depts as $ca)
                   <option  value="{{$ca->id}}">{{$ca->name}}</option>
                   @endforeach
                </select>
              </div>


              @include('components.mulit-select',
              ['id'=>'part'.$dept,
              'inputname'=>'parts',
              'items'=>$department->parts,
              'lablename'=>'الفئات',
              'searching'=>$searching,

              ])

            </div>




        </div>

</div>
</div>
