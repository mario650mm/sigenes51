<div class="ui basic modal" id="delete">
    <i class="close icon"></i>
    <div class="header">
        Eliminar
    </div>
    <div class="image content">
        <div class="image">
            <i class="user icon"></i>
        </div>
        <div class="description">
            <p>Esta seguro de eliminar al usuario @{{ user.name }}</p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="deleteUser(user)">
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>