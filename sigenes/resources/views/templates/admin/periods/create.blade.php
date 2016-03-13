@extends('layouts.generals.main_template')

@section('page_title')

@endsection

@section('title')
    
@endsection

@section('angular_controller')
<div data-ng-controller="periodAdminCtrl">
@endsection

@section('filters')

@endsection

@section('body_page')
	<div class="row">
		@include('templates.admin.periods.partials.inputs')
		<br>
		@include('templates.admin.periods.partials.periods')
	</div>
</div>

@endsection

@section('end_angular_controller')
    </div>
@endsection