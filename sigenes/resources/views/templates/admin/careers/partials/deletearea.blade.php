<div class="ui basic modal" id="deletearea">
    <div class="header">
        Eliminación de la área @{{ area.name }}
    </div>
    <div class="image content">
        <div class="image">
            <i class="fa fa-trash-o fa-5x"></i>
        </div>
        <div class="description">
            <p>
                <h3>Se procederá a eliminar la área @{{ area.name }} con la clave @{{ area.key }}.<br>
                Desea continuar con la eliminacion?</h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondeletearea(area.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>