@extends('layouts.app')

@section('extra_css')
    <style>
        html, body {
            background-image: url("/resources/images/fondologo.gif");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .loginform{
            background-image: url("/resources/images/loginform.png");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            border: 4px solid #BB8800;
        }

    </style>
@endsection

@section('content')
    <div class="container" style="margin: auto;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel loginform">
                    <div class="panel-header">
                        <center>
                            <img src="{{ asset(env('LOGO_ENESAZULFULL')) }}" class="img-responsive"/>
                        </center>
                    </div>
                    <div class="panel-body">
                        <h3><strong>SIGENES |</strong> Sistema Integral De Gestión Escolar</h3>
                        <hr style="border: 1px solid #BB8800">
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">RFC</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="rfc" value="{{ old('rfc') }}">

                                    @if ($errors->has('rfc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rfc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{ trans('auth.password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-btn fa-sign-in"></i>{{ trans('auth.login_form') }}
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <a class="btn text-info" href="{{ url('/password/email') }}"><strong>{{ trans('auth.forgot') }}</strong></a>
                            </div>
                            <div class="col-lg-12 text-center">
                                <a href="{{ route('register') }}" class="text-warning"><strong><i class="fa fa-user"></i> {{ trans('auth.signup') }}</strong></a>
                            </div>
                            <div class="col-lg-12 text-center" style="font-size: 0.8em; padding-top: 10px">
                                <strong>Escuela Nacional de Estudios Superiores Unidad León - UNAM</strong></br>
                                Blvd.UNAM 2011, Predio El Saucillo y El Potrero</br>
                                Comunidad de los Tepetates, León,Gto. C.P.37684</br>
                                Tel. 01 (477) 194 08 00</br>
                                enesleon@unam.mx</br>
                            </div>
                            <div class="col-lg-12">
                                <a href="http://enes.unam.mx/" class="text-warning"><strong>Regresar a sitio</strong></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
