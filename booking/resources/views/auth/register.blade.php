<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Booking Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-12">
                            <h1 class="text-white mb-4  text-center">Register</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input type="text" class="form-control bg-transparent" id="name"  name="name" :value="old('name')" required autofocus autocomplete="name" >
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="email" class="form-control bg-transparent" type="email" name="email" :value="old('email')" required autocomplete="username" >
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">


                                            <input  class="form-control bg-transparent"  id="password"
                                                           type="password"
                                                           name="password"
                                                           required autocomplete="new-password" >
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="password_confirmation" class="form-control bg-transparent"
                                                          type="password"
                                                          name="password_confirmation" required autocomplete="new-password" >
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input type="text" class="form-control bg-transparent" id="type"  name="type" :value="old('type')" required autofocus autocomplete="type" >
                                            <x-input-label for="type" :value="__('type')" />
                                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                                        </div>

                                    </div>


                                    <div class="col-12">


                                        <button class="btn btn-outline-light w-100 py-3">
                                                {{ __('Register') }}
                                        </button>
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                     </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Start -->

     </form>
</x-guest-layout>
