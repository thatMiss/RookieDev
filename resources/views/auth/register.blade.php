<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


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

                            <h2>Register</h2>
                            <div>
                                <div class="container">

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div>
                                            <x-label class="text-white" for="name" :value="__('Name')" />

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label class="text-white" for="email" :value="__('Email')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-label class="text-white" for="password" :value="__('Password')" />

                                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-label class="text-white" for="password_confirmation" :value="__('Confirm Password')" />

                                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-button class="ml-3 btn-danger">
                                                {{ __('Register') }}
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

</x-guest-layout>