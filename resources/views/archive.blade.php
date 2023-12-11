<x-header />
          
{{-- Content --}}
<main>
    <section class="py-16 lg:py-20 ">
        <div class="text-white">
            <div class="grid items-center grid-cols-4 gap-6 lg:grid-cols-12">
                <div class="justify-center col-span-4 border-b border-b-wuiSlate-200 lg:col-span-8 lg:col-start-3">
                    <h1 class="pb-6 text-4xl font-medium text-cyan-500">@lang('public.archives')</h1>
                    <p class="pb-6 text-lg">@lang('public.enter_serial')</p>
                </div>
                <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                    <form action="archives" method="POST" class="container mx-auto p-6 font-mono bg-white rounded-md dark:bg-darker dark:border-primary dark:bg-darker dark:border-primary text-gray-500 dark:text-light">
                        @csrf
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-first-name">
                                @lang('public.card_serial')
                            </label>
                            <input 
                            class="dark:bg-darker border border-darker text-gray-500 dark:text-light appearance-none block w-full rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                            id="grid-first-name" 
                            type="number" 
                            name="serial" 
                            value=""
                            >
                          </div>
                          <div class="flex justify-end p-6">
                            <button
                            type="submit"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            @lang('public.search')
                          </button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
{{-- ! Content --}}

    
<x-footer />