@extends('layouts.app')

@section('content')
    <div class="row" style="padding-top: 50px">
        <div class="col-lg-12">
            <div data-ng-controller="AdmissionController as admissions">
                <h1>{{ trans('admissions.title') }}</h1>
                @include('templates.admissions.partials.menu_steps')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2
                                col-md-8 col-md-offset-2
                                col-sm-12
                                col-xs-12">
                                <div data-ng-show="step == 1">
                                    @include('templates.admissions.partials.general_step')
                                </div>
                                <div data-ng-show="step == 2">
                                    @include('templates.admissions.partials.personal_information')
                                </div>
                                <div data-ng-show="step == 3">
                                    @include('templates.admissions.partials.address_information')
                                </div>
                                <div data-ng-show="step == 4">
                                    @include('templates.admissions.partials.school_graduation')
                                </div>
                                <div data-ng-show="step == 5">
                                    @include('templates.admissions.partials.documentation')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
