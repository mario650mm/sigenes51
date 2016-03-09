@extends('layouts.generals.main_template')

@section('page_title')
    @lang('partners.create_partner')
@endsection

@section('title')
    @lang('partners.create_partner')
@endsection

@section('angular_controller')
    <div data-ng-controller="PartnersController as partners">
        @endsection

        @section('buttons')
            <a class="btn btn-info" data-ng-click="save(partner)"><i class="fa fa-floppy-o"></i>    @lang('generals.save')</a>
            <a class="btn btn-danger" href="{{ route('partners.index') }}"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
        @endsection

        @section('body_page')
            @include('templates.admin.partners.partials.inputs')
        @endsection

        @section('end_angular_controller')
    </div>
@endsection