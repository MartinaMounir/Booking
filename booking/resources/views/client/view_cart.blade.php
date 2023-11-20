
@include('layouts.app')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Cart</h1>
                <div class="position-relative w-75 mx-auto animated slideInDown">

                </div>
            </div>


        </div> </div>
</div>
<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Cart</h6>

        </div>
        <div class="row g-4 justify-content-center">

                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>title</th>
                            <th>image1</th>
                            <th>image2</th>
                            <th>image3</th>
                            <th>image4</th>
                            <th>
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0  ">
                        @foreach($orders as $order)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order->stay->title}}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                        src="{{asset('/storage/Stays/' .$order->stay->image1)}}" width="150"></img></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                        src="{{asset('/storage/Stays/' .$order->stay->image2)}}" width="150"></img></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                        src="{{asset('/storage/Stays/' .$order->stay->image3)}}" width="150"></img></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                        src="{{asset('/storage/Stays/' .$order->stay->image4)}}" width="150"></img></td>
<td>
    <form action="{{route('stays.destroy',$order->stay_id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger rounded-pill py-2 px-4"> delete
        </button>
    </form>
</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>


        </div>
    </div>
</div>


