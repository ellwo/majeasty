@props(['headingline'=>env('APP_NAME','') ,'img'=>'' ,'para'=>'' ])

    <section  data-wow-delay=".2s" dir="rtl" class="wow fadeInUp a4 a2_ az bg-gray-100 dark:bg-gray-900 w-full lg:py-4 mt-0  mb-5 lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 mt-0 shadow-md  rounded-lg lg:shadow-lg lg:rounded-lg">
            <div class="w-full">
                <img class="w-full h-96 hidden rounded-t-lg md:block object-cover" src="{{$img}}">

                <div class=" bg-cover h-64 lg:rounded-lg sm:hidden  rounded-lg bg-center lg:h-full" style=" background-image:url('{{$img}}');"></div>
            </div>

            <div class=" px-6 py-12 ">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">{{$headingline}} <span class="text-m_primary dark:text-indigo-400">للاجهزة الالكترونية والكهربائية المنزلية</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{$para}}</p>

                <div class="mt-8">
                    <a href="{{url('product/all')}}" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700"> تصفح منتجاتنا الان</a>
                </div>
            </div>
        </div>
    </section>
