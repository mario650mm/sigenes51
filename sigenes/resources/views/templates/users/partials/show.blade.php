<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        @{{ user.name }}
    </div>
    <div class="content">
        <div class="description">
            <p><strong>Nombre</strong>@{{ user.name }}</p>
        </div>
    </div>
    <div class="actions">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6">
                <a class="btn btn-danger deny "><i class="fa fa-times"></i> Cancelar</a>
                <a class="btn btn-info" data-ng-click="editUserModal(user)"><i class="fa fa-pencil-square-o"></i> Editar</a>
            </div>
        </div>
    </div>
</div>