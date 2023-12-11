<x-header />

{{-- Content --}}
<main>
    <section class="py-16 lg:py-20 ">
        <div class="flex flex-col w-full justify-center items-center mx-auto mt-10 md:space-y-0 md:flex-row">
             <!--left item-->
             <div class="flex md:w-1/2 py-20 bg-center rounded-md bg-[#D9D9D912] px-1 text-white">
                <div class="grid items-center grid-cols-4 gap-6 lg:grid-cols-12">
                    <div class="justify-center col-span-4 border-b border-b-wuiSlate-200 lg:col-span-8 lg:col-start-3">
                        <h1 class="pb-6 text-4xl font-medium text-cyan-500">@lang('public.sell_your_card')</h1>
                        {{-- <p class="pb-6 text-lg">@lang('public.read_about_giveaways')</p> --}}
                    </div>
                    <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                        <p class="pb-6 text-md font-bold">@lang('public.sell_your_card_header1')</p>
                        <p class="text-sm font-medium">@lang('public.sell_your_card_header1_answer')</p>
                    </div>
                    <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                        <p class="pb-6 text-md font-bold">@lang('public.sell_your_card_header2')</p>
                        <p class="text-sm font-medium">@lang('public.sell_your_card_header2_answer')</p>
                    </div>
                </div>
            </div>
             <!-- ! left item-->
            <div class="md:w-1/2 flex w-full justify-center p-2">
                <img src="/Gradehero-imgs/card2.jpg" alt="" class="Rect-4 w-full">
            </div>
        </div>
    </section>
</main>
{{-- ! Content --}}

    <x-footer />