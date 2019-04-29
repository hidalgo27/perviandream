<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="jwORR3CP8HncGeqMvD-edmeNZKnF1mbTojRwWhyXzZA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<title>Agencia de Viajes en Peru | Tours Machu Picchu</title>--}}
    {{--{!! SEOMeta::generate() !!}--}}
    {{--{!! OpenGraph::generate() !!}--}}
    {{--{!! Twitter::generate() !!}--}}
    <meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">
    <link href="{{asset('images/icons/favicon/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    {{--<link rel="stylesheet" href="http://mm.onokumus.com/assets/css/mm-horizontal.css">--}}


</head>
<body data-spy="scroll" data-target="#menu" class="position-relative">



@yield('content')


{{--<section class="py-5 bg-light d-none d-sm-block">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-facebook.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-asta.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-newyorktimes.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-apotur.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-promperu.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col">--}}
                {{--<img src="{{asset("images/sponsor/logo-meetup.png")}}" alt="" class="img-fluid">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}


<footer class="bg-dark">
{{--    <img src="{{asset('images/footer.jpg')}}" alt="footer gotoperu" class="w-100">--}}
    <div class="container footer-logo">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/logo-dream.png')}}" alt="logo" class="w-100">
                    </div>
                </div>

            </div>
        </div>

        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-12 col-sm-8">--}}
                {{--<div class="alert bg-rgba-dark my-4 text-white text-center" role="alert">--}}
                    {{--O ÚNICO <strong class="text-g-yellow">Operador de Viagem Peruano</strong>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="container">
        <div class="row py-4">
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">RUNDREISE</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">Travel Deals</a></li>--}}
                    <li><a href="" class="text-white">Geheimnisvolles Peru</a></li>
                    <li><a href="" class="text-white">Peru Kompakt</a></li>
                    <li><a href="" class="text-white">Traumhaftes Peru</a></li>
                    <li><a href="" class="text-white">Peru Klassisch</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Tour Packages</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li><a href="{{route('destinations_path')}}" class="text-white">1-3 Days</a></li>--}}
            {{--<li><a href="{{route('deals_path')}}" class="text-white">4-6 Days</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">ÜBER UNS</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="" class="text-white">Über Kolibri Peru Travel</a></li>
                    <li><a href="" class="text-white">FEEDBACK</a></li>
                    <li><a href="" class="text-white">Kontakt</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Hotels</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li><a href="" class="text-white">2 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">3 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">4 Stars</a></li>--}}
            {{--<li><a href="" class="text-white">5 Stars</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Sobre Nós</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white">Sobre Nós</a></li>--}}
                    {{--<li><a href="" class="text-white">Responsibilidade Social</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Offices</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li>PERU: Av. Collasuyo 986 Cusco-Peru</li>--}}
            {{--<li>USA: 1440 G St NW, Washington DC, 20005</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">FAQ</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white">Getting To Peru</a></li>--}}
                    {{--<li><a href="" class="text-white">Perguntas Mais Frequentes</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
            {{--<h3 class="h6 text-g-yellow">Testimonials</h3>--}}
            {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
            {{--<li><a href="#" class="text-white"></a></li>--}}
            {{--<li><a href="" class="text-white">Reviews & Testmonials</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Contato</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white" data-toggle="modal" data-target="#modal-contact">Email</a></li>--}}
                    {{--<li><a href="tel:+2029963000">(202) 996-3000</a></li>--}}
                    {{--<li><a href="" class="text-white">Address</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Hotéis</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white">Hotéis</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
        {{--<div class="row bg-light pt-3">--}}
        {{--<div class="col-12 col-sm mb-3">--}}
        {{--<h6 class="mt-2">GOTOPERU GROUP:</h6>--}}
        {{--</div>--}}
        {{--<div class="col-6 col-sm mb-3">--}}
        {{--<img src="{{asset('images/logos/logo-gotoperu-footer.png')}}" alt="logo gotoperu" class="img-fluid">--}}
        {{--</div>--}}
        {{--<div class="col-6 col-sm mb-3">--}}
        {{--<img src="{{asset('images/logos/logo-andes-footer.png')}}" alt="logo andes viagens" class="img-fluid">--}}
        {{--</div>--}}
        {{--<div class="col-6 col-sm mb-3">--}}
        {{--<img src="{{asset('images/logos/logo-latinamerica-footer.png')}}" alt="logo gotolatinamerica" class="img-fluid">--}}
        {{--</div>--}}
        {{--<div class="col-6 col-sm mb-3">--}}
        {{--<img src="{{asset('images/logos/logo-mapi-galapagos-footer.png')}}" alt="logo machupicchu galapagos" class="img-fluid">--}}
        {{--</div>--}}
        {{--<div class="col-12 col-sm text-center">--}}
        {{--<b>PERU LOCAL TIME: 7:38PM</b>--}}
        {{--<a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="btn btn-link d-block">Services Terms & Conditions</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col text-center text-white">
                <small>PandaNinja</small>
            </div>
        </div>
    </div>
</footer>
{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/font-awesome.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
@stack('scripts')
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: true,
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        mousewheel: true,
    });

    // (function () {
    //     var ll = new LazyLoad({
    //         threshold: 0
    //     });
    // }());


    //slider
    var $slider = $('#home-slider');
    $(document).ready(function(){
        $slider.slick({
            autoplay: true,
            autoplaySpeed: 5000,
            // dots: true,
            infinite: true,
            fade: true,
            arrows: false
        });
        $("#home-slider-container .slider-controls .slider-prev").on("click",function(){
            $slider.slick('slickPrev');
        });
        $("#home-slider-container .slider-controls .slider-next").on("click",function(){
            $slider.slick('slickNext');
        });

        $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});

    });

    $(window).resize(function(){
        $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});
    })

    // $("#menu").metisMenu();
    $(function() {

        $('#menu1').metisMenu();

        $('#menu2').metisMenu();

    });

    $(document).ready(function () {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('#title').css({
                'transform': 'translate3d(0, ' + -(scrolled * 0.1) + 'px, 0)', // parallax (20% scroll rate)
                'opacity': 1 - scrolled / 400 // fade out at 400px from top
            });
            $('.hero-vid').css('transform', 'translate3d(0, ' + -(scrolled * 0.10) + 'px, 0)'); // parallax (25% scroll rate)
        });

        // video controls
        $('#state').on('click', function () {
            var video = $('.hero-vid').get(0);
            var icons = $('#state > span');
            $('.overlay').toggleClass('fade');
            if (video.paused) {
                video.play();
                icons.removeClass('fa-play').addClass('fa-pause');
            } else {
                video.pause();
                icons.removeClass('fa-pause').addClass('fa-play');
            }
        });
    });
</script>


</body>
</html>
