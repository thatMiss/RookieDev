<x-guest-layout>
    


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />



        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">

                                <!-- ***** Logo Start ***** -->
                                <a href="index.html" class="logo">
                                    POLICE
                                </a>
                                <!-- ***** Logo End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="criminals.html">Wanted Criminal</a></li>
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Complaint</a>
                                    <ul class="sub-menu">
                                        <li><a href="report_crime.html">report crime</a></li>
                                        <li><a href="report_accident.html">report accident</a></li>
                                        <li><a href="report_missing.html">report missing</a></li>
                                    </ul>
                                <li><a href="index.html">Contact Us</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop id="bg-video">
                <source src="assets/images/course-video.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="caption">
                            
                                <h2>Login</h2>
                                <div>
                                    <div class="container">

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <!-- Email Address -->
                                            <div>
                                                <x-label class="text-white" for="email" :value="__('Email')" />

                                                <x-input id="email" class="block mt-1 w-full input-control" type="email" name="email" :value="old('email')" required autofocus />
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-label class="text-white" for="password" :value="__('Password')" />

                                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="block mt-4">
                                                <label class="text-white" for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                                @endif

                                                <x-button class="ml-3 btn-danger">
                                                    {{ __('Log in') }}
                                                </x-button>
                                            </div>
                                        </form>




                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById('id01');

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>











        <!-- ***** Main Banner Area End ***** -->
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/tabs.js"></script>
        <script src="assets/js/video.js"></script>
        <script src="assets/js/slick-slider.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
            //according to loftblog tut
            $('.nav li:first').addClass('active');

            var showSection = function showSection(section, isAnimate) {
                var
                    direction = section.replace(/#/, ''),
                    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                    reqSectionPos = reqSection.offset().top - 0;

                if (isAnimate) {
                    $('body, html').animate({
                            scrollTop: reqSectionPos
                        },
                        800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }

            };

            var checkSection = function checkSection() {
                $('.section').each(function() {
                    var
                        $this = $(this),
                        topEdge = $this.offset().top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var
                            currentId = $this.data('section'),
                            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                        reqLink.closest('li').addClass('active').
                        siblings().removeClass('active');
                    }
                });
            };

            $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
                e.preventDefault();
                showSection($(this).attr('href'), true);
            });

            $(window).scroll(function() {
                checkSection();
            });
        </script>



</x-guest-layout>