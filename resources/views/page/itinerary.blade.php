@extends('layouts.page.default')

@section('content')
    @include('layouts.page.menu')
    @foreach($paquete_iti as $paquetes)
    <section class="position-relative">
        <div class="form-header">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-12 text-center">
                        <h2 class="display-4 text-white font-weight-bold">{{($paquetes->titulo)}}</h2>
                        <i class="fas fa-angle-down fa-6x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-slider-container">
            <div id="home-slider">
                @foreach($paquetes->imagen_paquetes->take(1) as $paquetes_imagen)
{{--                    <img src="{{asset('images/packages/slider/'.$paquetes_imagen->nombre.'')}}" alt="banner gotoperu" id="hero-vid" class="banner-itinerary">--}}
                    <div class="slider-item"><img src="{{asset('images/packages/slider/'.$paquetes_imagen->nombre.'')}}"/></div>
                @endforeach
{{--                <div class="slider-item"><img src="{{asset('images/destinations/banners/machu-picchu.jpg')}}"/></div>--}}
{{--                <div class="slider-item"><img src="{{asset('images/destinations/banners/colca-canyon.jpg')}}"/></div>--}}
{{--                <div class="slider-item"><img src="{{asset('images/destinations/banners/puno.jpg')}}"/></div>--}}
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-red-primary display-4 text-red font-weight-bold">{{($paquetes->titulo)}}</h1>
                    @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                        @if($precio->precio_d > 0)
{{--                            <span class="h1 font-weight-bold text-danger">{{$paquetes->duracion}} days tours from <sup>$</sup>{{$precio->precio_d}}</span>--}}
                            <p class="h4 text-info">{{$paquetes->duracion}} days tours from <sup>$</sup>{{$precio->precio_d}}usd.</p>
                        @else
                            <span class="text-danger">
                                Inquire
                            </span>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Itinerary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Inquire</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col">
                                            {{--                                    <h5>Hidden Treasures Of Northern Peru</h5>--}}
                                            @php echo $paquetes->descripcion; @endphp
                                        </div>
                                    </div>
                                    {{--                            <div class="row mb-3">--}}
                                    {{--                                <div class="col">--}}
                                    {{--                                    <div class="alert alert-red-light font-weight-bold">--}}
                                    {{--                                        <span><sup>$</sup>1890usd pp for 2 travelers</span> | 8 days--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}

                                    {{--                            </div>--}}
                                    <div class="row py-3">
                                        <div class="col-12 mb-3 mb-lg-0 col-lg d-flex">
                                            @foreach($paquetes->paquetes_categoria as $categoria)
                                                <div class="card p-3 w-100">
                                                    <h5 class="text-secondary font-weight-bold"><i class="fas fa-angle-right"></i> @lang('itinerary.category'): <span class="text-primary">{{ucwords(strtolower($categoria->categoria->nombre))}}</span></h5>
                                                    <p>{{$categoria->categoria->descripcion}}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-12 mb-3 mb-lg-0 col-lg d-flex">
                                            <div class="card p-3 w-100">
                                                @foreach($dificultad->where('idpaquetes', $paquetes->id) as $dificultades)
                                                    <h5 class="text-secondary font-weight-bold"><i class="fas fa-angle-right"></i> @lang('itinerary.physical_demand'): <span class="text-primary text-capitalize">{{$dificultades->dificultad->nombre}}</span></h5>
                                                    <p>{{$dificultades->dificultad->descripcion}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col">

                                            <div class="main-content position-relative">
                                                <div class="owl-carousel owl-theme">
                                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
{{--                                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($paquete_destino->destinos->nombre))])}}-tours"><img src="{{asset('images/destinations/'.str_replace(' ','-', strtolower($paquete_destino->destinos->imagen)).'')}}" alt="" width="50" height="50" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($paquete_destino->destinos->nombre))}}">--}}
{{--                                                        </a>--}}
                                                        <div class="item">
                                                            <img src="{{asset('images/destinations/'.str_replace(' ','-', strtolower($paquete_destino->destinos->imagen)).'')}}" alt="" class="w-100">
                                                        </div>
                                                    @endforeach
{{--                                                    <div class="item">--}}
{{--                                                        <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="item">--}}
{{--                                                        <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="item">--}}
{{--                                                        <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="item">--}}
{{--                                                        <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="owl-theme">
                                                    <div class="owl-controls">
                                                        <div class="custom-nav owl-nav"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    @php $day = 1; @endphp
                                    @foreach($paquetes->paquete_itinerario as $itinerario)
                                        <div class="row pt-4" id="section-{{$itinerario->itinerarios->id}}">
                                            <div class="col-12 col-md-12 col-lg-8">
                                                <h6 class="text-g-yellow font-weight-normal"><span class="badge badge-g-dark">Day {{$day}}:</span> <strong>{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</strong>
                                                </h6>
                                                @php echo $itinerario->itinerarios->resumen; @endphp
                                            </div>
                                            <div class="col-12 col-md-12 col-lg">
                                                <div class="box15 float-right rounded">
                                                    @foreach($imagen->where('iditinerario', $itinerario->itinerarios->id)->take(1) as $img)
                                                        <img src="{{asset('images/itinerario/'.$img->nombre.'')}}" alt="" class="rounded">
                                                    @endforeach
                                                    <div class="box-content text-center">
                                                        <h3 class="title">@lang('itinerary.view_gallery')</h3>
                                                        <ul class="icon p-0">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal-img-{{$itinerario->itinerarios->id}}"><i class="fas fa-camera"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modal-img-{{$itinerario->itinerarios->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-0 rounded">
                                                                <div id="carouselExampleFade{{$itinerario->itinerarios->id}}" class="carousel slide carousel-fade" data-ride="carousel">
                                                                    <div class="carousel-inner">

                                                                        @php
                                                                            $k = 0;
                                                                        @endphp
                                                                        @foreach($imagen->where('iditinerario', $itinerario->itinerarios->id) as $img)
                                                                            @if($k == 0)
                                                                                @php $act = 'active'; @endphp
                                                                            @else
                                                                                @php $act = ''; @endphp
                                                                            @endif

                                                                            <div class="carousel-item {{$act}}">
                                                                                <img class="d-block w-100 rounded" src="{{asset('images/itinerario/'.$img->nombre.'')}}" alt="First slide">
                                                                            </div>

                                                                            @php $k++; @endphp
                                                                        @endforeach
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleFade{{$itinerario->itinerarios->id}}" role="button" data-slide="prev">
                                                                        <i class="fas fa-angle-left text-white fa-2x"></i>
                                                                        <span class="sr-only">@lang('itinerary.previous')</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleFade{{$itinerario->itinerarios->id}}" role="button" data-slide="next">
                                                                        <i class="fas fa-angle-right text-white fa-2x"></i>
                                                                        <span class="sr-only">@lang('itinerary.next')</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        @php $day++; @endphp
                                    @endforeach
                                </div>
                                <div class="d-none d-sm-inline col-sm-6 d-md-none">
                                    <div class="sticky-top sticky-top-50 mt-5">
                                        <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                                            <nav class="nav nav-pills flex-column w-100">
                                                {{--@foreach($paquetes->itinerario->sortBy('dia') as $itinerario)--}}
                                                {{--<a class="nav-link active font-italic" href="#section-{{$itinerario->id}}"><span class="badge badge-secondary">Day {{$itinerario->dia}}:</span> <small>{{ucwords(strtolower($itinerario->titulo))}}</small></a>--}}
                                                {{--@endforeach--}}
                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <div class="accordion" id="accordionExample">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="headingOne">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                        <span class="font-weight-bold text-red-primary">Day 1: Welcome to Trjillo</span>--}}
{{--                                                    </button>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}

{{--                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Welcome to Trujillo in Northern Peru! Upon arrival, we’ll welcome you at Trujillo’s airport or bus station and transfer you to our hotel, where we will take a few minutes to brief you on your upcoming program. Depending on our arrival time, we may have a free morning to relax at the hotel. In the afternoon, we’ll explore the Temple of the Moon, a pre-Hispanic mud pyramid, sacred to the Moche Civilization (100 – 750 A.D.) and famous for its stunning mural paintings, which have withstood the passage of time. These murals depict the daily lives of the Moche people as well as their main deities. The Moches (or Mochicas) are one of the most intriguing pre-Hispanic civilizations of Peru, and it’s fascinating to compare how different they were to the Incas.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="headingTwo">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                                        <span class="font-weight-bold text-red-primary">Day 2: Welcome to Trjillo</span>--}}
{{--                                                    </button>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" id="headingThree">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                        <span class="font-weight-bold text-red-primary">Day 3: Welcome to Trjillo</span>--}}
{{--                                                    </button>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="tab-pane fade p-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Full Name">
                                    </div>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-users"></i></span>
                                        </div>
                                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Number travellers">
                                    </div>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email Address">
                                    </div>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-map"></i></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Country">
                                    </div>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Phone">
                                    </div>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Travel Date">
                                    </div>
                                    <h5 class="d-block">Zusätzliche Information*</h5>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                    <div class="input-group mt-4">
                                        <button class="btn btn-red-primary btn-lg btn-block">Request a Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-5">--}}
{{--                    <div class="sticky-top" style="height: 90vh;">--}}
{{--                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dLyPsUiYkfGAsslz4A3MGjGw8iHuCHg4" width="100%" height="100%"></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.item -->

    @endforeach
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
                            <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/destinations/galapagos.jpg')}}" alt="" class="w-100">
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
            $('.main-content .owl-carousel').owlCarousel({
                loop:true,
                nav:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '.main-content .custom-nav',
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
                        nav:true,

                        navText: [
                            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                        ],
                        navContainer: '.main-content .custom-nav',
                    }
                }
            });

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
