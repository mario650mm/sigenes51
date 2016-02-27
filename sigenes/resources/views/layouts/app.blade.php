
<!DOCTYPE html>
<html data-ng-app="EnesAuth">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <title>ENES LEON</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    @include('layouts.generals.headers')
    <script src="{{ asset('css/semantic/dist/semantic.min.js') }}"></script>

    <style type="text/css">

        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }
        .masthead .logo.item img {
            margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }
        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }
        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
            margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
            clear: both;
        }
        .ui.vertical.stripe p {
            font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }
        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }
            .secondary.pointing.menu .toc.item {
                display: block;
            }
            .masthead.segment {
                min-height: 350px;
            }
            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }
            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }

    </style>
    <script>
        $(document)
                .ready(function() {

                    // fix menu when passed
                    $('.masthead')
                            .visibility({
                                once: false,
                                onBottomPassed: function() {
                                    $('.fixed.menu').transition('fade in');
                                },
                                onBottomPassedReverse: function() {
                                    $('.fixed.menu').transition('fade out');
                                }
                            });
                    $('.ui.sidebar')
                            .sidebar('attach events', '.toc.item')
                    ;
                });
    </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="item">Item1</a>
        <a class="item">Item2</a>
        <a class="item">Item3</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button" href="{{ route('login') }}">SIGENES</a>
            </div>
            <div class="item">
                <a class="ui primary button" href="{{ route('register') }}">{{ trans('auth.signup') }}</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical sidebar menu">
    <img src="{{ asset(env('LOGO_ENES')) }}" class="img-responsive" style="height: 60px; width: 140px">
    <a class="item">Item1</a>
    <a class="item">Item2</a>
    <a class="item">Item3</a>
    <a class="item" href="{{ route('login') }}">SIGENES</a>
    <a class="item" href="{{ route('register') }}">{{ trans('auth.signup') }}</a>
</div>


<!-- Page Contents -->
<div class="pusher">
    <div class="ui vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large blue secondary pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a href="{{ url('/') }}"><img src="{{ asset(env('LOGO_ENES')) }}" class="img-responsive hidden-xs" style="height: 60px; width: 140px"></a>
                <a class="item">Item1</a>
                <a class="item">Item2</a>
                <a class="item">Item3</a>
                <div class="right item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a class="btn btn-warning" href="{{ route('login') }}">SIGENES</a></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a class="btn btn-warning" href="{{ route('register') }}">{{ trans('auth.signup') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
        @yield('main')

        @yield('content')
    </div>
    @yield('section1')
    @yield('section2')
    @yield('footer')
</div>

<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-resource.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-route.min.js') }}"></script>
<script src="{{ asset('js/script/lib/ui-bootstrap-112.min.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-animate.min.js') }}"></script>
<script src="{{ asset('js/script/app_auth.js') }}"></script>
<script src="{{ asset('js/script/controllers/admissions/admissionsController.js') }}"></script>
</body>

</html>