@extends('layouts.generals.main_template')

@section('body_page')
    <div class="container-fluid" data-ng-controller="SuspensionStudentCtrl as suspensions">

        @include('templates.student.low.partials.inputs')
        <br>
        @include('templates.student.low.partials.infoStudent')
        @include('templates.student.low.partials.suspensions')

    </div>

@endsection