<div class="ui basic modal" id="cancel">
    
    <div class="header">
        Cancelacion de @{{ entity.transact}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="trash icon"></i>
        </div>
        <div class="description">
            <p>
               <h3> Se le informa que esta apunto de dar por cancelado esta
                solicitud de @{{entity.tramint}}, <br>
                iniciado el @{{entity.date}}, desea contunuar con la operación?</h3>  
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete()"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>