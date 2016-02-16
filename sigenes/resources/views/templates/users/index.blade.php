@extends('layouts.generals.main_template')

@section('page_title')
    Usuarios
@endsection

@section('title')
    Usuarios
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')
    <a class="btn btn-success" href="{{ route('users.create') }}"> <i class="fa fa-user-plus"></i> Crear</a>
@endsection

@section('body_page')
    <div class="container-fluid" data-ng-controller="UsersController as users">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        Users
                        <table class="table">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>RFC</th>
                                <th width="10%">Controllers</th>
                            </tr>
                            <tr data-ng-repeat="user in users">
                                <td>@{{ user.name }}</td>
                                <td>@{{ user.email }}</td>
                                <td>@{{ user.rfc }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                                            <a data-ng-click="showUser(user)"><i class="fa fa-eye"></i></a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                                            <a data-ng-click="editUserModal(user)"><i class="fa fa-pencil-square-o"></i></a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                                            <a data-ng-click="deleteUser(user)"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.users.partials.show')
        @include('templates.users.partials.edit')
    </div>
@endsection
