<x-header />

    {{-- Content --}}
    <main class="py-10 mt-20">
        <div id="service"
            class="flex flex-col md:flex-row justify-around items-center flex-wrap text-center rounded-lg bg-green-500 bg-opacity-60 py-2">
            <h1 class="text-gray-300 text-2xl text-center font-bold font-semibold">@lang('public.we_grade')</h1>
            <img class="foot-img" src="/Gradehero-imgs/pokemon_logo.png" alt="Image 1">
            <img class="foot-img" src="/Gradehero-imgs/magic_logo.png" alt="Image 2">
            <img class="foot-img" src="/Gradehero-imgs/yugioh_logo.png" alt="Image 3">
        </div>

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
                <div class="h-32 flex flex-col justify-center items-center my-auto text-center">
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
                <div class="h-32 flex flex-col justify-center items-center my-auto text-center">
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
                <div class="h-32 flex flex-col justify-center items-center my-auto text-center">
                <h1 class="text-2xl pb-3 text-white"> @lang('public.premium')</h1>
                <h1 class="font-bold text-4xl md:text-6xl text-white mb-8">@lang('public.euro_245')</h1>
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
                <div class="h-32 flex flex-col justify-center items-center my-auto text-center">
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


    </main>
    {{-- ! Content --}}

<x-footer />