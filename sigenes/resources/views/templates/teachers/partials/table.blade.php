<table class="table table-hover">
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
                    <a data-ng-click="deleteUserModal(user)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>