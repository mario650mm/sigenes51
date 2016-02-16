@extends('layouts.generals.main_template')

@section('page_title')
    Crear Usuarios
@endsection

@section('title')
    Crear Usuarios
@endsection

@section('body_page')
    <div class="container-fluid" data-ng-controller="UsersController as users">
        <a class="btn btn-info" data-ng-click="save(user)"><i class="fa fa-floppy-o"></i> Guardar</a>
        @include('templates.users.partials.inputs')
    </div>
@endsection
