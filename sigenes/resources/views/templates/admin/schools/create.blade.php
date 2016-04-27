@extends('layouts.generals.main_template')

@section('page_title')
    @lang('schools.create_school')
@endsection

@section('title')
    @lang('schools.create_school')
@endsection

@section('angular_controller')
    <div data-ng-controller="SchoolsController as schools">
        @endsection

        @section('buttons')
            <a class="btn btn-info" data-ng-click="save(school)"><i class="fa fa-floppy-o"></i>    @lang('generals.save')</a>
            <a class="btn btn-danger" href="{{ route('schools.index') }}"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
        @endsection

        @section('body_page')
            <div data-ng-init="getParents()"></div>
            @include('templates.admin.schools.partials.inputs')
        @endsection

        @section('end_angular_controller')
    </div>
@endsection