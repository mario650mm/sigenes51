@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ asset(env('LOGO_ENES')) }}"/>
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

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> {{ trans('auth.remember_me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a class="btn text-danger" href="{{ url('/password/reset') }}">{{ trans('auth.forgot') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
