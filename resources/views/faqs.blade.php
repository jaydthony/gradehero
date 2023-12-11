<x-header />

{{-- Content --}}
<main>
    
    <section id="faqs" class="pt-20 w-full text-center">
        <div class="text-center space-y-7 my-5">
            <h1 class=" font-bold text-5xl text-cyan-500">
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
</main>
{{-- ! Content --}}

<x-footer />