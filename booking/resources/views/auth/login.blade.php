<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-12">
                            <h1 class="text-white mb-4 text-center">Login</h1>
                            <form>
                                <div class="row g-3">
                                     <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="email" class="form-control bg-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input  class="form-control bg-transparent"  id="password"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" >
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>


                                    </div>



                                    <div class="col-12">

                                            <button  class="btn btn-outline-light w-100 py-3">
                                            {{ __('Log in') }}
                                            </button>


                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</x-guest-layout>
