@extends('layouts.generals.main_template')

@section('page_title')
    @lang('studieplans.create_plan')
@endsection

@section('title')
    @lang('studieplans.create_plan')
@endsection

@section('angular_controller')
    <div data-ng-controller="StudiePlansController as studiePlans">
        @endsection

        @section('buttons')
            <a class="btn btn-info" data-ng-click="save(studiePlan)"><i class="fa fa-floppy-o"></i>    @lang('generals.save')</a>
            <a class="btn btn-danger" href="{{ route('studiesplan.index') }}"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
        @endsection

        @section('body_page')
            @include('templates.admin.studieplans.partials.inputs')
        @endsection

        @section('end_angular_controller')
    </div>
@endsection