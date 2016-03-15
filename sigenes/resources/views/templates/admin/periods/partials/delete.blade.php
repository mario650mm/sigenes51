<div class="ui basic modal" id="deleteperiod">
    <div class="header">
        Eliminación de periodos
    </div>
    <div class="image content">
        <div class="image">
            <i class="fa fa-calendar-times-o fa-5x fa-spin"></i>
        </div>
        <div class="description">
            <p>
                <h3>Se procederá a cancelar el periodo @{{ period.month_init}} - @{{ period.month_end}} @{{ period.year}}.<br>
                Desea continuar con la cancelación?</h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete(period.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>