@extends('layouts.generals.main_template')

@section('body_page')
    <div class="container-fluid" data-ng-controller="SuspensionsController as suspensions">
    	<div ng-init="init({{ Auth::user()->id }})"></div>

    	@include('templates.student.low.partials.note')
		   	
        @include('templates.student.low.partials.inputs')
        <br>
        @include('templates.student.low.partials.infoStudent')
        @include('templates.student.low.partials.suspensions')
        <br>
        <br>

    </div>
    

@endsection