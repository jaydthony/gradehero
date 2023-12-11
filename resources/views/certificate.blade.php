<x-header />

    {{-- Content --}}
    <main>
        <section class="py-16 lg:py-20 ">
            <div class="container text-white">
                <div class="grid items-center grid-cols-4 gap-6 lg:grid-cols-12">
                    <div class="justify-center col-span-4 border-b border-b-wuiSlate-200 lg:col-span-8 lg:col-start-3">
                        <h1 class="pb-6 text-4xl font-medium ">@lang('public.certificate')</h1>
                        <p class="pb-6 text-lg">@lang('public.certificate_serial') "{{ $certificate->serial }}" </p>
                    </div>
                    <div class="justify-center col-span-4 lg:col-span-8 lg:col-start-3">
                        <div class="p-6 w-full mx-auto text-center flex justify-center">
@php

$grade = $graded->find($certificate->grade_id);
$card = $cards->find($grade->card_id);

@endphp
                            @if ($card !== null)
                                <div class="border p-2">
                                    <div class="border">
                                        <div class="flex flex-row items-center justify-between px-2">
                                            <div class="flex flex-col space-y-2 text-left">
                                                <p>{{ $certificate->type }}</p>
                                                <p>{{ $certificate->name }}</p>
                                                <p>{{ $certificate->edition }}</p>
                                            </div>
                                            <hr class="border" style="height: 100px;">
                                            <div class="flex flex-col space-y-2 text-right">
                                                <img src="/Gradehero-imgs/transparent 1.png" alt="Logo"
                                                    class="h-[0.8rem] w-50">
                                                <p>{{ $certificate->grade }}</p>
                                                <p>{{ $certificate->serial }}</p>
                                            </div>
                                        </div>
                                        <div class="border">
                                            <img width="350px" height="350px"
                                                src="{{ asset('storage/' . $card->cert_img) }}"
                                                alt="{{ $certificate->type }} certificate">
                                        </div>
                                        <div class="mx-auto p-2 max-w-[300px]">
                                            <p>{{ $certificate->note }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium">@lang('public.uploaded')
                                {{ $certificate->created_at->diffForHumans() }} </p>
                            @endif

                        </div>
                    </div>
        </section>
    </main>
    {{-- ! Content --}}

<x-footer />