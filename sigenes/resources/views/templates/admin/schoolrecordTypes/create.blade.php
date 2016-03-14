@extends('layouts.generals.main_template')

@section('page_title')
    {{trans('schoolrecordTypes.title')}}
@endsection

@section('title')
    {{trans('schoolrecordTypes.title')}}
@endsection

@section('angular_controller')

@endsection

@section('filters')

@endsection

@section('body_page')

	<div class="row">
		<div data-ng-controller="schoolrecordTypeAdminCtrl">
			<form name="addrecord" ng-submit="submitForm(addrecord.$valid)" novalidate>
				@include('templates.admin.schoolrecordTypes.partials.inputs')
				<br>
				@include('templates.admin.schoolrecordTypes.partials.uploadFile')
			</form>
		</div>

	</div>

@endsection

@section('end_angular_controller')
    </div>
@endsection