@extends('layouts.generals.main_template')

@section('page_title')
	Extroairdinarios
@endsection

@section('title')
    Solicitud de examenes extraordinarios
@endsection

@section('angular_controller')
<div data-ng-controller="ExtraordinaryCtrl"> <!--data-ng-controller="ExtraordinaryCtrl" -->
@endsection

@section('filters')

@endsection

@section('body_page')
	<form>
		<div class="row">
			<div ng-init="init()"></div>
			@include('templates.student.extraordinary.partials.inputs')
			<br>
			@include('templates.student.extraordinary.partials.infostudent')
			<br>
			@include('templates.student.extraordinary.partials.extraordinary')
		</div>
	</form>
</div>

@endsection

@section('end_angular_controller')
    </div>
@endsection