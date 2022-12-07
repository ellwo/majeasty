<x-admin-layout>


    <div class="flex flex-col max-w-4xl mx-auto bg-white border rounded-lg dark:bg-dark-eval-2 ">
        <div class="p-4 text-2xl text-center text-darker dark:text-light">
            <h1>تعديل الفئات</h1>
        </div>
        <hr>
        <form  dir="auto" method="POST" action="{{ route('part.update',$part) }}" class="flex flex-col w-3/4 mx-auto space-x-2 space-y-3 dark:bg-dark">

            @method('PUT')
            @csrf
            <x-label :value="__('اسم الفئة ')" />

            <div >
            <x-input name="name" required class=" p-2
            @error('name')
            border-danger
            @enderror border text-right " placeholder="اسم الفئة" value="{{$part->name }}"/>

            @error('name')
            <span class="text-sm text-danger">{{ $message }}</span>

            @enderror
            </div>
            <hr>
            <x-label :value="__(' القسم ')"/>
            <select name="department_id" class="rounded-xl dark:bg-dark-bg" id="">
                @foreach ($depts as $d)

                <option @if ($d->id==$part->department?->id)
                    selected
                @else

                @endif value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>

            @error('note')
            <span class="text-sm text-danger">{{ $message }}</span>

            @enderror
            <div class="text-center">
            <x-button variant="success" type="submit" >
                حفظ
            </x-button>
            </div>

        </form>

    </div>

    <x-slot name="script">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/uploadeimage.js') }}"></script>
        <script>

            // var img=new ImagetoServer({
            //     url:"{{ route('uploade') }}",
            //     src:"{{ old('img') }}",
            //     id:'img',
            //     h:400,
            //     w:712,
            //     with_w_h:true,
            //     shep:'rect',


            // });



        </script>




    </x-slot>








</x-admin-layout>
