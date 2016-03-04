@extends('layouts.generals.main_template')
@section('page_title')
    {{trans('low.title')}}
@endsection

@section('title')
    {{trans('low.title')}}
@endsection

@section('body_page')
    <div data-ng-controller="SuspensionsController as suspensions">
    	<div ng-init="init({{ Auth::user()->id }})"></div>

    	@include('templates.student.low.partials.note')
		   	
        @include('templates.student.low.partials.inputs')
        <br>
        @include('templates.student.low.partials.infoStudent')
        @include('templates.student.low.partials.suspensions')
        <br>
        <br>
        @include('templates.student.low.partials.change_status')
    </div>
    

@endsection