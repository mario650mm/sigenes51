<!-- Datos de reposiciones o solicitudes de constancias-->

<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">
        <div class="col-lg-11">
            <div class="form-group">
                <div class=" radio">
                    <label><input type="radio" name="optradio" data-ng-click="visible()" data-ng-model="applyRecord.record" value="1">{{trans('schoolrecords.record')}}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" data-ng-click="iscredential()" data-ng-model="applyRecord.credential" value="2">{{trans('schoolrecords.credential')}}</label>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">

        <div class="col-lg-6 ">
            <div class="form-group">
                <label for="folio" class="col-lg-3 control-label">{{trans('schoolrecords.folio')}} <!-- de pago -->: </label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" id="folio" placeholder="Folio de pago" data-ng-model="applyRecord.folio" required>
                </div>
            </div>
        </div>

        <div class="col-lg-6" data-ng-show="isRecord"> <!-- data-ng-show="isVisible"-->
            <div class="form-group">
                <label class="col-lg-4 control-label">{{trans('schoolrecords.typerecord')}}:</label>
                <div class="col-lg-8">
                    <div class="col-lg-10">
                        <select class="form-control" data-ng-model="applyRecord.transact_type_id" ng-change="selectchange(applyRecord.transact_type_id)">
                            <option data-ng-repeat="record in recordTypes" value="@{{ record.id }}"> @{{record.name}}  </option>
                        </select> 
                    </div>
                    <div class="col-lg-2"> 
                        <button type="button" class="btn btn-primary" ng-click="showModelPdf(entity)" data-toggle="tooltip" title="Visualización previa de la constancia a tramitar">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
