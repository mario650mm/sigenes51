@extends('layouts.generals.main_template')

@section('page_title')
    {{trans('career.title')}}
@endsection

@section('title')
    {{trans('career.title')}}
@endsection

@section('angular_controller')
    <div data-ng-controller="careerAdminCtrl">
@endsection

@section('filters')
    <nit-advanced-searchbox
            ng-model="searchInput"
            parameters="availableSearchParams"
            placeholder="Search...">
    </nit-advanced-searchbox>
@endsection

@section('buttons')
    <a class="btn btn-primary" href="{{ route('career.create') }}"><i class="fa fa-graduation-cap"></i> {{trans('career.titlecreate')}}</a>
@endsection

@section('body_page')
    <div class="row">
        <div ng-init="getCareer()"></div>   
        @include('templates.admin.careers.partials.dataView')
        <div class="text-center">
            <dir-pagination-controls 
            max-size="15" 
            direction-links="true" 
            boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
    @include('templates.admin.careers.partials.editcareer')
    @include('templates.admin.careers.partials.editArea')
    @include('templates.admin.careers.partials.deletearea')
    @include('templates.admin.careers.partials.deleteCareer')
    @include('templates.admin.careers.partials.showareas')
    @include('templates.admin.careers.partials.createarea')
    </div>  

@endsection

@section('end_angular_controller')
    </div>
@endsection