@extends('layouts.generals.main_template')

@section('page_title')
    {{trans('period.title')}}
@endsection

@section('title')
    {{trans('period.title')}}
@endsection

@section('angular_controller')
    <div data-ng-controller="periodAdminCtrl">
@endsection

@section('filters')
    <nit-advanced-searchbox
            ng-model="searchInput"
            parameters="availableSearchParams"
            placeholder="Search...">
    </nit-advanced-searchbox>
@endsection

@section('buttons')
    <a class="btn btn-primary" href="{{ route('period.create') }}"> <i class="fa fa-calendar"></i> {{trans('period.titlecreate')}}</a>
@endsection

@section('body_page')
    <div class="row">
        <div ng-init="showData()"></div>   
        @include('templates.admin.periods.partials.dataView')
        <div class="text-center">
            <dir-pagination-controls 
            max-size="15" 
            direction-links="true" 
            boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
        @include('templates.admin.periods.partials.edit')
        @include('templates.admin.periods.partials.delete')
    </div>  

@endsection

@section('end_angular_controller')
    </div>
@endsection