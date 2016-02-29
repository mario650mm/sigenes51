@extends('layouts.generals.main_template')

@section('page_title')
    @lang('teachers.create_teacher')
@endsection

@section('title')
    @lang('teachers.create_teacher')
@endsection

@section('angular_controller')
    <div data-ng-controller="TeachersController as teachers">
        @endsection

        @section('buttons')
            <a class="btn btn-info" data-ng-click="save(teacher)"><i class="fa fa-floppy-o"></i>    @lang('generals.save')</a>
            <a class="btn btn-danger" href="{{ route('teachers.index') }}"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
        @endsection

        @section('body_page')
            @include('templates.teachers.partials.inputs')
        @endsection

        @section('end_angular_controller')
    </div>
@endsection