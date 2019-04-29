<section class="d-none d-xl-block">
    <div class="jumbotron jumbotron-divider-1 rounded-0 m-0">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-9 text-white text-center rounded">
                    <div class="row no-gutters">
                        <div class="col">
                            <img src="{{asset('images/icons/include/assistances.png')}}" alt="Asistencias" class="w-100 px-3">
                            <small>Asistencias</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/breakfast.png')}}" alt="Desayunos" class="w-100 px-3">
                            <small>Desayunos</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/entrances.png')}}" alt="Entradas" class="w-100 px-3">
                            <small>Entradas</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/flight.png')}}" alt="Vuelos" class="w-100 px-3">
                            <small>Vuelos</small>
                        </div>

                        <div class="col">
                            <img src="{{asset('images/icons/include/hotels.png')}}" alt="Hoteles" class="w-100 px-3">
                            <small>Hoteles</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/tours.png')}}" alt="Tours" class="w-100 px-3">
                            <small>Tours</small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/trains.png')}}" alt="Trenes" class="w-100 px-3">
                            <small>Trenes </small>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/transfers.png')}}" alt="Transportes" class="w-100 px-3">
                            <small>Transportes</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-light" id="Inquire">
    <div class="container">
        <div class="row py-5 justify-content-center">

            <div class="col">
                <div class="row justify-content-center pb-2">
                    <div class="col col-sm-12">
                        <h2 class="text-g-green text-center"><strong>CONSULTAS DEL VIAJE</strong></h2>
                        <h5 class="text-secondary text-center">Ayúdanos a diseñar sus vacaciones perfectas en Perú y recibir los primeros itinerarios y presupuestos en 24 horas.</h5>
                        <hr>
                    </div>
                </div>
                <form id="h_form" role="form">
                    <div >

                        <div class="">
                            <div class="" id="">

                                {{csrf_field()}}
                                <div class="row justify-content-center">
                                    <div class="col col-sm-12">

                                        <div class="row">
                                            <div class="col-12 col-md">
                                                <div class="row pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>CATEGORIA DE HOTEL</strong></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                            {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                                            <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Económico
                                                                <div class="d-block">
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                </div>
                                                                {{--<div class="d-block text-center sec-stars">--}}
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--</div>--}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                            {{--<i class="fa fa-home d-block fa-2x" aria-hidden="true"></i>--}}
                                                            <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Turista
                                                                <div class="d-block">
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                </div>
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--<div class="d-block text-center sec-stars">--}}
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--<i class="fa fa-star"></i>--}}
                                                                {{--</div>--}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                            {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                            <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                                                <div class="d-block">
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-3 col-md-6 col-sm col-xl mb-2 mb-sm-0 mb-md-2">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            {{--<label class="btn btn-outline-secondary btn-block rounded-circle py-3 popover-hover position-relative">--}}
                                                            {{--<i class="fa fa-building d-block fa-2x" aria-hidden="true"></i>--}}
                                                            <label class="col btn btn-outline-secondary text-secondary number-hover">
                                                                <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Lujo
                                                                <div class="d-block">
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                    <small><i class="fa fa-star text-g-yellow"></i></small>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>DESTINOS</strong></h2>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                    <label class="col-6 col-sm col-md-6 col-lg btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Lima">
                                                        {{--<img src="{{asset('images/destinations/destinations/lima.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Lima
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Cusco">
                                                        {{--<img src="{{asset('images/destinations/destinations/cusco.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Cusco
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Machu Pichu">
                                                        {{--<img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Machu Picchu
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-lg ml-sm-2 ml-md-0 ml-xl-2 btn btn-outline-secondary text-secondary mb-2 number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Sacred Valley">
                                                        {{--<img src="{{asset('images/destinations/destinations/sacred-valley.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Valle Sagrado
                                                    </label>
                                                </div>

                                                <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                    <label class="col-6 col-sm col-md-6 col-xl mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Lake Titicaca">
                                                        {{--<img src="{{asset('images/destinations/destinations/puno-and-lake-titicaca.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Lago Titicaca
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-xl mx-sm-2 mx-md-0 mx-xl-2 mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Nazca & Ballestas">
                                                        {{--<img src="{{asset('images/destinations/destinations/nazca-lines.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        <small>Nazca & Ballestas</small>
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-xl mr-sm-2 mx-md-0 mr-xl-2 mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Amazon">
                                                        {{--<img src="{{asset('images/destinations/destinations/amazon.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        Amazonas
                                                    </label>
                                                    <label class="col-6 col-sm col-md-6 col-xl mx-md-0 mb-2 mb-sm-0 mb-md-2 btn btn-outline-secondary text-secondary number-hover">
                                                        <input type="checkbox" name="destinations[]" autocomplete="off" value="Arequipa & Colca">
                                                        {{--<img src="{{asset('images/destinations/destinations/arequipa-&-colca-canyon.jpg')}}" alt="" width="40" height="40" class="rounded-circle">--}}
                                                        <small>Arequipa & Colca</small>
                                                    </label>
                                                </div>



                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>NÚMERO DE VIAJANTES</strong></h2>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn col btn-outline-secondary number-hover number_ch">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="1"> 1 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col mx-2 btn-outline-secondary number-hover number_ch">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                                                    </label>
                                                    <label class="btn col btn-outline-secondary number-hover number_ch">
                                                        <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                                                    </label>
                                                    <div class="col input-group ml-2">
                                                        <input type="number" class="form-control number" name="number" id="h_number" placeholder="" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado2()">
                                                    </div>

                                                </div>

                                                <div class="row mt-4 pb-2">
                                                    <div class="col">
                                                        <h2 class="text-secondary h5"><strong>NÚMERO DE DIAS</strong></h2>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0  mb-md-2 btn-outline-secondary duration_ch number-hover">
                                                        <input type="radio" name="duration" class="duration" autocomplete="off" value="3-5" checked> 3-5 <small><i class="text-g-yellow">Dias</i></small></i>
                                                    </label>
                                                    <label class="btn col-4 col-sm col-md-4 col-xl mx-sm-2 mx-xl-2 mx-md-0 mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover">
                                                        <input type="radio" name="duration" class="duration" autocomplete="off" value="6-8"> 6-8 <small><i class="text-g-yellow">Dias</i></small></i>
                                                    </label>
                                                    <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover">
                                                        <input type="radio" name="duration" class="duration" autocomplete="off" value="9-11"> 9-11 <small><i class="text-g-yellow">Dias</i></small></i>
                                                    </label>
                                                    <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2 mx-xl-2 mx-sm-2 mx-md-0 btn-outline-secondary duration_ch number-hover">
                                                        <input type="radio" name="duration" class="duration" autocomplete="off" value="12-15"> 12-15 <small><i class="text-g-yellow">Dias</i></small></i>
                                                    </label>
                                                    <label class="btn col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2 mr-xl-2 mr-sm-2 mx-md-0  btn-outline-secondary duration_ch number-hover">
                                                        <input type="radio" name="duration" class="duration" autocomplete="off" value="16+"> 16+ <small><i class="text-g-yellow">Dias</i></small></i>
                                                    </label>

                                                    <label class="col-4 col-sm col-md-4 col-xl mb-2 mb-sm-0 mb-md-2  btn-outline-secondary duration_ch number-hover">
                                                        <input type="number" class="form-control duration" name="duration" id="h_duration" placeholder="" aria-label="Full Name" aria-describedby="basic-addon1" onfocus="estado()">
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md mt-4 mt-md-0">
                                                <div class="row justify-content-center">
                                                    <div class="col col-sm-12 col-md-12">

                                                        <div class="row pb-2">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>NOMBRE <span class="text-primary">*</span></strong></h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="h_name" placeholder="Nombre Completo" aria-label="Nome Completo" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row pb-2 mt-4">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                    <input type="email" class="form-control" id="h_email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row mt-4 pb-1">
                                                            <div class="col-12 col-sm col-md-12 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h2 class="text-secondary h5"><strong>FECHA DE VIAJE</strong></h2>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="input-group input-group-lg">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control datepicker" id="h_date" placeholder="Fecha de viaje" aria-label="Username" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h2 class="text-secondary h5"><strong>NÚMERO DE TELÉFONO</strong></h2>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="input-group input-group-lg">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                                            </div>
                                                                            <input type="tel" class="form-control" id="h_tel" placeholder="Número de teléfono" aria-label="Phone" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4 pb-2">
                                                            <div class="col">
                                                                <h2 class="text-secondary h5"><strong>COMENTARIOS</strong></h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                                                    </div>
                                                                    <textarea class="form-control" id="h_comment" aria-label="With textarea" placeholder="Como usted se imagina un viaje perfecto al Perú, pedidos especiales, preguntas, comentarios."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                            {{--<div class="tab-pane" id="tab2">--}}

                            {{--</div>--}}

                            <div class="row mt-5 justify-content-center">
                                <div class="col-4 text-center">
                                    {{--<input type='button' class='btn btn-lg button-previous' name='previous' value='Previous' id="previus_tip" onclick="dnext(0)"/>--}}
                                    {{--<input type='button' class='btn btn-lg btn-g-green button-next' name='next' value='Next' id="next_tip" onclick="dnext(1)"/>--}}
                                    <button type="button" class="btn btn-lg btn-g-green btn-block font-philosopher" id="submit_tip" onclick="designInquire()">Enviar</button>
                                    <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="h_load"></i>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-right">
                                    <p class="">info@llama.tours</p>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center d-none" id="h_alert">
                                <div class="col-10">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Muchas gracias</strong> por contactar con GOTOPERU, un agente de viajes se pondrá en contacto con usted en las próximas 24 horas para ayudarle con la planificación de su viaje. :)
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div><!-- /.row -->
    </div>
</section>
