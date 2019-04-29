@extends('layouts.page.default')

@section('content')

    @include('layouts.page.menu')

    <section class="position-relative">
        <div class="form-header">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-4">
                        <form class="bg-rgba-dark-5 p-3 rounded-top">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="From*">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="To*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Number of travelers">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Category">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="E-mail*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Questions & requirements"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-red-dark btn-block btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-slider-container">
            <div id="home-slider">
                <div class="slider-item"><img src="{{asset('images/sliders/slider-4.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item"><img src="{{asset('images/sliders/slider-5.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Kraftorte <span class="d-block">Erleben</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item"><img src="{{asset('images/sliders/slider-6.jpg')}}"/>
                    <div class="container">
                        <div class="slider-content row align-items-center">
                            {{--<div class="container">--}}
                            {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                            {{--</div>--}}
                            <div class="col">
                                <h2 class="display-4 font-weight-bold text-white">Besonderen <span class="d-block">Menschen Begegnen</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-red-primary display-4 text-red font-weight-bold">Peru Reisepakete Voll Anpassbar</h1>
                    <p class="h4 text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
            <div class="container">
                {{--<div class="row">--}}
                    {{--<div class="col os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                        {{--<h5 class="">ncredible Travel Experiences</h5>--}}
                        {{--<hr>--}}
                        {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row align-items-center">
                    <div class="col">
                            <div class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <h4 class="text-secondary font-weight-bold">Willkommen Auf  KOLIBRI PERU TRAVEL</h4>
                                <hr>
                            </div>
                            <div class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
                                <p class="lead font-weight-normal text-secondary">Wir sind Ihre ideale Wahl für eine unvergessliche Reise durch Peru. Bei KOLIBRI PERU TRAVEL verbinden wir abwechslungreiche Natur mit der Kultur unserer Vorfahren, speziell ausgewählten Unterkünften und exzellentem Essen.</p>
                                <p><b>Lassen Sie sich verzaubern von einer der mystischsten Kulturen dieser Erde.</b></p>
                            </div>
                    </div><!-- /.col-md-6 col -->
                    <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="content-video-1">
                                <img src="{{asset('images/video.jpg')}}" alt="video" class="w-100 rounded">
                                <div class="content-video-btn-1">
                                    <a href="https://youtu.be/Zk9J5xnTVMA"  class="html5lightbox content-vbtn-color-blue" data-width="700" data-height="500"><i class="fa fa-play-circle"></i></a>
                                </div>
                            </div>
                    </div><!-- /.col-md-6 col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section><!-- /.item -->

    <section class="my-5 bg-light py-5">
        <div class="container">

            <div class="row">
                <div class="col text-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h2 class="font-weight-bold text-secondary">What it can do for you</h2>

                    <div class="sec-title-div-3"></div>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                </div>
            </div>

            <div class="row">

                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="gallary-1">
                        <div class="row">
                            <div class="col">
                                <a href="{{route('itinerary_path', 'title')}}"><img src="{{asset('images/banners/home/cusco.jpg')}}" alt="content area" class="w-100"></a>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="col">
                                <h4 class="text-left my-3">Title Packages</h4>
                            </div>
                        </div>
                        <div class="row px-3 pb-3">
                            <div class="col-3">
                                <div class="gym-class bg-red-light font-weight-bold text-center">
                                    <p class="date text-white m-0">22</p>
                                    <p class="days text-white m-0 font-weight-normal">days</p>
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="text-left m-0 font-weight-bold text-secondary">Destinations:</p>
                                <p class="text-left m-0 small text-red-primary">Lima, Cusco, Arequipa, Machu Picchu.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="gallary-1">
                        <div class="row">
                            <div class="col">
                                <a href="{{route('itinerary_path', 'title')}}"><img src="{{asset('images/banners/home/lima.jpg')}}" alt="content area" class="w-100"></a>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="col">
                                <h4 class="text-left my-3">Title Packages</h4>
                            </div>
                        </div>
                        <div class="row px-3 pb-3">
                            <div class="col-3">
                                <div class="gym-class bg-red-light font-weight-bold text-center">
                                    <p class="date text-white m-0">22</p>
                                    <p class="days text-white m-0 font-weight-normal">days</p>
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="text-left m-0 font-weight-bold text-secondary">Destinations:</p>
                                <p class="text-left m-0 small text-red-primary">Lima, Cusco, Arequipa, Machu Picchu.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="gallary-1">
                        <div class="row">
                            <div class="col">
                                <a href="{{route('itinerary_path', 'title')}}"><img src="{{asset('images/banners/home/titicaca.jpg')}}" alt="content area" class="w-100"></a>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="col">
                                <h4 class="text-left my-3">Title Packages</h4>
                            </div>
                        </div>
                        <div class="row px-3 pb-3">
                            <div class="col-3">
                                <div class="gym-class bg-red-light font-weight-bold text-center">
                                    <p class="date text-white m-0">22</p>
                                    <p class="days text-white m-0 font-weight-normal">days</p>
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="text-left m-0 font-weight-bold text-secondary">Destinations:</p>
                                <p class="text-left m-0 small text-red-primary">Lima, Cusco, Arequipa, Machu Picchu.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col text-center">
                    <a href="{{route('packages_path')}}" class="btn btn-lg btn-info">View All Packages</a>
                </div>
            </div>

            <div class="row d-none">

                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="content-area-2">
                        <div class="row">
                            <div class="col ">
                                <img src="images/travel/content-area-1.png" alt="content area" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="travel-duration bg-red-primary text-center ml-3">
                                <p class="date text-white m-0">22</p>
                                <p class="days text-white m-0">days</p>
                            </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-9">
                                <h6 class="text-left">Title Packages</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="text-red-primary">$200.00</h6>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="content-area-2">
                        <div class="row">
                            <div class="col ">
                                <img src="images/travel/content-area-1.png" alt="content area" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="travel-duration bg-red-primary text-center ml-3">
                                    <p class="date text-white m-0">22</p>
                                    <p class="days text-white m-0">days</p>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-9">
                                <h6 class="text-left">Title Packages</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="text-red-primary">$200.00</h6>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
                <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="content-area-2">
                        <div class="row">
                            <div class="col ">
                                <img src="images/travel/content-area-1.png" alt="content area" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="travel-duration bg-red-primary text-center ml-3">
                                    <p class="date text-white m-0">22</p>
                                    <p class="days text-white m-0">days</p>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-9">
                                <h6 class="text-left">Title Packages</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="text-red-primary">$200.00</h6>
                            </div>
                        </div>

                    </div>
                </div><!-- /.col-md-4 col -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>

    <section class="d-none">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-yellow p-2 text-center">
                                <h5 class="text-white m-0">MachuPicchu - Koliri</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-orange p-2 text-center">
                                <h5 class="text-white m-0">Ecuador Tours</h5>
                                {{--<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-g-green p-2 text-center">
                                <h5 class="text-white m-0">Peru Tours</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images/banners/banner-3.jpg')}}" alt="Card image cap">
                            <div class="card-body bg-info p-2 text-center">
                                <h5 class="text-white m-0">Koliri Cruises</h5>
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>--}}
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-secondary">Welcome to The World’s #1 KOLIBRI Site</h2>
                    <div class="sec-title-div-3"></div>
                    <p class="font-weight-normal lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit mollitia neque officia quam quis reiciendis tenetur vero voluptatibus voluptatum. Architecto dolor eligendi eum inventore ipsum odio porro ut voluptatibus!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 bg-light d-none">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold text-g-orange">June Feature Program</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-5">
        <div class="container pb-5">
            <!------------------ Hover Effect Style : Demo - 16 --------------->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="box16">
                            <img src="{{asset('images/banners/authentish.jpg')}}" class="w-100">
                            <div class="box-content">
                                <h3 class="title">Authentish</h3>
                                <span class="post">
                                    <a href="{{route('packages_path')}}" class="text-white">View Packages</a>
                                </span>
                                {{--<ul class="social">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box16">
                            <img src="{{asset('images/banners/activamente.jpg')}}" class="w-100">
                            <div class="box-content">
                                <h3 class="title">activamente</h3>
                                <span class="post">
                                    <a href="{{route('packages_path')}}" class="text-white">View Packages</a>
                                </span>
                                {{--<ul class="social">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box16">
                            <img src="{{asset('images/banners/clasico.jpg')}}" class="w-100">
                            <div class="box-content">
                                <h3 class="title">clásico</h3>
                                <span class="post">
                                    <a href="{{route('packages_path')}}" class="text-white">View Packages</a>
                                </span>
                                {{--<ul class="social">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-1 pb-5 bg-light d-none">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-9 col-md-8 col-xl-8 d-flex">
                    <div class="container-fluid p-0">

                        <div class="slider-containers">

                            <!--effect #1 -->
                            <div class="slider-container">
                                <div class="flexbox-slider flexbox-slider-1">
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/cusco.jpg')}}" alt="Cusco">
                                        <div class="text-block">
                                            <h3>Cusco</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/lima.jpg')}}" alt="Lima">
                                        <div class="text-block">
                                            <h3>Lima</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/machupicchu.jpg')}}" alt="Machu Picchu">
                                        <div class="text-block">
                                            <h3>Machu Picchu</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/titicaca.jpg')}}" alt="Titicaca">
                                        <div class="text-block">
                                            <h3>Lake Titicaca</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <div class="flexbox-slide">
                                        <img src="{{asset('images/banners/home/valle.jpg')}}" alt="Sacred Valley">
                                        <div class="text-block">
                                            <h3>Sacred Valley</h3>
                                            {{--<div class="text">--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-xl-4  align-items-center bg-g-dark p-3">
                    <div class="row">
                        <div class="col">
                            <h2 class="h1 text-g-yellow font-weight-bold font-philosopher">10 DAYS</h2>
                            <p class="text-light">Cusco, Lima, Machu Picchu, Lake Titicaca, Sacred Valley.</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <table class="table table-light w-100 table-sm">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">1 Person</th>
                                    <th scope="col">2 People</th>
                                    <th scope="col">3 People</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Luxury</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">First class</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mid-Range</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                <tr>
                                    <th scope="row">Budget</th>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                    <td class="font-weight-bold text-secondary"><sup class="text-g-orange">US$</sup>1035</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <a href="" class="btn btn-g-orange font-philosopher">Show Itinerary Details</a>
                            <a href="" class="btn btn-g-orange font-philosopher">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-block bg-l py-5">
        <div id="overlay" class="overlay-img position-relative overlay">
            <img src="{{asset('images/sliders/slider-2.jpg')}}" alt="" id="hero-vid" class="w-100 hero-vid">
            <div class="divider-mid">
                <div class="container">
                    <div class="row divider-mid-h-40 align-items-center">
                        <div class="col-5">
                            <div class="bg-rgba-white-8 rounded p-4">
                                <h2 class="font-weight-bold font-philosopher text-center">Why Choose Koliri Islands.com?</h2>
                                <ul class="list-unstyled h5">
                                    <li><i class="fas fa-check-square text-g-orange"></i> Specialist Koliri Trip Advisors</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> #1 online seller of Koliri tours</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> Lowest Price Guaranteed</li>
                                    <li><i class="fas fa-check-square text-g-orange"></i> Free Koliri Trip Planning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-rgba-white-8 rounded p-4 w-100">
                                <h2 class="font-weight-bold font-philosopher pb-3 text-center">Koliri Travel Tips</h2>
                                <div class="row">
                                    <div class="col text-center">
                                        <i class="fas fa-plane fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Flights</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-sun fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Weather</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-ship fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Big or Small boat</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-calendar fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">When  to go</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-question fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">FAQs</small>
                                    </div>
                                    <div class="col text-center">
                                        <i class="fas fa-h-square fa-3x"></i>
                                        <small class="d-block text-g-orange font-weight-bold">Cruise or Hotel based tour</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-secondary">Welcome to The World’s #1 Koliri Travel Site</h2>
                    <p class="font-weight-normal lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit mollitia neque officia quam quis reiciendis tenetur vero voluptatibus voluptatum. Architecto dolor eligendi eum inventore ipsum odio porro ut voluptatibus!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            {{--<div class="rounded-top p-2 bg-g-yellow h3 m-0 font-kalam text-center">MachuPicchu - Koliri</div>--}}
                            <img src="{{asset('images/packages/gt1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="bg-dark">
                                        <div class="row text-center text-white">
                                            <div class="col p-3 ">Tours</div>
                                            <div class="col p-3 ">Duration</div>
                                            <div class="col p-3 ">Per person from</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="list-group rounded-0">
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('itinerary_path', '3')}}" class="list-group-item list-group-item-action rounded-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <small class="font-weight-bold">Koliri Discover</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold">6 Days <span class="text-g-yellow">/</span> 5 Nights</small>
                                                                    </div>
                                                                    <div class="col text-center">
                                                                        <small class="font-weight-bold"><sup class="text-g-yellow">US$</sup>1035</small>
                                                                    </div>
                                                                </div>
                                                            </a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Scroll Bar -->
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    {{--<div class="row mt-2">--}}
                                        {{--<div class="col text-right">--}}
                                            {{--<a href="" class="btn-link font-weight-normal text-secondary">Vew All MachuPicchu - Koliri Packages <i class="fa fa-chevron-right"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            {{--<div class="rounded-top p-2 h3 m-0 font-kalam text-center">Ecuador Tours</div>--}}
                            <img src="{{asset('images/banners/clasico.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col text-center">
                    <a href="" class="btn btn-lg btn-info">View All Tours</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-secondary">WARUM SIE NACH PERU  REISEN SOLLEN</h2>
                    <div class="sec-title-div-3"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">1</span>
                                    <p class="card-text">Orte besuchen, wo das Inkareich und anderen peruanischen Kulturen seinen Ursprung hatte.Cusco; die ehemalige Inka-Haupstadt, ist der Ausgangspunkt für den Besuch von Machupicchu; südliche küste mit den tierreichen Ballestas Insel, der versteckten Huacachina Oase, den mysteriösen Nazca-Linien; Arequipa “die weisse Stadt”, führt zu eine der tiefsten Schlucht der Welt und Titicacasee, die höchste schiffbarste See der Welt.</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">2</span>
                                    <p class="card-text">Doch Peru ist Weit mehr als nur die : Das Inland Nordperus und Das Andenzentral sind touristisch noch nicht so sehr erschlossen. Unentdeckten schönheiten des Norden mit der ruinenstätte Kuelap, den Machupicchu des Norden; dem atemberaubenden Gocta-Wasserfall, dem Surferparadies Mancora oder dem spektakulären andenpanorama um Huaraz. Das ursprüngliche Peru “Das Andenzentral” mit dem Landschaftsreservat “ Nor Yauyos Cocha” ;  der Route Highlights der Hochland von Lima Nach cusco mit Bus und schmalspurbahn.</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">3</span>
                                    <p class="card-text">Tauchen Sie ein in die lebendige Festkultur. Gibt es zu allen Jahreszeiten sehr viele Feste, ritualzeremonien sowie Inti raymi, Tänze, Religiöse Prozessionen, einen Masken-Karneval una Paraden mit viel Live-Musik sowie lokale Feste .</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">4</span>
                                    <p class="card-text">Lieben Sie die exostische Natur: Sie können unglaubliche Tiere und Pflanzenwelt kennenlernen. Lassen Sie Von Amazonas-Dschungel verzaubern.</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">5</span>
                                    <p class="card-text">Für Wanderfreudigen und Bergsteiger, die gerne aktiv unterwegs sind, hält Peru ebenfalls jede Menge möglichkeiten bereit: Trekking in der Cordillera Blanca, auf dem Inka-Trail nach Machupicchu, durch den Colca Canyon-Arequipa, Besteigung auf fünftaunsender Bergen sowie der Ampato Vulkan -Arequipa und der Schneebedeckter Berg Huascaran-Huaraz.</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">6</span>
                                    <p class="card-text">Für Geniesser und Kulinarik-Freunde: Das Essen hat in peru einen Extrem hohen Stellenwert. Wusten Sie nämlich, dass Peru bereits zum fünten mal in folge mit dem world TRavel award als bestes Kulinarisches Reiseziel der Welt augezeichnet wurde?</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Special title treatment</h5>--}}
                                    <span class="py-3 px-4 bg-red-light rounded rounded-circle h3 font-weight-bold text-white float-left m-3">7</span>
                                    <p class="card-text">Es erwarten Sie freundliche Menschen mit faszierenden  Lebeneinstellungen, von denen wir eine Menge lernen können.</p>
                                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--@include('layouts.page.form-quote')--}}

    @include('layouts.page.design')

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:false,
                        loop:false
                    }
                }
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function(){

                // Toolbar extra buttons
                var btnFinish = $('<button></button>').text('Finish')
                    .addClass('btn btn-info')
                    .on('click', function(){
                        if( !$(this).hasClass('disabled')){
                            var elmForm = $("#myForm");
                            if(elmForm){
                                elmForm.validator('validate');
                                var elmErr = elmForm.find('.has-error');
                                if(elmErr && elmErr.length > 0){
                                    alert('Oops we still have error in the form');
                                    return false;
                                }else{
                                    alert('Great! we are ready to submit form');
                                    elmForm.submit();
                                    return false;
                                }
                            }
                        }
                    });
                var btnCancel = $('<button></button>').text('Cancel')
                    .addClass('btn btn-danger')
                    .on('click', function(){
                        $('#smartwizard').smartWizard("reset");
                        $('#myForm').find("input, textarea").val("");
                    });



                // Smart Wizard
                $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    showStepURLhash: false, // Show url hash based on step
                    toolbarSettings: {toolbarPosition: 'bottom',
                        toolbarExtraButtons: [btnFinish, btnCancel]
                    },
                    anchorSettings: {
                        markDoneStep: true, // add done css
                        markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                        removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                        enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                    },
                    lang: { // Language variables for button
                        next: 'Next',
                        previous: 'Previous'
                    },
                });

                $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                    var elmForm = $("#form-step-" + stepNumber);
                    // stepDirection === 'forward' :- this condition allows to do the form validation
                    // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                    if(stepDirection === 'forward' && elmForm){
                        elmForm.validator('validate');
                        var elmErr = elmForm.children('.has-error');
                        if(elmErr && elmErr.length > 0){
                            // Form validation failed
                            return false;
                        }
                    }
                    return true;
                });

                $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                    // Enable finish button only on last step
                    if(stepNumber == 4){
                        $('.btn-finish').removeClass('disabled');
                    }else{
                        $('.btn-finish').addClass('disabled');
                    }
                });

            });

            $(document).ready(function(e){
                $(".img-check").click(function(){
                    $(this).toggleClass("check");
                });
            });
        </script>
    @endpush
@stop
