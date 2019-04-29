<header>
    <div class="bg-rgba-white-7 py-3">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-4 align-items-center">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-dream.png')}}" alt="" class="w-100"></a>
                </div>
                <div class="col">
                    {{--<p class="m-0 font-kalam h5 text-info">Perú & Ecuador Especialist!</p>--}}
                </div>
                <div class="col-auto text-right">
                    <p class="m-0 text-secondary">
                        {{--<a href="" class="h5"><i class="fab fa-facebook-square"></i></a>--}}
                        {{--<a href="" class="h5"><i class="fab fa-twitter"></i></a>--}}
                        {{--<a href="" class="h5"><i class="fab fa-youtube"></i></a> |--}}
                        <a href="#design" class="btn btn-red-primary font-weight-bold btn-lg">Planen Sie Ihre Reise</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="topbar-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="#">
                                {{--<span class="fa fa-fw fa-github fa-lg"></span>--}}
                                Reisevarianten
                            </a>
                            <ul aria-expanded="true">
                                <li>
                                    <a href="{{route('tours_path')}}">
                                        {{--<span class="fa fa-fw fa-code-fork"></span> --}}
                                        Rundreise
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('packages_path')}}">
                                        {{--<span class="fa fa-fw fa-star"></span> --}}
                                        Reisebausteine
                                    </a>
                                </li>
                                {{--<li>--}}
                                {{--<a href="https://github.com/onokumus/metisMenu/issues">--}}
                                {{--<span class="fa fa-fw fa-exclamation-triangle"></span> Issues--}}
                                {{--</a>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#design" aria-expanded="false">Planen Sie Ihre Reise</a>
                            {{--<ul aria-expanded="false">--}}
                            {{--<li><a href="#">item 0.1</a></li>--}}
                            {{--<li><a href="#">item 0.2</a></li>--}}
                            {{--<li><a href="http://onokumus.com">onokumus</a></li>--}}
                            {{--<li><a href="#">item 0.4</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('destinations_path')}}" aria-expanded="false">Peru Reiseziele</a>
                            {{--<ul aria-expanded="false">--}}
                            {{--<li><a href="#">item 0.1</a></li>--}}
                            {{--<li><a href="#">item 0.2</a></li>--}}
                            {{--<li><a href="http://onokumus.com">onokumus</a></li>--}}
                            {{--<li><a href="#">item 0.4</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false">Über Uns</a>
                            <ul aria-expanded="false">
                                <li><a href="{{route('uns_path')}}">Über Kolibri Peru Travel</a></li>
                                <li><a href="#">Feedback</a></li>
                                {{--<li>--}}
                                {{--<a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>--}}
                                {{--<ul aria-expanded="false">--}}
                                {{--<li><a href="#">item 1.3.1</a></li>--}}
                                {{--<li><a href="#">item 1.3.2</a></li>--}}
                                {{--<li><a href="#">item 1.3.3</a></li>--}}
                                {{--<li><a href="#">item 1.3.4</a></li>--}}
                                {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">item 1.4</a></li>--}}
                                {{--<li>--}}
                                {{--<a class="has-arrow" href="#" aria-expanded="false">Menu 1.5</a>--}}
                                {{--<ul aria-expanded="false">--}}
                                {{--<li><a href="#">item 1.5.1</a></li>--}}
                                {{--<li><a href="#">item 1.5.2</a></li>--}}
                                {{--<li><a href="#">item 1.5.3</a></li>--}}
                                {{--<li><a href="#">item 1.5.4</a></li>--}}
                                {{--</ul>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">Über Peru</a>
                            <ul aria-expanded="false">
                                <li><a href="#">Hohenanpassung</a></li>
                                <li><a href="#">Information</a></li>
                                {{--<li><a href="#">item 2.3</a></li>--}}
                                {{--<li><a href="#">item 2.4</a></li>--}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
