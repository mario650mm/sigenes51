<!-- Datos de reposiciones o solicitudes de constancias-->

<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">
        <div class="col-lg-11">
            <div class="form-group">
                <div class=" radio">
                    <label><input type="radio" name="optradio" data-ng-click="visible()" data-ng-model="applyRecord.record" value="1">Constancias</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" data-ng-click="iscredential()" data-ng-model="applyRecord.credential" value="2">Reposición de credenciales</label>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">

        <div class="col-lg-6 ">
            <div class="form-group">
                <label for="folio" class="col-lg-3 control-label">Folio <!-- de pago -->: </label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" id="folio" placeholder="Folio de pago" data-ng-model="applyRecord.folio" required>
                </div>
            </div>
        </div>

        <div class="col-lg-6" data-ng-show="isRecord"> <!-- data-ng-show="isVisible"-->
            <div class="form-group">
                <label class="col-lg-4 control-label">Tipo de constancia:</label>
                <div class="col-lg-8">
                    <select class="form-control" data-ng-model="applyRecord.transact_type_id" >
                        <!-- <option value="-1">Seleccione el tipo de constancia</option> -->
                        <option data-ng-repeat="record in recordTypes" value="@{{ record.id }}"> @{{ (record.id != 7 ?  record.name : '')}}  </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>


