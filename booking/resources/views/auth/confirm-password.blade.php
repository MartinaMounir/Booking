<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-12">
                            <h1 class="text-white mb-4  text-center">Confirm Password</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">


                                            <input id="password" class="form-control bg-transparent"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="current-password" >
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                              </div>

                                    </div>




                                    <div class="col-12">

                                        <button  class="btn btn-outline-light w-100 py-3">
                                            {{ __('Confirm') }}
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
