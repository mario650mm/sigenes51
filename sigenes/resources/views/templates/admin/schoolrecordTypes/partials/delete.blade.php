<div class="ui basic modal" id="cancel">
    
    <div class="header">
        Eliminacion de la constancia de @{{ entity.name}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="trash icon"></i>
        </div>
        <div class="description">
            <p>
               <h3> Se le informa que esta apunto de eliminar la constancia @{{entity.name}}, <br>
                desea contunuar con la operación?</h3>  
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="deleteAction(entity.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>