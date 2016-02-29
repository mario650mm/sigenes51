@extends('layouts.generals.main_template')

@section('page_title')
    Crear Usuarios
@endsection

@section('title')
    Crear Usuarios
@endsection

@section('angular_controller')
    <div data-ng-controller="UsersController as users">
@endsection

@section('buttons')
    <a class="btn btn-info" data-ng-click="save(user)"><i class="fa fa-floppy-o"></i> Guardar</a>
    <a class="btn btn-danger" href="{{ route('users.index') }}"><i class="fa fa-times"></i> Cancelar</a>
@endsection

@section('body_page')
    @include('templates.admin.users.partials.inputs')
@endsection

@section('end_angular_controller')
    </div>
@endsection