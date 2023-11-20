
@include('layouts.app')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Stays</h1>
                 <div class="position-relative w-75 mx-auto animated slideInDown">

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
            @foreach($stays as $stay)
                @if ($stay->available == 0)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('/storage/stays/' .$stay->image1)}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$stay->country->name}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-house text-primary me-2"></i>{{date('j F Y',strtotime($stay->created_at))}}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$stay->numberofrooms}} Rooms</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$stay->title}}</h3>

                            <p>{{ substr($stay->description, 0,  50) }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{url('stays/' .$stay->id)}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{url('cart/add/' .$stay->id)}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

        </div>
    </div>
</div>


