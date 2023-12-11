
    <!--Eight section-->
    <section class="my-20">
        <div class="text-center">
            <img src="/Gradehero-imgs/transparent 1.png" alt="">
        </div>

        <div
            class="flex flex-col justify-around md:px-10 md:flex-row text-center md:text-start space-y-8 md:space-y-0 md:space-x-40 my-28">
            <!-- Column 1 -->
            <div class="md:w-1/4">
                <h1 class="text-white text-lg font-semibold">@lang('public.customer_service')</h1>
                <ol class="font-medium space-y-5 text-gray-400 py-6">
                    <li><a href="specials" class="hover:text-gray-300">@lang('public.grading_specials')</a></li>
                    <li><a href="giveaway" class="hover:text-gray-300">@lang('public.giveaway')</a></li>
                    <li><a href="about-us" class="hover:text-gray-300">@lang('public.grading_standard')</a></li>
                    <li><a href="archives" class="hover:text-gray-300">@lang('public.certificate_verification')</a></li>
                </ol>
            </div>

            <!-- Column 2 -->
            {{-- <div class="md:w-1/4">
                <h1 class="text-white text-lg font-semibold">@lang('public.resources')</h1>
                <ol class="font-medium space-y-5 text-gray-400 py-6">
                    <li><a href="/#price" class="hover:text-gray-300">@lang('public.price_guide')</a></li>
                    <li><a href="#" class="hover:text-gray-300">@lang('public.apps')</a></li>
                    <li><a href="#" class="hover:text-gray-300">@lang('public.forum')</a></li>
                </ol>
            </div> --}}

            <!-- Column 3 -->
            <div class="md:w-1/4">
                <h1 class="text-white text-lg font-semibold">@lang('public.company')</h1>
                <ol class="font-medium space-y-5 text-gray-400 py-6">
                    <li><a href="https://www.gradehero.shop" class="hover:text-gray-300">@lang('public.shop')</a></li>
                    <li><a href="about-us" class="hover:text-gray-300">@lang('public.about_us')</a></li>
                    <li><a href="privacy-policy" class="hover:text-gray-300">@lang('public.privacy_policy')</a></li>
                    <li><a href="terms" class="hover:text-gray-300">@lang('public.terms')</a></li>
                </ol>
            </div>

            <!-- Column 4 -->
            <div class="md:w-1/4">
                <h1 class="text-white text-lg font-semibold">@lang('public.contact_us')</h1>
                <form action="/contact" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" name="name" class="my-2.5 w-full p-2 border rounded"
                            placeholder="Name" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" class="my-2.5 w-full p-2 border rounded"
                            placeholder="Email Address" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <textarea placeholder="Your message goes here!" type="text" name="desc"
                            class="my-2.5 w-full p-2 border rounded" required></textarea>
                        @error('desc')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <input type="file" name="file" class="my-2 w-full p-2 border text-white rounded">
                        <div class="flex justify-between my-1 captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" name="reload"
                                class="space-x-3 bg-cyan-400 hover:bg-cyan-600 justify-center text-white font-bold py-2 px-7 ml-2 rounded text-center reload"
                                id="reload">&#x21bb;</button>
                        </div>
                        <input type="text" name="captcha" class="my-2.5 w-full p-2 border rounded"
                            placeholder="Enter Captcha" required>
                        @error('captcha')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end py-2 mb-2 mt-0.5">
                        <button type="submit"
                            class="mt-5 space-x-3 bg-cyan-400 hover:bg-cyan-600 justify-center text-white font-bold py-2 px-7 ml-7 rounded flex text-center">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <footer class="justify-center">
        <div class="flex space-x-5 justify-center">
            <!-- Facebook icon -->
            <a href="https://www.facebook.com/profile.php?id=61552925450226">
                <img class="w-1/2 md:w-auto" src="/Gradehero-imgs/facebook-icon.png" alt="Facebook icon">
            </a>
            <!-- Instagram icon -->
            <a href="https://instagram.com/gradehero_?igshid=NDkyYmI2ajRkdWxo&utm_source=qr">
                <img class="w-1/2 md:w-auto" src="/Gradehero-imgs/instagram-icon.png" alt="Instagram icon">
            </a>
        </div>
    </footer>

    </section>

    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    <script>
        $(document).ready(function() {
            $(".nav-toggler").each(function(_, navToggler) {
                var target = $(navToggler).data("target");
                $(navToggler).on("click", function() {
                    $(target).animate({
                        height: "toggle"
                    });
                });
            });
        });
    </script>
    <script>
        $("#reload").click(function() {
            $.ajax({
                type: "GET",
                url: "reload-captcha",
                success: function(data) {
                    $(".captcha span").html(data.captcha)
                }
            });
        });
    </script>
</body>

</html>
