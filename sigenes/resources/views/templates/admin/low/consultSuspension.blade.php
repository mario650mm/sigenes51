@extends('layouts.generals.main_template')

@section('body_page')

    <div class="container-fluid" data-ng-controller="SuspensionAdminCtrl">
        @include('templates.admin.low.partials.filter')
        <br>
        @include('templates.admin.low.partials.dataTable')


        <script type="text/ng-template" id="myModalContent.html">
            <div class="modal-header">
            @include('templates.admin.low.partials.inputs')
            </div>
            <div class="modal-body container-fluid">
                @include('templates.admin.low.partials.suspensionInfo')
                <br>
                @include('templates.admin.low.partials.validator')
            </div>
        </script>
    </div>


    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection