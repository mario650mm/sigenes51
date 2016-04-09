@extends('layouts.generals.main_template')

@section('page_title')
    Reportes Usuarios
@endsection

@section('title')
    Reportes Usuarios
@endsection

@section('buttons')
    {!! Form::model(Request::only([]),['route'  => 'admin.filterReport',
                'method' => 'GET',
                'class'  => 'navbar-left pull-right',
                'role'   => 'search',
                ])!!}
    {!! Form::label(null,'') !!}
    <button class="btn btn-info" type="submit"><i class="fa fa-file-excel-o"></i> Generar reporte</button>
    <a class="btn btn-danger" href="{{ route('users.index') }}"><i class="fa fa-times"></i> Cancelar</a>
@endsection

@section('body_page')
    @include('templates.admin.users.partials.inputs')
    {!! Form::close() !!}
@endsection
