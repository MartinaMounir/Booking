
@include('layouts.app')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                <div class="position-relative w-75 mx-auto animated slideInDown">
                    <form class="d-flex tm-search-form" method="get" action="{{url('/')}}">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"  type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;" type="submit">
                        Search
                    </button> </form>
                    </div>
            </div>


        </div> </div>
</div>
<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">

                @foreach($Stays as $Stay)
                    @if ($Stay->available == 0)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('/storage/stays/' .$Stay->image1)}}" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$Stay->country->name}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-house text-primary me-2"></i>{{date('j F Y',strtotime($Stay->created_at))}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$Stay->numberofrooms}} Rooms</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{$Stay->title}}</h3>

                        <p>{{ substr($Stay->description, 0,  50) }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{url('stays/' .$Stay->id)}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>

                            <a href="{{url('cart/add/' .$Stay->id)}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>


                @endif
            @endforeach

        </div>
    </div>
</div>

