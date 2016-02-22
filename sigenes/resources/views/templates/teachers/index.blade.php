@extends('layouts.generals.main_template')

@section('page_title')
    Profesores
@endsection

@section('title')
    Profesores
@endsection

@section('angular_controller')
    <div data-ng-controller="TeachersController as teachers">
        @endsection

        @section('filters')
        @endsection

        @section('button_delete')
        @endsection

        @section('buttons')
            <a class="btn btn-success" href="{{ route('teachers.create') }}"> <i class="fa fa-user-plus"></i> Crear</a>
        @endsection

        @section('body_page')
            <div class="row">
                @include('templates.users.partials.table')
            </div>
            @include('templates.teachers.partials.show')
            @include('templates.teachers.partials.edit')
            @include('templates.teachers.partials.delete')
    </div>
    @endsection

    @section('end_angular_controller')
    </div>
@endsection