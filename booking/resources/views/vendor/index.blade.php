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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../bookingdesign/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../bookingdesign/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../bookingdesign/css/style.css" rel="stylesheet">
</head>
<body>
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Striped Rows -->
    <div class="card">
        <div class="row card-header">
        <div class="col-9">
            <h5  >Stays List</h5></div>
        <div class=" col-1  ">
        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{route('vendor.vendor.create')}}">
            Add
        </a>
        </div>
            <div class=" col-2  ">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();" class="btn btn-primary rounded-pill py-2 px-4">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div></div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>description</th>
                    <th>numberofrooms</th>
                    <th>available</th>
                    <th>Country</th>
                    <th>Address</th>
                    <th>image1</th>
                    <th>image2</th>
                    <th>image3</th>
                    <th>image4</th>
                    <th>Added At</th>
                    <th>Edit</th>
                    <th>
                        Delete
                    </th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0  ">
                @foreach($Stays as $Stay)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Stay->id}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Stay->title}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{$Stay->description}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{$Stay->numberofrooms}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Stay->available}}</strong>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Stay->address}}</strong>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{$Stay->country->name}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                src="{{asset('/storage/Stays/' .$Stay->image1)}}" width="150"></img></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                src="{{asset('/storage/Stays/' .$Stay->image2)}}" width="150"></img></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                src="{{asset('/storage/Stays/' .$Stay->image3)}}" width="150"></img></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img
                                src="{{asset('/storage/Stays/' .$Stay->image4)}}" width="150"></img></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{date("F j,Y,g:i a",strtotime($Stay->created_at))}}</strong></td>
                        <td><a class="btn btn-primary rounded-pill py-2 px-4"
                               href="{{route('vendor.vendor.edit',$Stay->id)}}">
                                edit
                            </a></td>
                        <td>
                            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
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
    <!--/ Striped Rows -->
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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

