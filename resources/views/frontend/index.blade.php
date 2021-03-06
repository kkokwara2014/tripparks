@extends('frontend.layout.main')

@section('title','Tripparks - Home')

@section('content')

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5">Tripparks is an app that will enable potential passengers to find various vehicles
                        in different parks!</h1>
                    <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="{{asset('bootstrap_assets/img/demo-screen-1.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Discover what all the buzz is about!</h2>
          <p>Our app is available on any mobile device! Download now to get started!</p>
          <div class="badges">
            <a class="badge-link" href="#"><img src="{{asset('bootstrap_assets/img/google-play-badge.svg')}}"
alt=""></a>
<a class="badge-link" href="#"><img src="{{asset('bootstrap_assets/img/app-store-badge.svg')}}" alt=""></a>
</div>
</div>
</div>
</div>
</section> --}}

<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Available Vehicles in different Parks</h2>
            <p class="text-muted">Tap on the Transportation Company to see their vehicles and parks!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-1 my-auto">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="title">Select State:</label>

                    <select name="state" class="form-control" style="width:350px">

                        <option value="">--- Select State ---</option>

                        @foreach ($states as $key => $value)

                        <option value="{{ $value->id }}">{{ $value->name }}</option>

                        @endforeach

                    </select>

                </div>

                <div class="form-group">

                    <label for="title">Select LGA:</label>

                    <select name="lga" class="form-control" style="width:350px">

                    </select>

                </div>

            </div>
            <div class="col-lg-10 my-auto">
                <div class="container-fluid">
                    <div class="row" style="margin-top: -45px;">
                        <div class="col-lg-12">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Okeyson
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div style="border-left: 3px solid yellowgreen; padding-left: 5px;">
                                                This is Okeyson.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Peace Mass Transit
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div style="border-left: 3px solid yellowgreen; padding-left: 5px;">
                                                This is Peace Mass Transit (PMT).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                ABC Motors
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div style="border-left: 3px solid yellowgreen; padding-left: 5px;">
                                                This is ABC Motors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-1 my-auto"></div>
        </div>
    </div>
</section>



<section class="contact bg-primary" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Follow us on</h2>
                <ul class="list-inline list-social">
                    <li class="list-inline-item social-facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-google-plus">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7" style="font-size: 20px;">
                <h2>Talk to us</h2>
                <div>
                    <i class="fa fa-phone-alt"></i> +2348038883919
                </div>
                <div>
                    <i class="fa fa-envelope"></i> services@tripparks.com
                </div>
            </div>
        </div>

    </div>
</section>
@endsection