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
                    <h1 class="text-red-primary display-4 text-red font-weight-bold">PERUVIAN DREAMTIME</h1>
                    <p class="h4 text-info">Wir –Peruvian  Dreamtime –sind  einekleiner,  aber  feiner  Reiseveranstalter  für authentische und nachhaltige Reiseerlebnisse in Peru.</p>
                    <p>Seit  10  Jahren  organisieren  wir  kleinere  Reisen  für  Freunde  und  Bekannte,  wobei wir  maßgeschneiderteProgramme  angeboten  haben.  Ausgehend  von  den  dabei gesammelten positiven Erfahrungen starten wir nun damit, Rundreiseprogramme für Gruppen anzubieten.</p>
                    <p>Wir legen großen Wert darauf, die Menschen zum Reisen zu motivieren, und lassen sie dabei an den schönsten Seiten Perus teilhaben, die mit einzigartigen und unvergesslichen Erfahrungen verknüpft sind.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-red-dark font-weight-bold">UNSERE UNTERNEHMENSPHILOSOPHIE:</h4>
                    {{--<p>Peru zählt nicht nur zu den ältesten Kulturzentren, es ist auch eines der energetischsten Zentren unserer Erde und voller alter spiritueller Weisheiten. Unsere Vorfahren lebten im ständigen Einklang und Ausgleich mit der Natur. Wir bieten auf jeder Reise mit Ihnen vielfältige Entspannungsübungen an, wo alle Sinne mitspielen, dabei  setzen wir uns an bestimmten energetischen Orten mit den Naturelementen in Kontakt</p>--}}

                    <h5 class="text-red-dark">UNSER MOTTO : Mein Herz geht auf Reisen</h5>
                    <p>Deshalb ist es jetzt Zeit, den Alltag hinter sich zu lassen und an die Orte zu reisen, die nicht nur alle Ihre Sinne erfreuen, sondern auch Ihre Seele berühren</p>
                    <p><b>Unsere Vision:</b> Alle Menschen dazu zu bewegen, unser schönes Peru zu erforschen.</p>
                    <p><b>Unser Anspruch:</b> Den Besuch der klassischen Ziele Perus reichhaltiger zu gestalten und zu verbessern, mit Reisen, die zu eigenen Aktivitäten einladen, mit abenteuerlichen Routen und authentischen Erlebnissen.</p>
                    <p><b>Unser Ziel:</b> Anders zu sein als andere Touranbieter, attraktivere und innovative Produkte auf dem Tourismussektor anzubieten.</p>

                    <h5 class="text-red-dark">WARUM SIE IHR PERU-ERLEBNIS MIT UNS DURCHFÜHREN SOLLTEN:</h5>
                    <ul>
                        <li>Beratung durch Experten vor Ort.</li>
                        <li>Alle Rundreisen beinhaltenfür diejenigen, die daran Gefallen finden, kurze Wanderungen oder Fußmärsche (nicht obligatorisch).</li>
                        <li>Wir bieten einen unüblichen Routenverlauf mit unvergleichlichen Landschaften , die touristisch bisher weitgehend unbekannt sind.</li>
                        <li>Falls Sie Fragen oder Wünsche haben, kontaktieren Sie uns bitte völlig unverbindlich.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">

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
