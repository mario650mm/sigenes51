<!-- Datos de reposiciones o solicitudes de constancias-->
<br>
<div class="row">
    <div class=" col-xs-11 col-xs-offset-3">
        <div class="col-xs-11">
            <div class="form-group">
                <label for="inputEmail" class="col-xs-1 control-label">Folio <!-- de pago -->: </label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Folio de pago" data-ng-model="folio">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class=" col-xs-8 col-xs-offset-3">
        <div class="col-xs-4">
            <div class="form-group">
                <div class=" radio">
                    <label><input type="radio" name="optradio" data-ng-click="visible()" data-ng-model="constan" value="1">Constancias</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" data-ng-click="isVisible = !isVisible" data-ng-model="credent" value="2">Reposición de credenciales</label>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class=" col-xs-11 col-xs-offset-3" data-ng-show="isVisible">
        <div class="col-xs-11">
            <div class="form-group">
                <label class="col-xs-2 control-label">Tipo de constancia:</label>
                <div class="col-xs-4">
                    <select class="form-control" >
                        <option <!-- data-ng-repeat="periodo in periodos" --> >  </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>


