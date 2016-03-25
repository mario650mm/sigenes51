@extends('layouts.generals.main_template')

@section('page_title')
	{{trans('career.titlecreate')}}
@endsection

@section('title')
    {{trans('career.titlecreate')}}
@endsection

@section('angular_controller')
<div data-ng-controller="subjectmatterAdminCtrl">
@endsection

@section('buttons')
	@include('templates.admin.subjectMatter.partials.inputs')
@endsection

@section('body_page')
	<div class="row">
		<div data-ng-init="init()"></div>
		@include('templates.admin.subjectMatter.partials.subjectMatter')
	</div>
	
</div>

@endsection

@section('end_angular_controller')
    </div>
@endsection