@extends('layout.app')

@section('content')
    <div class="container-fluid" data-ng-controller="UserController as users">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        Users
                        <table class="table">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                            <tr data-ng-repeat="d in data">
                                <td>@{{ d.name }}</td>
                                <td>@{{ d.email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection