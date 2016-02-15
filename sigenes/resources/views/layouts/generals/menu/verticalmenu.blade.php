<div class="row" style="padding: 0.0em; margin: 0.0em;">
    <div class="col-lg-12 hidden-print hidden-xs" style="padding: 0.0em; margin: 0.0em;">
        <div class="ui vertical menu">
            <div class="item">
                <img src="{{ asset(env('LOGO_ENES')) }}" class="img-responsive">
            </div>
            @if(Auth::user()->type == 'employee')
                @include('layouts.generals.menu.partials.employee')
            @endif
            @if(Auth::user()->type == 'student')
                @include('layouts.generals.menu.partials.student')
            @endif
            @if(Auth::user()->type == 'admin')
                @include('layouts.generals.menu.partials.admin')
            @endif
        </div>
    </div>
    <nav class="navbar navbar-default hidden-sm hidden-md hidden-lg">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse-izq">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    SIGENES
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse-izq">
                <!-- Left Side Of Navbar -->
                <div class="ui secondary menu">
                    <div class="item">
                        <img src="{{ asset(env('LOGO_ENES')) }}" class="img-responsive">
                    </div>
                    @if(Auth::user()->type == 'employee')
                        @include('layouts.generals.menu.partials.employee')
                    @endif
                    @if(Auth::user()->type == 'student')
                        @include('layouts.generals.menu.partials.student')
                    @endif
                    @if(Auth::user()->type == 'admin')
                        @include('layouts.generals.menu.partials.admin')
                    @endif
                    <div class="ui dropdown item">
                        {{ Auth::user()->name }}<span class="caret"></span>
                        <div class="menu">
                            <div class="item">
                                <a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>