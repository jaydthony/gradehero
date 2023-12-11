<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/Gradehero-imgs/favicon.ico" />
    <title>Grade Cards</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

    <style>
        .error {
            border: 2px solid red;
        }

        .img-child {
            /* flex: 1 0 21%; */
            margin: 20px;
            /* display: grid; */
        }

        .upload_text {
            color: #D9D9D9;
            font-family: Roboto;
            font-size: 20px;
            font-style: italic;
            font-weight: 500;
            line-height: normal;
            display: block;
            text-align: justify;
        }

        .upload_text span {
            color: red;
        }

        .bar {
            background-color: #00ff00;
        }

        .percent {
            position: absolute;
            left: 50%;
            color: black;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

         /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (min-width: 640px) {
            .sm\:mb-5 {
                margin-bottom: 0.2rem;
            }
        }
    </style>
</head>

<body
    class="text-center items-center my-8 px-4 md:px-20 bg-black bg-gradient-to-left from-[rgba(0, 0, 0, 0.911)] via-[rgba(0, 0, 0, 0.911)] to-transparent bg-blend-overlay"
    style="background-image: url(/Gradehero-imgs/carbon\ image1.png);">
    <section class="my-8 items-center w-full">
        <div>
            <a href="/">
                <img src="/Gradehero-imgs/transparent 1.png" class="mr-7" alt="">
            </a>
        </div>
        <div class="pt-14 pb-8 ">
            <h1 class="text-5xl text-center font-bold text-white">
                @lang('public.grade') <span class="text-cyan-500">@lang('public.cards')</span>
            </h1>
        </div>
        <div class="flex flex-col items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row space-x-10">
            <!--Image-->
            <div class="md:w-1/2 w-full">
                <img class="w-full" src="/Gradehero-imgs/pokemon-card-pictures.jpg" />
            </div>
            <!--Form-->
            <div
                class="max-w-7xl px-9 pt-8 items-center border bg-[#ffffff0c] rounded-md flex w-full flex-col md:w-1/2">
                <div class="space-y-3 max-w-7xl">
                    <form enctype="multipart/form-data" id="ImageForm" method="POST" action="/upload-card">
                        @csrf
                        <!-- <form> -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.enter_email')</label>
                        <input type="email" name="email" class="w-full p-2 border rounded"
                            placeholder="youremail@yahoo.com" required>
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.select_series')</label>
                        <!-- <input type="text" class="w-full p-2 border rounded" placeholder="Select the type of card you want to grade"> -->
                        <select name="series" class="w-full p-2 border rounded">
                            <option value="pokemon">Pokemon</option>
                            <option value="magic">Magic</option>
                            <option value="yugioh">Yu GI Oh</option>
                        </select>
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.select_service')</label>
                        <select name="service" class="w-full p-2 border rounded">
                            <option value="Premium">@lang('public.premium')</option>
                            <option value="Basic">@lang('public.basic')</option>
                            <option value="Premium Above 10 Cards">@lang('public.premium') (@lang('public.cards_10'))</option>
                            <option value="Basic Above 10 Cards">@lang('public.basic') (@lang('public.cards_10'))</option>
                        </select>
                        {{-- <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-sm">@lang('public.grading_report')</label> --}}
                        <!-- <input type="text" class="w-full p-2 border rounded" placeholder="Do you want a grading report after?"> -->
                        {{-- <select name="report" class="w-full p-2 border rounded">
                            <option value="yes">@lang('public.yes')</option>
                            <option value="no">@lang('public.no')</option>
                        </select> --}}
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.service_speed')</label>
                        <input name="speed" type="text" class="w-full p-2 border rounded"
                            placeholder="@lang('public.how_fast')" required>
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.upload_a_card')</label>
                        <input name="cert_img" accept="image/png, image/jpeg, image/gif" type="file" class="w-full p-1 border rounded bg-white text-black"
                            required>
                        <label
                            class="italic text-gray-200 block mb-2 font-semibold text-left text-xm">@lang('public.describe')</label>
                        <input name="desc" type="text" class="w-full p-7 border rounded"
                            placeholder="@lang('public.briefly_describe')" required>
                </div>

                <div class="text-center font-medium text-gray-200 py-7">
                    <h1>@lang('public.add_card_quantity')</h1>
                </div>

                <div class="flex text-center justify-center space-x-3">
                    <button type="button" onclick="increaseValue()"><img src="/Gradehero-imgs/Add-img.svg"
                            alt=""></button>
                    <input class="max-w-xs text-center font-bold" name="qty" type="number" min="1" max="20" id="qtyValue" value="1">
                    <button type="button" onclick="decreaseValue()"><img src="/Gradehero-imgs/minus-img.svg"
                            alt=""></button>
                </div>

                {{-- <div class="flex text-center justify-center space-x-3 py-3">
                        <label class="italic text-gray-200 block font-semibold">Total: </label>
                        <label class="text-gray-200 block border w-full font-semibold ">2.0</label>
                    </div> --}}
                    <input type="hidden" id="countQty" value="0" />

                <div class="items-center py-2 mb-2 mt-0.5">
                    <button id="additional" data-modal-toggle="uploadImages_step1" type="button"
                        class="mt-5 space-x-3 bg-cyan-400 hover:bg-cyan-600 justify-center text-white font-bold py-2 px-7 ml-7 rounded flex  items-center">@lang('public.proceed')
                        <img class="pl-1" src="/Gradehero-imgs/upload_to_cloud1.svg" alt="">
                    </button>
                </div>

            </div>
            <!-- </form> -->

        </div>

        {{-- First Modal --}}
        <div id="uploadImages_step1" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 rounded-lg shadow dark:bg-gray-700-800 sm:p-5 text-center"
                    style="background: #0B0B0B;">
                    <!-- Modal header -->
                    <div class="flex justify-center pb-4 mb-2 rounded-t sm:mb-5 text-center">
                        <h1 class="text-center font-bold text-cyan-700 sm:text-xs text-4xl md:text-5xl">
                            @lang('public.warning')
                        </h1>
                    </div>
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <div class="hidden md:block">
                            <img src="/Gradehero-imgs/card.png" alt="" class="Rect-4">
                        </div>
                        <div>
                            <div class="mx-auto mt-10 md:space-y-0 max-w-4xl">
                                <!-- item-->
                                <div class="mb-4">
                                    <p class="italic text-gray-200 block mb-2 my-4 text-left font-semibold text-xm">
                                        @lang('public.worn_edges')</p>
                                    <div class="flex text-left max-w-7xl text-grey-500">
                                        <div class="flex items-center mb-4 text-white space-x-2">
                                            <input id="worn_edges" type="radio" value="yes" name="worn_edges"
                                                class="bg-black">
                                            <label for="worn_edges">@lang('public.yes')</label>
                                        </div>
                                        <div class="flex items-center ml-7 mb-4 text-white space-x-2">
                                            <input id="worn_edges" type="radio" value="no" name="worn_edges"
                                                class="bg-black">
                                            <label for="worn_edges">@lang('public.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- ! item-->
                                <!-- item-->
                                <div class="mb-4">
                                    <p class="italic text-gray-200 block mb-2 mt-12 text-left font-semibold text-xm">
                                        @lang('public.creases')</p>
                                    <div class="flex text-left max-w-7xl text-grey-500 mb-14">
                                        <div class="flex items-center mb-4 text-white space-x-2">
                                            <input id="creases" type="radio" value="yes" name="creases"
                                                class="bg-black">
                                            <label for="creases">@lang('public.yes')</label>
                                        </div>
                                        <div class="flex items-center ml-7 mb-4 text-white space-x-2">
                                            <input id="creases" type="radio" value="no" name="creases"
                                                class="bg-black">
                                            <label for="creases">@lang('public.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- ! item-->
                                <!-- item-->
                                <div class="mb-4">
                                    <p class="italic text-gray-200 block mb-2 mt-12 text-left font-semibold text-xm">
                                        @lang('public.scratches')</p>
                                    <div class="flex text-left max-w-7xl text-grey-500 mb-4">
                                        <div class="flex items-center mb-4 text-white space-x-2">
                                            <input id="scratches" type="radio" value="yes" name="scratches"
                                                class="bg-black">
                                            <label for="scratches">@lang('public.yes')</label>
                                        </div>
                                        <div class="flex items-center ml-7 mb-4 text-white space-x-2">
                                            <input id="scratches" type="radio" value="no" name="scratches"
                                                class="bg-black">
                                            <label for="scratches">@lang('public.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- ! item-->
                                <!-- item-->
                                <div class="mb-4">
                                    <p class="italic text-gray-200 block mb-2 mt-12 text-left font-semibold text-xm">
                                        @lang('public.worn_corners')</p>
                                    <div class="flex text-left max-w-7xl text-grey-500 mb-4">
                                        <div class="flex items-center mb-4 text-white space-x-2">
                                            <input id="worn_corners" type="radio" value="yes"
                                                name="worn_corners" class="bg-black">
                                            <label for="worn_corners">@lang('public.yes')</label>
                                        </div>
                                        <div class="flex items-center ml-7 mb-4 text-white space-x-2">
                                            <input id="worn_corners" type="radio" value="no"
                                                name="worn_corners" class="bg-black">
                                            <label for="worn_corners">@lang('public.no')</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- ! item-->
                                <!-- item-->
                                <div class="border-b">
                                    <input type="text" name="comment" placeholder="@lang('public.if_yes')"
                                        class="text-white border-none focus:ring-0 focus:ring-transparent bg-transparent p-2">
                                </div>
                                <!-- ! item-->
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mx-auto py-2 mb-2 mt-0.5">
                        <button id="uploadCardFirst" data-modal-toggle="uploadImages_step2" type="button"
                            class="mt-5 space-x-3 bg-cyan-400 hover:bg-cyan-600 justify-center text-white font-bold py-2 px-7 ml-7 rounded flex  items-center">@lang('public.upload_card_image')
                            <img class="pl-1" src="/Gradehero-imgs/upload_to_cloud1.svg" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>

        {{-- ! First Modal --}}


    </section>
    <input type="hidden" id="countQty" value="0" />
    <!-- Main modal -->
    <div id="uploadImages_step2" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 rounded-lg shadow dark:bg-gray-700-800 sm:p-5 text-center"
                style="background: #0B0B0B;">
                <!-- Modal header -->
                <div class="flex pb-4 mb-4 rounded-t sm:mb-5">
                    <h1 class="text-lg text-center font-bold text-sl text-cyan-800 sm:text-xs md:text-sm">
                        @lang('public.upload_card_image')
                    </h1>
                    <!-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close</span>
                    </button> -->

                </div>
                {{-- <div class="pb-4" style="padding-left: 10.5rem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="190" height="4" viewBox="0 0 190 4" fill="none">
                        <path d="M2 2L418 1.99996" stroke="#1DC5DF" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div> --}}
                <!-- Modal body -->

                <input type="file" name="images[]" accept="image/*,video/*" onchange="isImageSelected()"
                    id="selectUploadFiles" class="hidden" multiple>

                <div class="flex flex-wrap items-center mb-3" id="SelectedImagesContainer">
                    <!-- <div id="SelectedImagesContainer" class="flex"> -->
                    <img class="img-child" width="60" height="60" src="/Gradehero-imgs/carbon-img.png"
                        alt="img template">
                    <!-- </div> -->
                    <div>
                        <!-- <img class="" width="60" height="60" src="" alt> -->

                        <button type="button" onclick="showSelectDialog()" id="btn-SelectImages"
                            data-tooltip-target="selectImages-hover" data-tooltip-trigger="hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92"
                                viewBox="0 0 92 92" fill="none">
                                <path
                                    d="M45.9999 7.66675C24.8631 7.66675 7.66663 24.8632 7.66663 46.0001C7.66663 67.1369 24.8631 84.3334 45.9999 84.3334C67.1368 84.3334 84.3333 67.1369 84.3333 46.0001C84.3333 24.8632 67.1368 7.66675 45.9999 7.66675ZM45.9999 13.4167C64.0293 13.4167 78.5833 27.9707 78.5833 46.0001C78.5833 64.0294 64.0293 78.5834 45.9999 78.5834C27.9706 78.5834 13.4166 64.0294 13.4166 46.0001C13.4166 27.9707 27.9706 13.4167 45.9999 13.4167ZM45.955 26.7922C45.1932 26.8041 44.4672 27.1179 43.9366 27.6647C43.4059 28.2115 43.114 28.9465 43.1249 29.7084V43.1251H29.7083C29.3273 43.1197 28.9491 43.1901 28.5955 43.3321C28.242 43.4742 27.9202 43.6851 27.6489 43.9526C27.3776 44.2201 27.1622 44.5389 27.0151 44.8904C26.8681 45.2418 26.7923 45.6191 26.7923 46.0001C26.7923 46.3811 26.8681 46.7583 27.0151 47.1098C27.1622 47.4613 27.3776 47.78 27.6489 48.0475C27.9202 48.315 28.242 48.5259 28.5955 48.668C28.9491 48.8101 29.3273 48.8804 29.7083 48.8751H43.1249V62.2917C43.1196 62.6727 43.1899 63.0509 43.332 63.4045C43.4741 63.758 43.685 64.0798 43.9525 64.3511C44.22 64.6224 44.5387 64.8378 44.8902 64.9849C45.2417 65.1319 45.6189 65.2077 45.9999 65.2077C46.3809 65.2077 46.7582 65.1319 47.1096 64.9849C47.4611 64.8378 47.7799 64.6224 48.0474 64.3511C48.3149 64.0798 48.5258 63.758 48.6679 63.4045C48.8099 63.0509 48.8803 62.6727 48.8749 62.2917V48.8751H62.2916C62.6726 48.8804 63.0508 48.8101 63.4044 48.668C63.7579 48.5259 64.0797 48.315 64.351 48.0475C64.6223 47.78 64.8377 47.4613 64.9848 47.1098C65.1318 46.7583 65.2075 46.3811 65.2075 46.0001C65.2075 45.6191 65.1318 45.2418 64.9848 44.8904C64.8377 44.5389 64.6223 44.2201 64.351 43.9526C64.0797 43.6851 63.7579 43.4742 63.4044 43.3321C63.0508 43.1901 62.6726 43.1197 62.2916 43.1251H48.8749V29.7084C48.8805 29.3236 48.8087 28.9416 48.6638 28.5851C48.519 28.2285 48.3041 27.9047 48.0318 27.6327C47.7595 27.3608 47.4354 27.1463 47.0786 27.0019C46.7219 26.8575 46.3398 26.7862 45.955 26.7922Z"
                                    fill="#1DC5DF" />
                            </svg>
                        </button>
                        <!-- Tool Tip -->
                        <div id="selectImages-hover" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            @lang('public.upload_card_image')
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                </div>

                <label class="upload_text"><span>*</span>@lang('public.please_upload')</label>
                <label class="upload_text"><span>*</span>@lang('public.please_take')</label>
                <label class="upload_text">@lang('public.note1'), @lang('public.note2'), @lang('public.note3'),
                    @lang('public.note4'), @lang('public.note5'), @lang('public.note6').</label>
                    {{-- Progress Bar --}}
                    {{-- <div class="progress mb-3">
                        <div class="bar"></div>
                        <div class="percent">0%</div>
                    </div> --}}
                    {{-- ! Progress Bar --}}
                    <div class="flex justify-center items-center mt-8">
                        <div class="loader hidden"></div>
                    </div>
                <div class="text-center py-2 flex justify-center items-center mb-2 mt-0.5">
                    <button id="checkout-live-button" type="submit"
                        class="uploadCardSecond mt-5 space-x-3 bg-cyan-400 hover:bg-cyan-600 justify-center text-white font-bold py-2 px-7 ml-7 rounded flex text-center"
                        disabled>@lang('public.proceed_to_payment')
                        <img class="pl-1" src="/Gradehero-imgs/upload_to_cloud1.svg" alt="">
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.uploadCardSecond').on('click', function() {
                $('.loader').removeClass('hidden');
            });
            // var bar = $('.bar');
            // var percent = $('.percent');

            // $('form').ajaxForm({
            //     beforeSend: function() {
            //         var percentVal = '0%';
            //         bar.width(percentVal);
            //         percent.html(percentVal);
            //     },
            //     uploadProgess: function(event,position,total,percentComplete) {
            //         var percentVal = percentComplete+'%';
            //         bar.width(percentVal);
            //         percent.html(percentVal);
            //     },
            //     complete: function() {
            //         console.log('File uploaded successfully!');
            //     }
            // });
        });
    </script>
</body>

</html>
