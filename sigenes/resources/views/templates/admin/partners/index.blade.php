@extends('layouts.generals.main_template')

@section('page_title')
    @lang('partners.title')
@endsection

@section('title')
    @lang('partners.title')
@endsection

@section('angular_controller')
    <div data-ng-controller="PartnersController as partners">
        @endsection

        @section('filters')
            <nit-advanced-searchbox
                    ng-model="searchInput"
                    parameters="availableSearchParams"
                    placeholder="{{trans('generals.search')}}">
            </nit-advanced-searchbox>
        @endsection

        @section('button_delete')
        @endsection

        @section('buttons')
            <a class="btn btn-success" href="{{ route('partners.create') }}"> <i
                        class="fa fa-user-plus"></i> @lang('generals.create')</a>
        @endsection

        @section('body_page')
            <div class="row">
                @include('templates.admin.partners.partials.table')
                <div class="text-center">
                    <dir-pagination-controls
                            max-size="15"
                            direction-links="true"
                            boundary-links="true" >
                    </dir-pagination-controls>
                </div>
            </div>
    </div>
    {{--}}}@include('templates.admin.teachers.partials.show')
    @include('templates.admin.teachers.partials.edit')
    @include('templates.admin.teachers.partials.delete')--}}
    </div>
    @endsection

    @section('end_angular_controller')
    </div>
@endsection
