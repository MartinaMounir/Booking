<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-12">
                            <h1 class="text-white mb-4  text-center">Reset Password</h1>
                            <form>
                                <div class="row g-3">
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="email" class="form-control bg-transparent" type="email" name="email" :value="old('email')" required autofocus  autocomplete="username" >
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="password"class="form-control bg-transparent" type="password" name="password" required autocomplete="new-password" >
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                               </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">




                                            <input  id="password_confirmation" class="form-control bg-transparent"
                                                          type="password"
                                                          name="password_confirmation" required autocomplete="new-password" >
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <button  class="btn btn-outline-light w-100 py-3">
                                            {{ __('Reset Password') }}
                                        </button>


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
