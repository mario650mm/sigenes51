@extends('layouts.app')

@section('content')
    <div data-ng-controller="AdmissionController as admissions">
        <h1>{{ trans('admissions.title') }}</h1>
        @include('templates.admissions.partials.menu_steps')

        <span data-ng-show="step == 1">
            @include('templates.admissions.partials.general_step')
        </span>
        <span data-ng-show="step == 2">
            @include('templates.admissions.partials.personal_information')
        </span>
        <span data-ng-show="step == 3">
            @include('templates.admissions.partials.school_graduation')
        </span>
        <span data-ng-show="step == 4">
            @include('templates.admissions.partials.documentation')
        </span>
    </div>
@endsection
