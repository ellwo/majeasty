<x-wow-layout>


    <header class="header  a1 a2 a3 a4 sticky">
        <div class="a5 a4 a6 a7 lg:a8 lg:a9 lg:a7 xl:aa 2xl:ab">
            <div class="ac ad[99] ae[250px] lg:a4 xl:ae[350px]">
                <a href="{{ route('Home') }}" class="af">
                    <img src="{{  asset('myimages/bg-images/migestlogoLight.svg') }}" alt="logo"
                        class="ag ah[50px] dark:ai">
                    <img src="{{ config('mysetting.logo') }}" alt="logo"
                        class="ah[50px] dark:ag">
                </a>
            </div>
            <div
                class="menu-wrapper aj a2 a3 ak al a4 am an ao dark:a0 lg:ap lg:aq lg:a5 lg:ar lg:as lg:at lg:au lg:av dark:lg:at">
                <div class="a4 aw">
                    <nav>
                        <ul class="navbar a5 ax a9 am ay az lg:aA lg:as lg:aB lg:aC">
                            <li>
                                <a href="#home"
                                    class="menu-scroll aD a9 am az aE aF aG hover:aH dark:hover:aI">
                                    الرئيسئة
                                </a>
                            </li>
                            <li>
                                <a href="#features"
                                    class="menu-scroll aD a9 am az aE aF aG hover:aH dark:hover:aI">
                                    الاقسام
                                </a>
                            </li>

                            <li>
                                <a href="#support"
                                    class="menu-scroll aD a9 am az aE aF aG hover:aH dark:hover:aI">
                                    تواصل معنا
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="a1 a10 a3 a5 a4 a9 a11 a12 a13 ao lg:aq lg:a14 lg:aw lg:au">
                </div>
            </div>
            <div class="a1 a1a/2 a1b ak a5 a1c/2 a9 lg:aq lg:a1d">

                   <button class="btn btn-square btn-ghost dark:text-light" type="button"  iconOnly variant="secondary" srText="Toggle dark mode"
                @click="toggleTheme">
            <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="dark:text-light w-6 h-6" />
            <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="dark:text-light text-white w-6 h-6" />


        </button>
        <button class="menu-toggler ac ak a1t dark:aI lg:ag">
            <svg width="28" height="28" viewBox="0 0 28 28" class="cross ag aL">
              <path
                d="M14.0002 11.8226L21.6228 4.20001L23.8002 6.37745L16.1776 14L23.8002 21.6226L21.6228 23.8L14.0002 16.1774L6.37763 23.8L4.2002 21.6226L11.8228 14L4.2002 6.37745L6.37763 4.20001L14.0002 11.8226Z">
              </path>
            </svg>
            <svg width="22" height="22" viewBox="0 0 22 22" class="menu aL">
              <path
                d="M2.75 3.66666H19.25V5.49999H2.75V3.66666ZM2.75 10.0833H19.25V11.9167H2.75V10.0833ZM2.75 16.5H19.25V18.3333H2.75V16.5Z">
              </path>
            </svg>
          </button>
            </div>


        </div>

    </header>


    <section id="home" class="ac a36 a2T a37 a38 sm:a39 lg:a1u[170px] lg:a1A[120px]">
        <div class="a1v xl:a1w">
            <div class="a1R a5 a6 a9">
                <div class="a4 a35 lg:a1S/2">
                    <div class="a1B a2J ae[530px] az lg:a3a lg:a2g lg:aW">
                        <span class="wow fadeInUp a1E af a1j a16 a3b a1N[10px] a7 aE aF aH dark:an dark:a3c dark:aI"
                            data-wow-delay=".1s">
                            <span class="a3d af a3e a1W a1j a16"></span> {{ config('mysetting.site_name') }}
                        </span>
                        <h1 class="wow fadeInUp a1I aE a1Y a1G dark:aI sm:a1L md:a1F[50px] md:a3f[60px]"
                            data-wow-delay=".1s">
                            هل تبحث عن

                            <span class="txt-type a3g" data-wait="1000"
                                data-words="[&quot;غسالة&quot;, &quot;ثلاجة&quot;, &quot;طباخات&quot;, &quot;عصارات&quot;]"><span
                                    class="txt">غسالات</span></span>
                                    ؟
                        </h1>
                        <p class="wow fadeInUp a2J aF aG" data-wow-delay=".1s">
                            {{config('mysetting.note')}}
                        </p>
                        <div class="wow fadeInUp a5 a6 a9 am lg:as" data-wow-delay=".1s">
                            <a href="{{ route('product') }}"
                                class="aD a9 aS a16 a1N[10px] a18 aE aF aI hover:a19 md:a1N[14px] md:aU">
                                تصفح الان منتجات ماجستي
                                <span class="aK">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.172 7L6.808 1.636L8.222 0.222L16 8L8.222 15.778L6.808 14.364L12.172 9H0V7H12.172Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="a4 a1v lg:a1S/2">
                    <div class="wow fadeInRight ac a3h a1B ah[560px] a4 ae[700px] lg:a3a" data-wow-delay=".1s">
                        <div class="a1 a2 a29 lg:a3i/12">
                            <img src="{{config('mysetting.site_hero_image')}}" alt="hero-image">
                            <div
                            class="a1 a3j a3k a2D a2a a4 aT a28 a3l a16 a3b a3m[6px] dark:a2v dark:a3l dark:an dark:a3c">
                        </div>
                        </div>
                        <div class="a1 a3 a10 a2w">
                            <img src="{{ config('mysetting.site_hero_image') }}" alt="hero-image">

                        </div>
                        <div class="a1 a3 a10">
                            <svg width="72" height="38" viewBox="0 0 72 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M62.0035 2.04985C59.6808 1.76671 57.4524 2.70929 55.1508 4.68209C51.3631 7.92863 44.7908 9.54366 38.8668 4.69678C36.329 2.6204 34.117 2.29213 32.2894 2.59672C30.3972 2.91209 28.8057 3.92088 27.5547 4.75487C25.5734 6.07577 23.3915 7.46379 20.8786 7.78953C18.2847 8.12577 15.515 7.32034 12.3598 4.69105C9.71804 2.48955 7.45748 2.0661 5.72104 2.33325C3.94436 2.6066 2.56003 3.6273 1.76341 4.56877C1.40666 4.99037 0.775686 5.04295 0.354079 4.68621C-0.0675277 4.32946 -0.120109 3.69849 0.236635 3.27688C1.27334 2.05168 3.0643 0.71846 5.41692 0.356509C7.80979 -0.0116349 10.6326 0.648246 13.6402 3.1546C16.485 5.52529 18.7154 6.05321 20.6215 5.80612C22.6086 5.54854 24.4266 4.43657 26.4453 3.09078L27 3.92282L26.4453 3.09078C27.6943 2.25809 29.6028 1.0169 31.9606 0.623935C34.383 0.220203 37.1711 0.725274 40.1333 3.14886C45.1548 7.25733 50.6369 5.9169 53.8492 3.16356C56.3795 0.994798 59.1512 -0.312658 62.2455 0.0645503C65.3089 0.43799 68.4333 2.43425 71.7557 6.26783C72.1174 6.68518 72.0723 7.31674 71.655 7.67845C71.2376 8.04015 70.606 7.99504 70.2443 7.57769C67.0668 3.91125 64.3571 2.33677 62.0035 2.04985Z"
                                    fill="#4A6CF7"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M62.0035 11.9726C59.6808 11.6895 57.4524 12.6321 55.1508 14.6049C51.3631 17.8514 44.7908 19.4664 38.8668 14.6196C36.329 12.5432 34.117 12.2149 32.2894 12.5195C30.3972 12.8349 28.8057 13.8437 27.5547 14.6776C25.5734 15.9985 23.3915 17.3866 20.8786 17.7123C18.2847 18.0485 15.515 17.2431 12.3598 14.6138C9.71804 12.4123 7.45748 11.9889 5.72104 12.256C3.94436 12.5294 2.56003 13.5501 1.76341 14.4915C1.40666 14.9131 0.775686 14.9657 0.354079 14.609C-0.0675277 14.2522 -0.120109 13.6213 0.236635 13.1997C1.27334 11.9745 3.0643 10.6412 5.41692 10.2793C7.80979 9.91114 10.6326 10.571 13.6402 13.0774C16.485 15.4481 18.7154 15.976 20.6215 15.7289C22.6086 15.4713 24.4266 14.3594 26.4453 13.0136L27 13.8456L26.4453 13.0136C27.6943 12.1809 29.6028 10.9397 31.9606 10.5467C34.383 10.143 37.1711 10.648 40.1333 13.0716C45.1548 17.1801 50.6369 15.8397 53.8492 13.0863C56.3795 10.9176 59.1512 9.61012 62.2455 9.98733C65.3089 10.3608 68.4333 12.357 71.7557 16.1906C72.1174 16.608 72.0723 17.2395 71.655 17.6012C71.2376 17.9629 70.606 17.9178 70.2443 17.5005C67.0668 13.834 64.3571 12.2595 62.0035 11.9726Z"
                                    fill="#4A6CF7"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M62.0035 21.8954C59.6808 21.6123 57.4524 22.5548 55.1508 24.5276C51.3631 27.7742 44.7908 29.3892 38.8668 24.5423C36.329 22.4659 34.117 22.1377 32.2894 22.4423C30.3972 22.7576 28.8057 23.7664 27.5547 24.6004C25.5734 25.9213 23.3915 27.3093 20.8786 27.6351C18.2847 27.9713 15.515 27.1659 12.3598 24.5366C9.71804 22.3351 7.45748 21.9117 5.72104 22.1788C3.94436 22.4521 2.56003 23.4728 1.76341 24.4143C1.40666 24.8359 0.775686 24.8885 0.354079 24.5318C-0.0675277 24.175 -0.120109 23.544 0.236635 23.1224C1.27334 21.8972 3.0643 20.564 5.41692 20.2021C7.80979 19.8339 10.6326 20.4938 13.6402 23.0002C16.485 25.3708 18.7154 25.8988 20.6215 25.6517C22.6086 25.3941 24.4266 24.2821 26.4453 22.9363L27 23.7684L26.4453 22.9363C27.6943 22.1036 29.6028 20.8624 31.9606 20.4695C34.383 20.0658 37.1711 20.5708 40.1333 22.9944C45.1548 27.1029 50.6369 25.7624 53.8492 23.0091C56.3795 20.8403 59.1512 19.5329 62.2455 19.9101C65.3089 20.2835 68.4333 22.2798 71.7557 26.1134C72.1174 26.5307 72.0723 27.1623 71.655 27.524C71.2376 27.8857 70.606 27.8406 70.2443 27.4232C67.0668 23.7568 64.3571 22.1823 62.0035 21.8954Z"
                                    fill="#4A6CF7"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M62.0035 31.8182C59.6808 31.535 57.4524 32.4776 55.1508 34.4504C51.3631 37.697 44.7908 39.312 38.8668 34.4651C36.329 32.3887 34.117 32.0605 32.2894 32.365C30.3972 32.6804 28.8057 33.6892 27.5547 34.5232C25.5734 35.8441 23.3915 37.2321 20.8786 37.5579C18.2847 37.8941 15.515 37.0887 12.3598 34.4594C9.71804 32.2579 7.45748 31.8344 5.72104 32.1016C3.94436 32.3749 2.56003 33.3956 1.76341 34.3371C1.40666 34.7587 0.775686 34.8113 0.354079 34.4545C-0.0675277 34.0978 -0.120109 33.4668 0.236635 33.0452C1.27334 31.82 3.0643 30.4868 5.41692 30.1248C7.80979 29.7567 10.6326 30.4166 13.6402 32.9229C16.485 35.2936 18.7154 35.8215 20.6215 35.5745C22.6086 35.3169 24.4266 34.2049 26.4453 32.8591L27 33.6911L26.4453 32.8591C27.6943 32.0264 29.6028 30.7852 31.9606 30.3923C34.383 29.9885 37.1711 30.4936 40.1333 32.9172C45.1548 37.0257 50.6369 35.6852 53.8492 32.9319C56.3795 30.7631 59.1512 29.4557 62.2455 29.8329C65.3089 30.2063 68.4333 32.2026 71.7557 36.0362C72.1174 36.4535 72.0723 37.0851 71.655 37.4468C71.2376 37.8085 70.606 37.7634 70.2443 37.346C67.0668 33.6796 64.3571 32.1051 62.0035 31.8182Z"
                                    fill="#4A6CF7"></path>
                            </svg>
                        </div>
                        <div class="a1 a2L/2 a10">
                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.9"
                                    d="M120 60C120 93.1371 93.1371 120 60 120C26.8629 120 0 93.1371 0 60C0 26.8629 26.8629 0 60 0C93.1371 0 120 26.8629 120 60Z"
                                    fill="url(#paint0_angular_300_926)"></path>
                                <defs>
                                    <radialgradient id="paint0_angular_300_926" cx="0" cy="0"
                                        r="1" gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(60 60) rotate(90) scale(60)">
                                        <stop stop-color="#4A6CF7"></stop>
                                        <stop offset="1" stop-color="#111722"></stop>
                                    </radialgradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="a1 a10 a3 a2D a2a a4 a2x a2y a3n dark:a3o"
            style="background-image: url(&#39;./images/NoisePattern.svg&#39;)"></div>
        <div class="a1 a2 a29 a2D">
            <svg width="1356" height="860" viewBox="0 0 1356 860" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5" filter="url(#filter0_f_201_2181)">
                    <rect x="450.088" y="-126.709" width="351.515" height="944.108"
                        transform="rotate(-34.6784 450.088 -126.709)" fill="url(#paint0_linear_201_2181)"></rect>
                </g>
                <defs>
                    <filter id="filter0_f_201_2181" x="0.0878906" y="-776.711" width="1726.24" height="1876.4"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                        <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                        </feblend>
                        <fegaussianblur stdDeviation="225" result="effect1_foregroundBlur_201_2181"></fegaussianblur>
                    </filter>
                    <lineargradient id="paint0_linear_201_2181" x1="417.412" y1="59.4717" x2="966.334"
                        y2="603.857" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ABBCFF"></stop>
                        <stop offset="0.859375" stop-color="#4A6CF7"></stop>
                    </lineargradient>
                </defs>
            </svg>
        </div>
        <div class="a1 a10 a3 a2D">
            <svg width="1469" height="498" viewBox="0 0 1469 498" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.3" filter="url(#filter0_f_201_2182)">
                    <rect y="450" width="1019" height="261" fill="url(#paint0_linear_201_2182)"></rect>
                </g>
                <defs>
                    <filter id="filter0_f_201_2182" x="-450" y="0" width="1919" height="1161"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                        <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                        </feblend>
                        <fegaussianblur stdDeviation="225" result="effect1_foregroundBlur_201_2182"></fegaussianblur>
                    </filter>
                    <lineargradient id="paint0_linear_201_2182" x1="-94.7239" y1="501.47" x2="-65.8058"
                        y2="802.2" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ABBCFF"></stop>
                        <stop offset="0.859375" stop-color="#4A6CF7"></stop>
                    </lineargradient>
                </defs>
            </svg>
        </div>
    </section>

    <section id="features" class="a1P sm:a1Q lg:a1u[130px]">
        <div class="a1v xl:a1w">

            <div class="wow fadeInUp ac a1B a2J ae[620px] a1C az md:a1U lg:a3p" data-wow-delay=".1s"
               >
                <span class="title"> الاقسام </span>
                <h2 class="a1I aE a1J a1G a1t dark:aI sm:a1L md:a1F[50px] md:a3f[60px]">
                  ما الذي نقدمه . .؟
                </h2>
            </div>

            <div class="a1R a5 a6 am">
                @foreach ($depts as $dept)

                <div class="a4 a1v md:a1S/2 lg:a1S/3">
                    <div class="wow fadeInUp aJ a1B a1M ae[380px] az md:a3q" data-wow-delay=".2s">
                        <div
                            class="a1B a1V a5 ah[70px] aR[70px] a9 am a1j a16 a3b aH aN group-hover:a16 group-hover:a3r group-hover:aI dark:an dark:a3b dark:aI dark:group-hover:a16 dark:group-hover:a3r md:a1X md:ah[90px] md:aR[90px]">
                            <a href="{{url("product/".$dept->id)}}">
                                <img src="{{ $dept->img }}" class="h-24 w-24 rounded-full" alt="" srcset="">
                            </a>

                        </div>
                        <div>
                            <h3 class="a3s aE a2Z a1K a1t dark:aI sm:a1Y md:a1I">
                                <a href="{{url("product/".$dept->id)}}">
                                {{ $dept->name }}
                                </a>
                            </h3>
                            <p class="aF aG">
                           {{ $dept->note }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>









    <section id="support" dir="rtl" class="a1P sm:a1Q lg:a1u[130px]">
        <div class="a1v xl:a1w">
            <div class="a1R a5 a6 am">
                <div class="a4 a1v xl:a2p/12">
                    <div class="a5 a6 a9 a1x a4b dark:a1z[#2E333D] lg:a2i">
                        <div class="a4 a1v lg:a1S/2">

                            <div class="wow fadeInUp ac a2J ae[500px] a1C md:a2O lg:a3p" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                <span class="title !a3 !a4c">
                  الدعم
                </span>
                                <h2 class="a1I aE a1J a1G a1t dark:aI sm:a1L md:a1F[50px] md:a3f[60px]">
                                   هل لديك اي استفسار ؟
                                </h2>
                                <p class="aF aG">
                               يمكنك التواصل معنا عن طريق احدى طرق الاتصال او عن طريق ارسالة رسالة الينا
                                </p>
                            </div>
                        </div>
                        <div class="a4 a1v lg:a1S/2">
                            <div class="wow fadeInUp a5 a9" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                <span class="a4d a4e a4 ae[200px] a0 dark:an"></span>

                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp a1R a5 a6 a2K" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                        <div class="a4 a1v md:a1S/2 lg:a1S/4">
                            <div class="a1V">
                                <h3 class="flex a44 aE aF a1t dark:aI sm:a2Z">
                                    عنوان البريد الالكتروني
                                    <x-heroicon-s-mail class="h-8 w-8"/>
                                </h3>
                                <p class="aF a1K aG">
                                    <a class="hover:text-blue-800" href="mailto:{{ config('mysetting.email_link') }}"> {{ config('mysetting.email_link') }}
                                    </a>
                                    </p>
                            </div>
                        </div>
                        <div class="a4 a1v md:a1S/2 lg:a1S/4">
                            <div class="a1V">
                                <h3 class="flex a44 aE aF a1t dark:aI sm:a2Z">
                                    رقم الهاتف
                                    <x-heroicon-s-phone class="h-8 w-8"/>
                                </h3>
                                <p class="aF a1K aG">
                                   <a class="hover:text-blue-800" href="callto:{{ config('mysetting.phone_no') }}"> {{ config('mysetting.phone_no') }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="a4 a1v md:a1S/2 lg:a1S/4">
                            <div class="a1V">
                                <h3 class="flex a44 aE aF a1t dark:aI sm:a2Z">
                                   عنواننا
                                   <x-heroicon-s-map class="h-8 w-8"/>
                                </h3>
                                <p class="aF a1K aG">
                                    {{ config('mysetting.address') }}
                                </p>
                            </div>
                        </div>
                        <div class="a4 a1v md:a1S/2 lg:a1S/4">
                            <div class="a1V a5 a9 a12 lg:a4f">
                                <a href="{{ config('mysetting.facebook_link') }}" name="social-link" aria-label="social-link" class="aG hover:aH dark:hover:aI">
                                    <svg width="28" height="28" viewBox="0 0 24 24" class="aL">
                    <path
                      d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z">
                    </path>
                  </svg>
                                </a>
                                <a href="javascript:void(0)" name="social-link" aria-label="social-link" class="aG hover:aH dark:hover:aI">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="aL">
                    <path
                      d="M22.1621 5.65593C21.3986 5.99362 20.589 6.2154 19.7601 6.31393C20.6338 5.79136 21.2878 4.96894 21.6001 3.99993C20.7801 4.48793 19.8811 4.82993 18.9441 5.01493C18.3147 4.34151 17.4804 3.89489 16.571 3.74451C15.6616 3.59413 14.728 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0772 6.14972C11.6979 6.98983 11.6068 7.93171 11.8181 8.82893C10.1552 8.74558 8.52838 8.31345 7.04334 7.56059C5.55829 6.80773 4.24818 5.75098 3.19805 4.45893C2.82634 5.09738 2.63101 5.82315 2.63205 6.56193C2.63205 8.01193 3.37005 9.29293 4.49205 10.0429C3.82806 10.022 3.17868 9.84271 2.59805 9.51993V9.57193C2.59825 10.5376 2.93242 11.4735 3.5439 12.221C4.15538 12.9684 5.00653 13.4814 5.95305 13.6729C5.33667 13.84 4.69036 13.8646 4.06305 13.7449C4.32992 14.5762 4.85006 15.3031 5.55064 15.824C6.25123 16.345 7.09718 16.6337 7.97005 16.6499C7.10253 17.3313 6.10923 17.8349 5.04693 18.1321C3.98464 18.4293 2.87418 18.5142 1.77905 18.3819C3.69075 19.6114 5.91615 20.2641 8.18905 20.2619C15.8821 20.2619 20.0891 13.8889 20.0891 8.36193C20.0891 8.18193 20.0841 7.99993 20.0761 7.82193C20.8949 7.2301 21.6017 6.49695 22.1631 5.65693L22.1621 5.65593Z">
                    </path>
                  </svg>
                                </a>
                                <a href="javascript:void(0)" name="social-link" aria-label="social-link" class="aG hover:aH dark:hover:aI">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="aL">
                    <path
                      d="M6.93994 5.00002C6.93968 5.53046 6.72871 6.03906 6.35345 6.41394C5.97819 6.78883 5.46938 6.99929 4.93894 6.99902C4.40851 6.99876 3.89991 6.78779 3.52502 6.41253C3.15014 6.03727 2.93968 5.52846 2.93994 4.99802C2.94021 4.46759 3.15117 3.95899 3.52644 3.5841C3.9017 3.20922 4.41051 2.99876 4.94094 2.99902C5.47137 2.99929 5.97998 3.21026 6.35486 3.58552C6.72975 3.96078 6.94021 4.46959 6.93994 5.00002ZM6.99994 8.48002H2.99994V21H6.99994V8.48002ZM13.3199 8.48002H9.33994V21H13.2799V14.43C13.2799 10.77 18.0499 10.43 18.0499 14.43V21H21.9999V13.07C21.9999 6.90002 14.9399 7.13002 13.2799 10.16L13.3199 8.48002Z">
                    </path>
                  </svg>
                                </a>
                                <a href="javascript:void(0)" name="social-link" aria-label="social-link" class="aG hover:aH dark:hover:aI">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="aL">
                    <path
                      d="M7.443 5.34961C8.082 5.34961 8.673 5.39961 9.213 5.54761C9.70302 5.63765 10.1708 5.82244 10.59 6.09161C10.984 6.33861 11.279 6.68561 11.475 7.13061C11.672 7.57561 11.77 8.12061 11.77 8.71361C11.77 9.40661 11.623 9.99961 11.279 10.4446C10.984 10.8906 10.492 11.2856 9.902 11.5826C10.738 11.8306 11.377 12.2756 11.77 12.8686C12.164 13.4626 12.41 14.2046 12.41 15.0456C12.41 15.7386 12.262 16.3316 12.016 16.8266C11.77 17.3216 11.377 17.7666 10.934 18.0636C10.4528 18.382 9.92084 18.616 9.361 18.7556C8.771 18.9046 8.181 19.0036 7.591 19.0036H1V5.34961H7.443ZM7.049 10.8896C7.59 10.8896 8.033 10.7416 8.377 10.4946C8.721 10.2476 8.869 9.80161 8.869 9.25761C8.869 8.96061 8.819 8.66361 8.721 8.46661C8.623 8.26861 8.475 8.11961 8.279 7.97161C8.082 7.87261 7.885 7.77361 7.639 7.72461C7.393 7.67461 7.148 7.67461 6.852 7.67461H4V10.8906H7.05L7.049 10.8896ZM7.197 16.7276C7.492 16.7276 7.787 16.6776 8.033 16.6286C8.28138 16.5814 8.51628 16.48 8.721 16.3316C8.92139 16.1868 9.08903 16.0015 9.213 15.7876C9.311 15.5406 9.41 15.2436 9.41 14.8976C9.41 14.2046 9.213 13.7096 8.82 13.3636C8.426 13.0666 7.885 12.9186 7.246 12.9186H4V16.7286H7.197V16.7276ZM16.689 16.6776C17.082 17.0736 17.672 17.2716 18.459 17.2716C19 17.2716 19.492 17.1236 19.885 16.8766C20.279 16.5796 20.525 16.2826 20.623 15.9856H23.033C22.639 17.1726 22.049 18.0136 21.263 18.5576C20.475 19.0526 19.541 19.3496 18.41 19.3496C17.6864 19.3518 16.9688 19.2175 16.295 18.9536C15.6887 18.7262 15.148 18.3524 14.721 17.8656C14.2643 17.4102 13.9267 16.8494 13.738 16.2326C13.492 15.5896 13.393 14.8976 13.393 14.1056C13.393 13.3636 13.492 12.6716 13.738 12.0276C13.9745 11.4077 14.3245 10.8373 14.77 10.3456C15.213 9.90061 15.754 9.50561 16.344 9.25761C17.0007 8.99367 17.7022 8.8592 18.41 8.86161C19.246 8.86161 19.984 9.01061 20.623 9.35661C21.263 9.70261 21.754 10.0986 22.148 10.6926C22.5499 11.2631 22.8494 11.8993 23.033 12.5726C23.131 13.2646 23.18 13.9576 23.131 14.7486H16C16 15.5406 16.295 16.2826 16.689 16.6786V16.6776ZM19.787 11.4836C19.443 11.1376 18.902 10.9396 18.262 10.9396C17.82 10.9396 17.475 11.0386 17.18 11.1866C16.885 11.3356 16.689 11.5336 16.492 11.7316C16.311 11.9229 16.1912 12.1638 16.148 12.4236C16.098 12.6716 16.049 12.8686 16.049 13.0666H20.475C20.377 12.3246 20.131 11.8306 19.787 11.4836ZM15.459 6.28961H20.967V7.62561H15.46V6.28961H15.459Z">
                    </path>
                  </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="a1B ">
                <div class="wow fadeInUp" data-wow-delay=".2s" action="https://formbold.com/s/unique_form_id" method="POST" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">

                        <form method="post" action="{{route('contact.form')}}" class=" flex flex-col sm:w-1/2 mx-auto justify-center">
                            @csrf
                            <div class="flex flex-col">
                                <input required dir="auto" type="text" name="name" id="name" placeholder="{{__('الاسم كامل')}}" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 dark:text-white  border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>
                             <div class="flex flex-col">
                                <input required dir="ltr" type="text" name="phone" id="phone" placeholder="{{__('رقم الهاتف')}}" class="w-100 mt-2 py-3 px-3 rounded-lg dark:text-white bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>
                            <div class="flex flex-col mt-2">
                                <input required dir="auto" type="email" name="email" id="email" placeholder="Email:me@me.com" class="w-100 mt-2 py-3 px-3 dark:text-white rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>

                            <div class="flex flex-col">
                                <input dir="rtl" required type="text" name="subject" id="subject" placeholder="{{__('الموضوع')}}" class="w-100 dark:text-white mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                            </div>


                            <div class="flex flex-col mt-2">
                                <textarea dir="auto" name="message" required rows="4" placeholder="الرسالة" class="w-100 dark:text-gray-200 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"></textarea>
                            </div>

                            <button type="submit" class="md:w-32 bg-blue-600 mx-auto hover:bg-blue-dark border font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                                {{__('ارسال')}}
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </section>




</x-wow-layout>
