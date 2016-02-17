@extends('layouts.generals.main_template')

@section('body_page')

    <div class="container-fluid" data-ng-controller="StudentTransactCtrl">

        @include('template.school_records.partials.note')
        @include('template.school_records.partials.inputs')
        <br>
        @include('template.school_records.partials.infoStudent')
        @include('template.school_records.partials.records')

    </div>

@endsection