@extends('layouts.page.default')

@section('content')
    @include('layouts.page.menu')
    <section class="position-relative">
        <div class="form-header">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-12 text-center">
                        <h2 class="display-4 text-white font-weight-bold">Peru Reiseziele</h2>
                        <i class="fas fa-angle-down fa-6x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-slider-container">
            <div id="home-slider">
                <div class="slider-item"><img src="{{asset('images/destinations/banners/machu-picchu.jpg')}}"/>
                    {{--<div class="container">--}}
                    {{--<div class="slider-content row align-items-center">--}}
                    {{--<div class="container">--}}
                    {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                    {{--<h2 class="display-4 font-weight-bold text-white">Auf mystischen <span class="d-block">Wegen</span></h2>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="slider-item"><img src="{{asset('images/destinations/banners/colca-canyon.jpg')}}"/>
                    {{--<div class="container">--}}
                    {{--<div class="slider-content row align-items-center">--}}
                    {{--<div class="container">--}}
                    {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                    {{--<h2 class="display-4 font-weight-bold text-white">Kraftorte <span class="d-block">Erleben</span></h2>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="slider-item"><img src="{{asset('images/destinations/banners/puno.jpg')}}"/>
                    {{--<div class="container">--}}
                    {{--<div class="slider-content row align-items-center">--}}
                    {{--<div class="container">--}}
                    {{--<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col">--}}
                    {{--<h2 class="display-4 font-weight-bold text-white">Besonderen <span class="d-block">Menschen Begegnen</span></h2>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-red-primary display-4 text-red font-weight-bold">Title Packages</h1>
                    <p class="h4 text-info">5 days tours from $200usd.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="sticky-top" style="height: 90vh;">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dLyPsUiYkfGAsslz4A3MGjGw8iHuCHg4" width="100%" height="100%"></iframe>
                    </div>
                </div>
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
                                <div class="col">
                                    <h5>Hidden Treasures Of Northern Peru</h5>
                                    <p>With over 5,000 years of history in Peru, the Inca Empire is just the tip of the iceberg! Head north and discover the pre-Inca archaeological treasures lying in the desert and its coastal valleys. Explore the Mochica pyramids, the huge mud-brick city of Chan Chan and the Tucume pyramids of the Sican people. Then, drive to the relatively unexplored Amazonas region. Cross the Andes to enter the cloud forest on a trip to Gocta Waterfall and Kuelap, a walled Chachapoya fortress that is known as the Machu Picchu of the north. Prepare to enter a land of hidden treasures in Northern Peru!</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="alert alert-red-light font-weight-bold">
                                        <span><sup>$</sup>1890usd pp for 2 travelers</span> | 8 days
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <h5>Why we love this trip</h5>
                                            <ul>
                                                <li>Visit the most important Mochica temples in Trujillo</li>
                                                <li>Hike to Gocta waterfall, which plunges 2,530 feet (771 m)</li>
                                                <li>Take a cableway ride across the mountains to the fortress of Kuelap</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span class="font-weight-bold text-red-primary">Day 1: Welcome to Trjillo</span>
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Welcome to Trujillo in Northern Peru! Upon arrival, we’ll welcome you at Trujillo’s airport or bus station and transfer you to our hotel, where we will take a few minutes to brief you on your upcoming program. Depending on our arrival time, we may have a free morning to relax at the hotel. In the afternoon, we’ll explore the Temple of the Moon, a pre-Hispanic mud pyramid, sacred to the Moche Civilization (100 – 750 A.D.) and famous for its stunning mural paintings, which have withstood the passage of time. These murals depict the daily lives of the Moche people as well as their main deities. The Moches (or Mochicas) are one of the most intriguing pre-Hispanic civilizations of Peru, and it’s fascinating to compare how different they were to the Incas.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="font-weight-bold text-red-primary">Day 2: Welcome to Trjillo</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="font-weight-bold text-red-primary">Day 3: Welcome to Trjillo</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.item -->


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
