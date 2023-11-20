<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../bookingdesign/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../bookingdesign/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../bookingdesign/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../bookingdesign/css/style.css" rel="stylesheet">
</head>
<body>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="row" style="margin: 10px">
    <div class="col-10">
        <h4 class="fw-bold  "><span class="text-muted fw-light">Stays /</span> Create</h4>
    </div>
    <div class="col-2  ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();" class="btn btn-primary rounded-pill py-2 px-4">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>
<form method="POST" action="{{ route('vendor.vendor.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- Booking Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">

                        <div class="col-md-12">
                            <h1 class="text-white mb-4  text-center">Add Stays</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input type="text" class="form-control bg-transparent" id="title"  name="title" :value="old('title')" required autofocus autocomplete="title" >
                                            <x-input-label for="title" :value="__('title')" />
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <textarea type="text" rows="4" cols="50" class="form-control bg-transparent" id="description"  name="description" :value="old('description')" required autofocus autocomplete="title" ></textarea>
                                            <x-input-label for="description" :value="__('description')" />
                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input id="numberofrooms" class="form-control bg-transparent" type="number" name="numberofrooms" :value="old('numberofrooms')" required   >
                                            <x-input-label for="email" :value="__('numberofrooms')" />
                                            <x-input-error :messages="$errors->get('numberofrooms')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select id="largeSelect" name="available" class="form-control bg-transparent" >
                                                <option>Choose available</option>
                                                <option value="0" >available</option>
                                                <option value="1" >unavailable</option>
                                            </select>
                                            <x-input-label for="password" :value="__('available')" />
                                            <x-input-error :messages="$errors->get('available')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input
                                                type="file"
                                                name="image1"
                                                class="form-control bg-transparent"
                                                id="image1"
                                                placeholder="image1"
                                                aria-describedby="floatingInputHelp"
                                            />
                                            <x-input-label for="image1" :value="__('image1')" />

                                            <x-input-error :messages="$errors->get('image1')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input
                                                type="file"
                                                name="image2"
                                                class="form-control bg-transparent"
                                                id="image2"
                                                placeholder="image2"
                                                aria-describedby="floatingInputHelp"
                                            />
                                            <x-input-label for="image2" :value="__('image2')" />

                                            <x-input-error :messages="$errors->get('image2')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input
                                                type="file"
                                                name="image3"
                                                class="form-control bg-transparent"
                                                id="image3"
                                                placeholder="image3"
                                                aria-describedby="floatingInputHelp"
                                            />
                                            <x-input-label for="image3" :value="__('image3')" />

                                            <x-input-error :messages="$errors->get('image3')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input
                                                type="file"
                                                name="image4"
                                                class="form-control bg-transparent"
                                                id="image4"
                                                placeholder="image4"
                                                aria-describedby="floatingInputHelp"
                                            />
                                            <x-input-label for="image4" :value="__('image4')" />

                                            <x-input-error :messages="$errors->get('image4')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select id="country_id" name="country_id" class="form-select form-select-lg">
                                                <option value="0">Choose country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>

                                            <x-input-label for="country_id" :value="__('country_id')" />
                                            <x-input-error :messages="$errors->get('country_id')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">

                                            <input type="text" class="form-control bg-transparent" id="address"  name="address" :value="old('address')" required autofocus autocomplete="address" >
                                            <x-input-label for="address" :value="__('address')" />
                                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-100 py-3">save</button>




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


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../bookingdesign/lib/wow/wow.min.js"></script>
<script src="../bookingdesign/lib/easing/easing.min.js"></script>
<script src="../bookingdesign/lib/waypoints/waypoints.min.js"></script>
<script src="../bookingdesign/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/moment.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="../bookingdesign/js/main.js"></script>
</body>

</html>
