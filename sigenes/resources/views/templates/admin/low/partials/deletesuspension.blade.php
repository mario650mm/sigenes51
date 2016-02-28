<div class="ui basic modal" id="delete">
    
    <div class="header">
        Cancel of the {{trans('low.title')}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="user icon"></i>
        </div>
        <div class="description">
            <p>
                <h3>Se procederá a cancelar el proceso de suspension del alumno @{{ result.fullname }}<br>
                con el número de cuenta @{{ result.account_number }}, desea continuar con la cancelación?</h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete(result)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>