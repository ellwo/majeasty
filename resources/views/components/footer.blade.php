
  <section class="wow fadeInUp " data-wow-delay=".3s">
<footer   class="relative bg-gray-100 dark:bg-dark-bg  mt-16 pt-8 pb-6">
    <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
    >
        <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
        >
            <polygon
                class="text-red-800 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl dark:text-gray-200 font-semibold">{{__('لنبقى على تواصل')}}</h4>


                <div class="mt-6">
                   <button
                        class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 "
                        type="button">
                        <x-heroicon-s-mail class="w-10 h-10 text-red-800 "/>
                    </button>

                    <button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 "
                        type="button">
                        <x-bi-whatsapp class="h-10 w-10 text-green-600"/>
                    </button>
                    <button
                        class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 "
                        type="button"
                    >
                        <x-bi-facebook class="h-10 w-10 text-blue-600"/>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                    class="block uppercase dark:text-gray-200 text-gray-600 text-sm font-semibold mb-2"
                >{{__('Useful Links')}}</span
                >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="text-gray-700  hover:text-gray-900 dark:hover:text-gray-100 font-semibold block pb-2 text-sm"
                                    href="{{url('Home')}}"
                                >الرئيسية</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 hover:text-gray-900  dark:hover:text-gray-100 font-semibold block pb-2 text-sm"
                                    href="{{url('product/all')}}"
                                >منتجاتنا</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 hover:text-gray-900 font-semibold dark:hover:text-gray-100 block pb-2 text-sm"
                                    href="{{url('contact')}}"
                                >تواصل معنا</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-gray-700 hover:text-gray-900 font-semibold dark:hover:text-gray-100 block pb-2 text-sm"
                                    href="{{route('dashboard')}}"
                                >حسابي</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                                <h1 class="text-2xl sm:text-2xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                                    {{__('العنوان الرئيسي')}}
                                </h1>

                                <div class="flex items-center cursor-pointer mt-8 text-gray-600 dark:text-gray-400">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        Acme Inc, Street, State,
                                        Postal Code
                                    </div>
                                </div>

                                <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        +44 1234567890
                                    </div>
                                </div>

                                <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                        info@acme.org
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>


                            </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
            class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © {{date('Y')}} {{env('APP_NAME')}}
                    Powered By
                    <a
                        href="mailto:mh772741050mh@gmail.com"
                        class="text-gray-600 text-blue-500 hover:text-gray-900 dark:text-white dark:hover:text-gray-100"
                    >MO-Alzaom</a
                    >.
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
