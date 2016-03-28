@extends('layouts.generals.main_template')

@section('page_title')
    Ver asignaturas
@endsection

@section('title')
    Ver asignaturas
@endsection

@section('angular_controller')
    <div data-ng-controller="subjectmatterAdminCtrl">
@endsection

@section('filters')
    <nit-advanced-searchbox
            ng-model="searchInput"
            parameters="availableSearchParams"
            placeholder="Search...">
    </nit-advanced-searchbox>
@endsection

@section('buttons')
    <a class="btn btn-primary" href="{{ route('subjectMatter.create') }}"><i class="fa fa-graduation-cap"></i> Crear materia</a>
@endsection

@section('body_page')
    <div class="row">
        <div ng-init="getInfo()"></div>   
        @include('templates.admin.subjectMatter.partials.dataView')
        <div class="text-center">
            <dir-pagination-controls 
            max-size="15" 
            direction-links="true" 
            boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
    @include('templates.admin.subjectMatter.partials.edit')
    @include('templates.admin.subjectMatter.partials.delete')
    </div>  

@endsection

@section('end_angular_controller')
    </div>
@endsection