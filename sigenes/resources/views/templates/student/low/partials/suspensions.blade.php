<!-- registro de suspención y motivos-->

<form role="form" name="addrecord">
<br>
    <div class="row">
        <div class=" col-lg-10 col-lg-offset-1">

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">{{trans('low.period')}}: </label>
                    <div class="col-lg-10">
                        <select class="form-control" ng-model="period_ids" required>
                            <option data-ng-repeat="period in periods" value="@{{ period.id }}" > @{{ period.title }} </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">{{trans('low.day')}}: </label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="fecha" data-ng-model="suspen.date_init" placeholder="Fecha de inicio de suspención" readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="row">
        <div class=" col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-1 control-label">{{trans('low.reason')}}: </label>
                    <div class="col-lg-11">
                        <textarea class="form-control" rows="5" data-ng-model="reason" placeholder="Ingrse el motivo de su supención" ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row" data-ng-show="btnfile">
        <div class="col-lg-3 col-md-3 col-xs-3 col-lg-offset-3 col-md-offset-3 col-xs-offset-3">
            <div class="form-group">
                <span class="file-input btn btn-default btn-file" ng-class="{'btn btn-danger': addrecord.records.$invalid, 'btn btn-success': addrecord.records.$valid}">
                    <span ng-show="addrecord.records.$invalid"><i class="fa fa-picture-o"></i> Subir imagen</span>
                    <span ng-show="addrecord.records.$valid"><i class="fa fa-picture-o"></i> Imagen subida</span>
                    <input type="file" name="records" class="col-lg-6 col-md-6 col-xs-6" onload="onLoad" ng-model="records" accept=".jpeg, .png"  base-sixty-four-input required>          
                </span>
            </div>
        </div>
        
    </div>
</form>
