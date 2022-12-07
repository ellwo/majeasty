<x-admin-layout>


    <div class="flex flex-col max-w-4xl mx-auto bg-white border rounded-lg dark:bg-dark-eval-2 ">
        <div class="p-4 text-2xl text-center text-darker dark:text-light">
            <h1>اضافة العلامات التجارية (الماركات)</h1>
        </div>
        <hr>
        <form  dir="auto" method="POST" action="{{ route('brand.store') }}" class="flex flex-col w-3/4 mx-auto space-x-2 space-y-3 dark:bg-dark">

            @csrf
            <x-label :value="__('اسم العلامة ')" />

            <div >
            <x-input name="name" required class=" p-2
            @error('name')
            border-danger
            @enderror border text-right " placeholder="اسم الفئة" value="{{ old('name') }}"/>

            @error('name')
            <span class="text-sm text-danger">{{ $message }}</span>

            @enderror
            </div>
            <hr>
            <x-label :value="__(' الصورة ')"/>
            <div id="img">

            </div>

            @error('img')
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
        <script>

            var img=new ImagetoServer({
                url:"{{ route('uploade') }}",
                src:"{{ old('img') }}",
                id:'img',
                h:250,
                w:250,
                with_w_h:true,
                shep:'rect',
            });



        </script>




    </x-slot>








</x-admin-layout>
