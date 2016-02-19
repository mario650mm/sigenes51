<!-- registro de suspención y motivos-->
<br>
<form role="form">
<br>
    <div class="row">
        <div class=" col-xs-11 col-xs-offset-3">
            <div class="col-xs-11">
                <div class="form-group">
                    <label for="inputEmail" class="col-xs-1 control-label">Periodo: </label>
                    <div class="col-xs-6">
                        <select class="form-control" ng-model="period_ids">
                            <option value="-1" > Seleccione periodo... </option>
                            <option data-ng-repeat="period in periods" value="@{{ period.id }}" > @{{ period.title }} </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class=" col-xs-11 col-xs-offset-3">
            <div class="col-xs-11">
                <div class="form-group">
                    <label for="inputEmail" class="col-xs-1 control-label">Dia: </label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="fecha" data-ng-model="suspen.date_init" placeholder="Fecha de inicio de suspención" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class=" col-xs-11 col-xs-offset-3">
            <div class="col-xs-11">
                <div class="form-group">
                    <label for="inputEmail" class="col-xs-1 control-label">Motivos: </label>
                    <div class="col-xs-6">
                        <textarea class="form-control" rows="5" data-ng-model="reason" placeholder="Ingrse el motivo de su supención"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
