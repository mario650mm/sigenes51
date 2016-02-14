@extends('layout.app')

@section('content')
    <div class="container-fluid" data-ng-controller="UserController as users">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        Users
                        @include('templates.users.partials.inputs')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection