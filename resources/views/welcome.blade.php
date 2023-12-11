<x-header />

    <!--Hero section-->
    <section id="hero" class="">
        <!--Flex Container-->
        <div class="flex flex-col w-full justify-center items-center mx-auto mt-10 md:space-y-0 md:flex-row">
            <!--left item-->
            <div
                class="pt-5 max-w-lg bg-center rounded-md flex flex-col w-full justify-end mb-32 space-y-12 md:px-4 md:w-1/2">
                <h1 class="max-w-lg text-7xl font-bold text-gray-200 text-center md:text-7xl md:text-left">
                    @lang('public.grade/sell_your') <span class="text-cyan-600">@lang('public.now')</span>
                </h1>
                <p class="max-w-lg text-center font-medium text-gray-300 md:text-left">@lang('public.low_cost')</p>
                <!--Buttons-->
                <div class="flex justify-center md:justify-start space-x-5">
                    <div
                        class="flex text-black font-bold bg-gradient-to-r from-blue-600 to-purple-500 rounded-md p-3 justify-center GYC-Button">
                        <a href="upload-card" class="">@lang('public.grade_your_cards_now')</a>
                    </div>
                    <div
                        class="flex bg-transparent border-2 border-cyan-500  md:font-bold rounded-md p-3 justify-center text-white">
                        <a href="sell-your-card">@lang('public.sell_your_cards')</a>
                    </div>
                </div>
                <div class="relative flex space-x-5">
                    <div class="absolute" style="z-index: -7;"><img class="trans-img"
                            src="/Gradehero-imgs/Rectangle A.png" alt=""></div>
                    <div class="absolute" style="z-index:-2;left: 1px;"><img class="trans-img"
                            src="/Gradehero-imgs/Rectangle B.png" alt=""></div>
                    <div class="absolute" style="z-index: -1;left: 18px;"><img class="trans-img"
                            src="/Gradehero-imgs/Rectangle C.png" alt=""></div>
                    <div class="absolute" style="z-index:-7; left:35px;"><img class="trans-img"
                            src="/Gradehero-imgs/Rectangle D.png" alt=""></div>

                    <h2 class="flex items-center justify-center text-gray-400 font-semibold"
                        style="position:absolute;top:10px;left:100px;">@lang('public.over_5000')</h2>
                </div>


            </div>
            <!--Image-->
            <div class="md:w-1/2 flex w-full justify-center p-2">
                <img src="/Gradehero-imgs/card1.jpg" alt="" class="Rect-4 w-full">
            </div>
        </div>
        <div id="service"
            class="flex flex-col md:flex-row justify-around items-center flex-wrap text-center rounded-lg bg-green-500 bg-opacity-60 py-2">
            {{-- <h1 class="text-gray-300 text-2xl text-center font-bold font-semibold">@lang('public.we_grade')</h1> --}}
            <img class="foot-img" src="/Gradehero-imgs/pokemon_logo_new.png" alt="Image 1">
            <img class="foot-img" src="/Gradehero-imgs/magic_logo.png" alt="Image 2">
            <img class="foot-img" src="/Gradehero-imgs/yugioh_logo.png" alt="Image 3">
        </div>


    </section>
    <!--Second section-->
    <section id="hero" class="">
        <div class="flex flex-col w-full justify-center items-center mx-auto mt-10 md:space-y-0 md:flex-row">
            <!--left item-->
            <div class="pt-5 flex max-w-lg  bg-center rounded-md bg-[#D9D9D912] px-10">
                <div class="pt-8 flex flex-col mb-32 space-y-2 md:w-xs space-x-6">
                    <h1 class="text-4xl font-bold text-gray-200 md:text-5xl md:text-left">@lang('public.transparent_grading')<span
                            class="text-[#1DC5DF]"> @lang('public.process')</span>
                    </h1>
                    <p class="py-16 max-w-xs text-center font-medium text-gray-300 md:text-left">@lang('public.you_simply_upload')</p>
                    <!--Buttons-->
                    <div class="flex justify-center md:justify-start space-x-5">

                        <div
                            class="flex bg-[#1DC5DF] border-2 border-cyan-500  md:font-bold rounded-md p-3 justify-center text-gray-900">
                            <a href="about-us">@lang('public.learn_more') </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Image-->
            <div class="md:w-1/2 flex justify-center p-2">
                <img src="/Gradehero-imgs/card4.jpg" alt="" class="Rect-4 w-full">
            </div>
        </div>

    </section>


    <!--Third section-->
    <section id="hero" class="">
        <!--Flex Container-->
        <div class="flex flex-col w-full justify-center items-center mx-auto mt-10 md:space-y-0 md:flex-row">

            <!--left item-->
            <div class="pt-5 flex max-w-lg bg-center rounded-md bg-[#D9D9D912] px-10">
                <div class="pt-8 flex flex-col mb-32 space-y-2 md:w-xs space-x-6">
                    <h1 class="text-4xl font-bold text-gray-200 md:text-5xl md:text-left">@lang('public.grading_involves')<span
                            class="text-cyan-600"> @lang('public.evaluating')</span>
                    </h1>
                    <p class="py-16 max-w-[15rem] text-center font-medium text-gray-300 md:text-left">
                        @lang('public.each_one')</p>
                    <!--Buttons-->
                    <div class="flex justify-center md:justify-start space-x-5">

                        <div
                            class="flex bg-[#1DC5DF] border-2 border-cyan-500  md:font-bold rounded-md p-3 justify-center text-gray-900">
                            <a href="about-us">@lang('public.learn_more') </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Image-->
            <div class="md:w-1/2 flex w-full justify-center p-2">
                <img src="/Gradehero-imgs/card2.jpg" alt="" class="Rect-4 w-full">
            </div>

        </div>

    </section>
    <!--Fourth section-->
    <section id="archives" class="my-32 mx-10">
        <div class="flex flex-col md:flex-row justify-center text-gray-200 space-y-10 md:space-y-0 md:space-x-40">
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Group 1000004226.png" alt="Image 1"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl">@lang('public.artistic') </h1>
                <p class="text-sm max-w-xs">@lang('public.according') </p>
            </div>
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Vector.png" alt="Image 2"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl">@lang('public.affordable') </h1>
                <p class="text-sm">@lang('public.price') </p>
            </div>
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Vector (1).png" alt="Image 3"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl">@lang('public.price2')</h1>
                <p class="text-sm max-w-xs">@lang('public.lowest_tier')
                </p>
            </div>
        </div>
    </section>


    <!--Fifth section-->
    <section class="my-32">
        <div>
            <h1 class="text-center my-14 space-y-16 font-bold text-5xl text-white">
                @lang('public.testimonials')
            </h1>
        </div>

        <div
            class="flex flex-col md:flex-row justify-center items-center text-gray-200 space-y-10 md:space-y-0 md:space-x-40">
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Ellipse 1.png" alt="Image 1"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl ">Elena M.</h1>
                <p class="text-sm">@lang('public.anna')</p>
            </div>
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Ellipse 2.png" alt="Image 2"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl">Gianluca B.</h1>
                <p class="text-sm">@lang('public.del_piero')</p>
            </div>
            <div class="text-center space-y-5">
                <img src="/Gradehero-imgs/Ellipse 3.png" alt="Image 3"
                    class="mx-auto mb-2 w-32 h-32 object-cover rounded-full">
                <h1 class="font-bold text-2xl">Marco P.</h1>
                <p class="text-sm">@lang('public.yu_gi')</p>
            </div>
        </div>

    </section>

    <!--Sixth section-->
    <section id="price">
        <div class="py-10 space-y-8 w-full text-center">
            <h1 class="text-6xl font-bold text-gray-200">
                @lang('public.our_grading') <span class="text-cyan-600"> @lang('public.prices')</span>
            </h1>
            <p class="text-1xl font-medium text-gray-300">
                @lang('public.save_costs')
            </p>
        </div>
        <div class="flex flex-col md:flex-row md:space-y-4 md:space-x-10">

            <!-- First tab -->
            <div
                class="w-full md:w-1/4 rounded-lg mt-4 bg-gradient-to-tr from-blue-900 via-purple-900 to-gray-700 shadow-lg p-6 md:px-10 md:py-14">
                <div class="h-32 flex content-start flex-col justify-center items-center my-auto text-center">
                    <h1 class="text-2xl pb-3 text-white">@lang('public.basic')</h1>
                <h1 class="font-bold text-4xl md:text-6xl text-white">@lang('public.euro_199')</h1>
                </div>

                <div class="h-64 flex flex-col justify-center text-left items-left my-auto space-y-6 text-white font-semibold">
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="Fast Grading">
                        <span>@lang('public.fast_grading')</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="Certificate">
                        <span>@lang('public.certificate')</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="3 Cards">
                        <span>@lang('public.archive_access')</span>
                    </div>
                </div>
                <div class="h-16 flex flex-col justify-center items-center my-auto text-center">
                    <a href="upload-card"
                    class="bg-white hover:bg-gray-300 text-black px-3 py-2 rounded-md text-md font-medium">@lang('public.grade_your_card')</a>
                </div>
            </div>
            
            <!-- Second tab -->
            <div
                class="w-full md:w-1/4 rounded-lg mt-4 bg-gradient-to-tr from-blue-900 via-purple-900 to-gray-700 shadow-lg p-6 md:px-10 md:py-14">
                <div class="h-32 flex content-start flex-col justify-center items-center my-auto text-center">
                    <h1 class="text-2xl pb-3 text-white">@lang('public.basic') <small>[@lang('public.cards_10')]</small> </h1>
                    <h1 class="font-bold text-4xl md:text-6xl text-white">@lang('public.euro_149')
                        <small>@lang('public.each')</small>
                    </h1>
                </div>
                <div class="h-64 flex flex-col justify-center text-left items-left my-auto space-y-6 text-white font-semibold">
                        <div class="flex items-center space-x-2">
                            <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="Fast Grading">
                            <span>@lang('public.fast_grading')</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="Certificate">
                            <span>@lang('public.certificate')</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <img class="w-6 h-6" src="/Gradehero-imgs/Vector (2).png" alt="Certificate">
                            <span>@lang('public.archive_access')</span>
                        </div>
                </div>
                <div class="h-16 flex flex-col justify-center items-center my-auto text-center">
                        <a href="upload-card"
                            class="bg-white hover:bg-gray-300 text-black px-3 py-2 rounded-md text-md font-medium">@lang('public.grade_your_card')</a>
                </div>
            </div>

            <!-- Third tab -->
             <div class="w-full md:w-1/4 mt-4 md:mt-0 rounded-lg bg-[#FFFFFF10] shadow-lg p-6 md:px-10 md:py-14">
                <div class="h-32 flex content-start flex-col justify-center items-center my-auto text-center">
                <h1 class="text-2xl pb-3 text-white"> @lang('public.premium')</h1>
                <h1 class="font-bold text-4xl md:text-6xl text-white">@lang('public.euro_245')</h1>
                </div>
                
                <div class="h-64 flex flex-col justify-center text-left items-left my-auto space-y-6 text-white font-semibold">
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Fast Grading">
                        <span>@lang('public.fast_grading')</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Certificate">
                        <span>@lang('public.certificate')</span>
                    </div>
                    <div class="flex items-center space-x-2 max-w-2xl">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Card Encapsulation">
                        <span>@lang('public.archive_access')</span>
                    </div>
                    <div class="flex items-center space-x-2 max-w-2xl mb-8">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Card Encapsulation">
                        <span>@lang('public.price_estimation')</span>
                    </div>
                </div>
                <div class="h-16 flex flex-col justify-center items-center my-auto text-center">
                    <a href="upload-card"
                    class="bg-cyan-400 hover:bg-cyan-600 text-black px-3 py-2 rounded-md text-md font-medium">@lang('public.grade_your_card')</a>
                </div>
            </div>

            <!-- Fourth tab -->
            <div class="w-full md:w-1/4 mt-4 md:mt-0 rounded-lg bg-[#FFFFFF10] shadow-lg p-6 md:px-10 md:py-14">
                <div class="h-32 flex content-start flex-col justify-center items-center my-auto text-center">
                <h1 class="text-2xl pb-3 text-white"> @lang('public.premium') <small>[@lang('public.cards_10')]</small> </h1>
                <h1 class="font-bold text-4xl md:text-6xl text-white">@lang('public.euro_199')
                    <small>@lang('public.each')</small>
                </h1>
                </div>
    
                <div class="h-64 flex flex-col justify-center text-left items-left my-auto space-y-6 text-white font-semibold">
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Fast Grading">
                        <span>@lang('public.fast_grading')</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Certificate">
                        <span>@lang('public.certificate')</span>
                    </div>
                    <div class="flex items-center space-x-2 max-w-2xl">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Card Encapsulation">
                        <span>@lang('public.archive_access')</span>
                    </div>
                    <div class="flex items-center space-x-2 max-w-2xl">
                        <img class="w-6 h-6 rounded-full bg-green-800 p-1" src="/Gradehero-imgs/Vector (2).png"
                            alt="Card Encapsulation">
                        <span>@lang('public.price_estimation')</span>
                    </div>
                </div>
                <div class="h-16 flex flex-col justify-center items-center my-auto text-center">
                    <a href="upload-card"
                        class="bg-cyan-400 hover:bg-cyan-600 text-black px-3 py-2 rounded-md text-md font-medium">@lang('public.grade_your_card')</a>
                </div>
            </div>
            
        </div>
    </section>
    <!--Sevent section-->

    <section id="faqs" class="pt-20 w-full text-center">
        <div class="text-center space-y-7 my-5">
            <h1 class=" font-bold text-5xl text-[#D8D8D8]">
                @lang('public.faqs')
            </h1>
            <p class="font-medium text-[#D8D8D8]"> @lang('public.faqs_full')</p>
        </div>

        {{-- Import --}}
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                <ul class="flex flex-col">
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span> @lang('public.can_you_evaluate')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()"
                            class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="p-3 text-gray-900">
                                @lang('public.we_can_grade')
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>@lang('public.who_takes_care')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                @lang('public.collectors_and_people')
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>@lang('public.doubt')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                @lang('public.contact_section')
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>@lang('public.difference')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                @lang('public.the_difference')
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>@lang('public.send_card')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                @lang('public.send_card_answer')
                            </p>
                        </div>
                    </li>
                    <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
                        <h2 @click="handleClick()"
                            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>@lang('public.winner')</span>
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                            x-ref="tab" :style="handleToggle()">
                            <p class="p-3 text-gray-900">
                                @lang('public.winner_answer')
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- ! Import --}}
    </section>

<x-footer />
