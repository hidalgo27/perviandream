<section class="py-5" id="design">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2 class="display-4 text-center text-red-primary font-weight-bold">Planen Sie Ihre Reise</h2>
                <div class="sec-title-div-3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

                    <!-- SmartWizard html -->
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1">Orte<br /><small>step 1</small></a></li>
                            <li><a href="#step-2">Zu wie vielen<br /><small>step 2</small></a></li>
                            <li><a href="#step-3">Unterkunft<br /><small>step 3</small></a></li>
                            <li><a href="#step-4">Transport<br /><small>step 4</small></a></li>
                            <li><a href="#step-5">Daten<br /><small>step 5</small></a></li>
                        </ul>

                        <div>
                            <div id="step-1">
                                <h3 class="text-secondary font-weight-bold">Wählen Sie ihre Wunschziele aus Unverbindlich</h3>
                                <p class="font-weight-bold text-secondary pb-3">Erzählen Sie uns über Ihre Reisepläne und sobald wie möglich schicken wir Ihnen ein passendes Entwurf des Programmes. *</p>
                                <div id="form-step-0" role="form" data-toggle="validator">
                                    {{--<div class="form-group">--}}
                                    {{--<label for="email">Email address:</label>--}}
                                    {{--<input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>--}}
                                    {{--<div class="help-block with-errors"></div>--}}
                                    {{--</div>--}}
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/lima.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Lima</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/arequipa.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Arequipa & Colca Schlucht</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/lake-titicaca.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Titicacasee & Schwimmende Insel</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/machupicchu.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Cusco & Machupicchu</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/amazon.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Regenwald</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/ballestas-islands.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Ballestas Insel</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/paracas-reserve.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Paracas Reserve</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="btn-group-toggle text-center" data-toggle="buttons">
                                                    <label class="btn btn-secondary btn-block p-0 img-check position-relative w-100">
                                                        <input type="checkbox" id="1234">
                                                        <img src="{{asset('images/destinations/sacred-valley.jpg')}}" alt="" class="w-100 rounded">
                                                        <span class="check-icon"><i class="fas fa-check fa-3x text-red-dark"></i></span>
                                                    </label>
                                                    <strong class="text-center">Sacred Valley</strong>
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <p class="font-weight-bold text-secondary pb-3">Konkretisieren sie Ihre Reisedaten und wählen Sie den gewünschten Service aus* Zu wie vielen Personen reisen Sie?</p>
                                <div id="form-step-1" role="form" data-toggle="validator">
                                    {{--<div class="form-group">--}}
                                    {{--<label for="name">Name:</label>--}}
                                    {{--<input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>--}}
                                    {{--<div class="help-block with-errors"></div>--}}
                                    {{--</div>--}}
                                    <div class="row justify-content-center my-4">
                                        <div class="col-6">
                                            <div class="row btn-group-toggle" data-toggle="buttons">
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/personal.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Individual</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/kuser.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Couple</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/family.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Familie</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/grupal.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Grouppe</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <p class="font-weight-bold text-secondary pb-3">In welcher Hotelkategorie wollen Sie übernachten?*</p>
                                <div id="form-step-2" role="form" data-toggle="validator">
                                    <div class="row justify-content-center my-4">
                                        <div class="col-5">
                                            <div class="row btn-group-toggle" data-toggle="buttons">
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/cama3estrellas.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Standard 3 Sterne</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/cama4estrellas.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Standard 4 Sterne</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/cama5estrellas.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Standard 5 Sterne</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" class="">

                                <div id="form-step-3" role="form" data-toggle="validator">
                                    <div class="row justify-content-center my-4">
                                        <div class="col-5">
                                            <div class="row btn-group-toggle" data-toggle="buttons">
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/kolibricarros1.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Private Service</span>
                                                </div>
                                                <div class="col btn btn-light  btn-image">
                                                    <input type="radio" name="options" id="option1" autocomplete="off">
                                                    <img src="{{asset('images/form/kolibricarros2.png')}}" alt="" class="w-100 if-image">
                                                    <span class="d-block">Shared Service</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div id="step-5" class="">

                                <div id="form-step-4" role="form" data-toggle="validator">
                                    {{--<div class="form-group">--}}
                                    {{--<label for="terms2">I agree with the T&C</label>--}}
                                    {{--<input type="checkbox" id="terms2" data-error="Please accept the Terms and Conditions" required>--}}
                                    {{--<div class="btn-group-toggle" data-toggle="buttons">--}}
                                    {{--<label class="btn btn-secondary active">--}}
                                    {{--<input type="checkbox" id="terms2" data-error="Please accept the Terms and Conditions" required> Checked--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="help-block with-errors"></div>--}}
                                    {{--</div>--}}
                                    <div class="row justify-content-center my-4">
                                        <div class="col-6">
                                            <div class="input-group mb-3 input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="First Name">
                                            </div>
                                            <div class="input-group mb-3 input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Last Name">
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
                                            <h5 class="d-block">Zusätzliche Information*</h5>
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>