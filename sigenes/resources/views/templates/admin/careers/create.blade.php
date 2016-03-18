@extends('layouts.generals.main_template')

@section('page_title')

@endsection

@section('title')
    
@endsection

@section('angular_controller')
<div data-ng-controller="careerAdminCtrl">
@endsection

@section('filters')

@endsection

@section('body_page')
	<div class="row">
		@include('templates.admin.careers.partials.inputs')
		<br>
		<div data-ng-show="panelCarrera">
			@include('templates.admin.careers.partials.careers')
		</div>
		<div data-ng-show="panelArea">
			<br>
			@include('templates.admin.careers.partials.studyplan')
		</div>

	</div>
	
</div>

@endsection

@section('end_angular_controller')
    </div>
@endsection