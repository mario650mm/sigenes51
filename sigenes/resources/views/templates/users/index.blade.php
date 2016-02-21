@extends('layouts.generals.main_template')

@section('page_title')
    Usuarios
@endsection

@section('title')
    Usuarios
@endsection

@section('angular_controller')
    <div data-ng-controller="UsersController as users">
@endsection

@section('filters')
    <nit-advanced-searchbox
            ng-model="searchInput"
            parameters="availableSearchParams"
            placeholder="Search...">
    </nit-advanced-searchbox>
@endsection

@section('button_delete')
@endsection

@section('buttons')
    <a class="btn btn-success" href="{{ route('users.create') }}"> <i class="fa fa-user-plus"></i> Crear</a>
@endsection

@section('body_page')
        <div class="row">
            @include('templates.users.partials.table')
        </div>
        @include('templates.users.partials.show')
        @include('templates.users.partials.edit')
        @include('templates.users.partials.delete')
    </div>
@endsection

@section('end_angular_controller')
    </div>
@endsection