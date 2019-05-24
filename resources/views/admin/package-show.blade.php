@extends('layouts.admin.app')
@section('sidebar')
    @parent
    @include('layouts.admin.sidebar')
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb small font-weight-bold p-0 m-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">1. Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="">
                <div class="">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_codigo">Code</label>
                                <input type="text" name="txt_codigo" class="form-control font-weight-bold" id="txt_codigo" placeholder="GTP3000">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_title_package">Title Package</label>
                                <input type="text" name="txt_title_package" class="form-control font-weight-bold" id="txt_title_package">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_duration">Duration</label>
                                <input type="number" name="txt_duration" class="form-control font-weight-bold" id="txt_duration" value="1" onkeyup="duration(this.value)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <textarea id="textarea-package"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3" id="contenido">

                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <h4>Price</h4>
                            <hr>
                            <div class="row text-center font-weight-bold text-g-dark mb-2">
                                <div class="col">

                                </div>
                                <div class="col">
                                    Single
                                </div>
                                <div class="col">
                                    Double
                                </div>
                                <div class="col">
                                    Matrimonial
                                </div>
                                <div class="col">
                                    Triple
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                    <span data-feather="star"></span>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><small>$</small></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><small>USD</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-light">
                <div class="card-body">
                    <h6><span data-feather="activity"></span> Difficulty</h6>
                    <hr>
                    <div class="swiper-container swiper-right">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                @foreach($level as $levels)
                                <span class="custom-checkbox d-block pr-3 text-ellipsis">
                                    <input type="checkbox" id="level_{{$levels->id}}" name="level[]" value="{{$levels->id}}" >
                                    <label for="level_{{$levels->id}}" data-toggle="tooltip" data-placement="left" title="{{ucwords(strtolower($levels->nombre))}}">{{ucwords(strtolower($levels->nombre))}}</label>
                                </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>


            <div class="card bg-light my-3">
                <div class="card-body">
                    <h6><span data-feather="folder"></span> Category</h6>
                    <hr>
                    <div class="swiper-container swiper-right">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                @foreach($category as $categoria)
                                <span class="custom-checkbox d-block pr-3 text-ellipsis">
                                    <input type="checkbox" id="category_{{$categoria->id}}" name="category[]" value="{{$categoria->id}}" >
                                    <label for="category_{{$categoria->id}}" data-toggle="tooltip" data-placement="left" title="{{ucwords(strtolower($categoria->nombre))}}">{{ucwords(strtolower($categoria->nombre))}}</label>
                                </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>

            <div class="card bg-light my-3">
                <div class="card-body">
                    <h6><span data-feather="map-pin"></span> Destinations</h6>
                    <hr>
                    <div class="swiper-container swiper-right">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                @foreach($destinations as $destino)
                                    <span class="custom-checkbox d-block pr-3 text-ellipsis">
                                        <input type="checkbox" id="destino_{{$destino->id}}" name="destino[]" value="{{$destino->id}}" >
                                        <label for="destino_{{$destino->id}}" data-toggle="tooltip" data-placement="left" title="{{ucwords(strtolower($destino->nombre))}}">{{ucwords(strtolower($destino->nombre))}}</label>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>

            <div class="card bg-light my-3 w-100">
                <div class="card-body">
                    <h6><span data-feather="plus"></span> Included</h6>
                    <hr>
                    <div class="swiper-container swiper-right">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                @foreach($incluye as $include)
                                    <span class="custom-checkbox d-block pr-3 text-ellipsis">
                                        <input type="checkbox" id="include_{{$include->id}}" name="include[]" value="{{$include->id}}" >
                                        <label for="include_{{$include->id}}" data-toggle="tooltip" data-placement="left" title="{{ucwords(strtolower($include->incluye))}}">{{ucwords(strtolower($include->incluye))}}</label>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>

            <div class="card bg-light my-3">
                <div class="card-body">
                    <h6><span data-feather="minus"></span> Not Included</h6>
                    <hr>
                    <div class="swiper-container swiper-right">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                @foreach($noincluye as $noinclude)
                                    <span class="custom-checkbox d-block pr-3 text-ellipsis">
                                        <input type="checkbox" id="noinclude_{{$noinclude->id}}" name="noinclude[]" value="{{$noinclude->id}}" >
                                        <label for="noinclude_{{$noinclude->id}}" data-toggle="tooltip" data-placement="left" title="{{ucwords(strtolower($noinclude->noincluye))}}">{{ucwords(strtolower($noinclude->noincluye))}}</label>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="row mb-3">
        <div class="col text-center">
            <a href="" class="btn btn-primary font-weight-bold">Update Package</a>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4amx6h3rsnmj9whskr1vn3m6mpv7bi6qwwscvtbam4h0uic "></script>
    <script>
        tinymce.init({
            selector: 'textarea#textarea-package',
            height: 250,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
            ]
        });
        // $('.selectpicker').selectpicker();
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });


        $('select').on('change', function () {
            // var duration = $('#duration_slc').val();
            var $id_itinerary = this.value;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax( {
                type: "POST",
                url: "{{route('admin_package_duration_path')}}",
                data: {id_itinerary: $id_itinerary},
                success: function( response ) {
                    // console.log( $id );
                    $("#resumen_"+response.id).html(response.resumen);
                }
            } );
        });

        $("#contenido").load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
        });

        function duration($duration){
            if ($duration){
                var $duration1 = $duration;
                $("#contenido").load("http://new-goto.nu/package/load/"+49+"/"+$duration1+"");
            }
        }

        {{--$(document).ready(function() {--}}
            {{--$("#refrescar").bind("click", function() {--}}
                {{--$("#contenido").load("{{route('load_path', [49, 5])}}");--}}
            {{--});--}}
        {{--});--}}

    </script>
@endpush