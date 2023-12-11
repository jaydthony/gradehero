<x-header />
{{-- Content --}}
<main>

    <!--Second section-->
    <section id="hero" class="">
        <div class="flex flex-col w-full justify-center items-center mx-auto mt-10 md:space-y-0 md:flex-row">
            <!--left item-->
            <div class="pt-5 flex max-w-lg  bg-center rounded-md bg-[#D9D9D912] px-1 text-white">
                <div class="grid items-center grid-cols-4 gap-6 lg:grid-cols-12">
                    <div class="justify-center col-span-4 border-b border-b-wuiSlate-200 lg:col-span-8 lg:col-start-3">
                        <h1 class="pb-6 text-4xl font-medium text-cyan-500">@lang('public.giveaway')</h1>
                        {{-- <p class="pb-6 text-lg">@lang('public.read_about_giveaways')</p> --}}
                    </div>
                    <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                        <p class="pb-6 text-md">@lang('public.every_month')</p>
                        {{-- <p class="text-sm font-medium">@lang('public.updated')</p> --}}
                    </div>
                </div>
            </div>
            <!--Image-->
            <div class="md:w-1/2 flex w-full justify-center">
                <img src="/Gradehero-imgs/card.png" alt="" class="Rect-4 w-full">
            </div>
        </div>
    </section>

    {{-- <section class="py-16 lg:py-20 ">
        <div class="container text-white">
            <div class="grid items-center grid-cols-4 gap-6 lg:grid-cols-12">
                <div class="justify-center col-span-4 border-b border-b-wuiSlate-200 lg:col-span-8 lg:col-start-3">
                    <h1 class="pb-6 text-4xl font-medium ">@lang('public.giveaway')</h1>
                    <p class="pb-6 text-lg">@lang('public.read_about_giveaways')</p>
                </div>
                <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                    <p class="pb-6 text-md">@lang('public.every_month')</p>
                    <p class="text-sm font-medium">@lang('public.updated')</p>
                </div>
            </div>
        </div>
    </section> --}}
</main>
{{-- ! Content --}}


    <x-footer />