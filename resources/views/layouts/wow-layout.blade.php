<!DOCTYPE html>
<!-- saved from url=(0039)https://go-tailwind.preview.uideck.com/ -->
<html lang="en" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('mysetting.site_name') }}</title>

    <link rel="shortcut icon" href="{{ config('mysetting.site_header_logo') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="./GoStartup - Tailwind CSS Template_files/animate.css">
    <link rel="stylesheet" href="./GoStartup - Tailwind CSS Template_files/tailwind.css">
    <style></style>
</head>

<body x-data="mainState"  :class="{ dark: isDarkMode }" @resize.window="handleWindowResize" x-cloak class=" dark:a0">

    {{ $slot }}


    <footer class="wow fadeInUp a1P sm:a1Q lg:a1u[130px]" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
        <div class="a1v xl:a1w">
            <div class="a1R a5 a6">
                <div class="a4 a1v sm:a1S/2 md:a1p/12 lg:a1T/12 xl:a1T/12">
                    <div class="a1U ae[330px]">
                        <a href="#top" class="a1V flex af">
                            <img src="{{ asset('myimages/bg-images/migestlogoLight.svg') }}" alt="logo" class="ag ah[50px] dark:ai">
                            <img src="{{ config('mysetting.logo') }}" alt="logo" class="ah[50px] dark:ag">
                            <h1 class="inline-block text-3xl text-m_primary">{{ config('mysetting.site_name') }}</h1>

                        </a>

                    </div>
                </div>
                <div class="a1S/2 a1v md:a1T/12 lg:a1T/12 xl:a1W/12">
                    <div class="a1U">
                        <h3 class="a1X aE a1Y a1K a1t dark:aI">
                            اختصارات
                        </h3>
                        <ul class="a1Z">
                            <li>
                                <a href="javascript:void(0)" class="aE aF aG hover:aH dark:hover:aI">
                  الرئيسية
                </a>
                            </li>
                            <li>
                                <a href="{{ url('product/all') }}" class="aE aF aG hover:aH dark:hover:aI">
                  منتجاتنا
                </a>
                            </li>
                            <li>
                                <a href="" class="aE aF aG hover:aH dark:hover:aI">
                  Careers
                  <span class="a1_ aS a16 a20 a21 aE a22 aI">
                    Hiring
                  </span>
                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="aE aF aG hover:aH dark:hover:aI">
                  Pricing
                </a>
                            </li>
                        </ul>
                    </div>
                </div>




                <div class="a4 a1v sm:a1S/2 md:a1p/12 lg:a1T/12 xl:a1W/12">
                    <div class="a1U">
                        <h3 class="a1X aE a1Y a1K a1t dark:aI">
                            Get in touch
                        </h3>
                        <div class="a23">
                            <div>
                                <p class="aE aF aG">
                                    Toll Free Customer Care
                                </p>
                                <a href="tel:+(1) 123 456 7890" class="aE aF a1t hover:aH dark:aI dark:hover:aH">
                  +(1) 123 456 7890
                </a>
                            </div>
                            <div>
                                <p class="aE aF aG">
                                    Need live support?
                                </p>
                                <a href="mailto:support@domain.com" class="aE aF a1t hover:aH dark:aI dark:hover:aH">
                  support@domain.com
                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a4 a1v sm:a1S/2 md:a1p/12 lg:a1p/12 xl:a1T/12">
                    <div class="a1U">
                        <h3 class="a1X aE a1Y a1K a1t dark:aI">
                            Newsletter
                        </h3>
                        <p class="a1V aE aF aG">
                            Subscribe to receive future updates
                        </p>
                        <form class="ac">
                            <input type="email" name="email" id="email" placeholder="Email address" class="a24 a4 aS aT a17 a25 a26 aF aG a27 focus:a28 dark:aZ dark:a_[#2C3443]">
                            <button class="a1 a29 a2 a5 a2a a2b a9 am a2c aG dark:a1z[#1F2633]">
                <svg width="20" height="20" viewBox="0 0 20 20" class="aL">
                  <path
                    d="M3.1175 1.17367L18.5025 9.63533C18.5678 9.6713 18.6223 9.72414 18.6602 9.78834C18.6982 9.85255 18.7182 9.92576 18.7182 10.0003C18.7182 10.0749 18.6982 10.1481 18.6602 10.2123C18.6223 10.2765 18.5678 10.3294 18.5025 10.3653L3.1175 18.827C3.05406 18.8619 2.98262 18.8797 2.91023 18.8785C2.83783 18.8774 2.76698 18.8575 2.70465 18.8206C2.64232 18.7838 2.59066 18.7313 2.55478 18.6684C2.51889 18.6056 2.50001 18.5344 2.5 18.462V1.53867C2.50001 1.46626 2.51889 1.39511 2.55478 1.33222C2.59066 1.26934 2.64232 1.21689 2.70465 1.18005C2.76698 1.1432 2.83783 1.12324 2.91023 1.12212C2.98262 1.121 3.05406 1.13877 3.1175 1.17367ZM4.16667 10.8337V16.3478L15.7083 10.0003L4.16667 3.65283V9.167H8.33333V10.8337H4.16667Z">
                  </path>
                </svg>
              </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="dark:a1z[#2E333D] md:a2d">
                <div class="a1R a5 a6 a2e md:a2f">
                    <div class="a4 a1v md:a1S/2 lg:a1W/3">
                        <div class="a1I a5 a9 am a12 a1x aV dark:a1z[#2E333D] md:a2g md:as md:a2h md:a2i">
                            <a href="javascript:void(0)" class="aE aF aG hover:aH">
                English
              </a>
                            <a href="javascript:void(0)" class="aE aF aG hover:aH">
                Privacy Policy
              </a>
                            <a href="javascript:void(0)" class="aE aF aG hover:aH">
                Support
              </a>
                        </div>
                    </div>
                    <div class="a4 a1v md:a1S/2 lg:a1S/3">
                        <div>
                            <p class="az aE aF aG lg:a2j">
                                © 2025 Startup. All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="javascript:void(0)" class="hover:a2k back-to-top aj a2l a2m a2n ad[999] ag a2o a2p a9 am a2q a16 aI a2r aN" style="display: flex;">
        <span class="a2s[6px] a2t a1T a2u a2d a2c a2v"></span>
    </a>



    <script src="{{ asset('js/app.js') }}" defer></script>
