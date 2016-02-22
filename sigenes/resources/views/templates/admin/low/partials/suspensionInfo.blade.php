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
                        <select class="form-control" >
                            <option data-ng-repeat="periodo in periodos" > @{{ periodo.tipo }} </option>
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
                        <input type="text" class="form-control" id="fecha" data-ng-model="dia" placeholder="Fecha de inicio de suspención">
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
                        <textarea class="form-control" rows="5" data-ng-model="motivos" placeholder="Ingrse el motivo de su supención"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
