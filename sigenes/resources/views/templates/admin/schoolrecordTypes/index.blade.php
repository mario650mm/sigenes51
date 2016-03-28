@extends('layouts.generals.main_template')

@section('page_title')
    {{trans('schoolrecordTypes.title')}}
@endsection

@section('title')
    {{trans('schoolrecordTypes.title')}}
@endsection

@section('angular_controller')
<div data-ng-controller="schoolrecordTypeAdminCtrl">
@endsection

@section('filters')
	<nit-advanced-searchbox
            ng-model="searchInput"
            parameters="availableSearchParams"
            placeholder="Search...">
    </nit-advanced-searchbox>
@endsection

@section('buttons')
    <a class="btn btn-primary" href="{{ route('schooltype.create') }}"> <i class="glyphicon glyphicon-file"></i> Crear</a>
@endsection

@section('body_page')

	<div class="row">
		<div ng-init="init()"></div> 
		@include('templates.admin.schoolrecordTypes.partials.dataView')
		<div class="text-center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
        @include('templates.admin.schoolrecordTypes.partials.showpdf')
    </div>
        @include('templates.admin.schoolrecordTypes.partials.delete')
        @include('templates.admin.schoolrecordTypes.partials.edit')
    </div>

@endsection

@section('end_angular_controller')
    </div>
@endsection