<script src="./GoStartup - Tailwind CSS Template_files/typewriter.js.download"></script>
<script src="./GoStartup - Tailwind CSS Template_files/isotope.min.js.download"></script>
<script src="./GoStartup - Tailwind CSS Template_files/wow.min.js.download"></script>
<script src="./GoStartup - Tailwind CSS Template_files/main.js"></script>
<script>
    // // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document.querySelector(".menu-scroll").classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

     window.document.addEventListener("scroll", onScroll);
    // ==== About Tabs
    // const tabButtons = document.querySelectorAll(".tabButtons button");
    // const tabPanels = document.querySelectorAll(".tabPanel");

    // function showPanel(panelIndex) {
    //     tabButtons.forEach(function(node) {
    //         node.classList.remove(
    //             "aH",
    //             "a28",
    //             "dark:a28"
    //         );
    //     });
    //     tabButtons[panelIndex].classList.add(
    //         "aH",
    //         "dark:aI",
    //         "a28",
    //         "dark:a28"
    //     );
    //     tabPanels.forEach(function(node) {
    //         node.style.display = "none";
    //     });
    //     tabPanels[panelIndex].style.display = "flex";
    // }
    // showPanel(0);

    //========= testimonial

    // tns({
    //     container: ".testimonial-active",
    //     items: 1,
    //     slideBy: "page",
    //     autoplay: false,
    //     mouseDrag: true,
    //     gutter: 0,
    //     nav: false,
    //     controlsText: [
    //         `<svg
    //     width="20"
    //     height="20"
    //     viewBox="0 0 20 20"
    //     class="aL"
    //   >
    //     <path
    //       d="M6.52329 10.8331L10.9933 15.3031L9.81496 16.4814L3.3333 9.99978L9.81496 3.51811L10.9933 4.69645L6.52329 9.16645L16.6666 9.16645L16.6666 10.8331L6.52329 10.8331Z"

    //     />
    //   </svg>`,
    //         `<svg
    //     width="20"
    //     height="20"
    //     viewBox="0 0 20 20"
    //     class="aL"
    //   >
    //     <path
    //       d="M13.4767 9.16689L9.00671 4.69689L10.185 3.51855L16.6667 10.0002L10.185 16.4819L9.00671 15.3036L13.4767 10.8336H3.33337V9.16689H13.4767Z"

    //     />
    //   </svg>`,
    //     ],
    // });

    //============== isotope masonry js

    // const elem = document.querySelector(".portfolio-grid");
    // const iso = new Isotope(elem, {
    //     // options
    //     itemSelector: ".grid-item",
    //     masonry: {
    //         // use outer width of grid-sizer for columnWidth
    //         columnWidth: ".grid-sizer",
    //     },
    // });

    // const filterButtons = document.querySelectorAll(
    //     ".portfolio-btn-wrapper button"
    // );
    // filterButtons.forEach((e) =>
    //     e.addEventListener("click", () => {
    //         const filterValue = event.target.getAttribute("data-filter");
    //         iso.arrange({
    //             filter: filterValue,
    //         });
    //     })
    // );

    // //======= portfolio-btn active
    // var elements = document.querySelectorAll(".portfolio-btn-wrapper button");
    // for (var i = 0; i < elements.length; i++) {
    //     elements[i].onclick = function() {
    //         // remove class from sibling

    //         var el = elements[0];
    //         while (el) {
    //             if (el.tagName === "BUTTON") {
    //                 //remove class
    //                 el.classList.remove("active");
    //             }
    //             // pass to the new sibling
    //             el = el.nextSibling;
    //         }

    //         this.classList.add("active");
    //     };
    // }
</script>
</body>


</html>
