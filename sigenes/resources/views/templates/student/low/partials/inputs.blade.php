<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-6 col-lg-6 col-md-6 col-xs-6">
                <button type="button" class="btn btn-primary" id="solicitar" data-ng-show="btnapply" data-ng-click="save(period)">
                	<span class="glyphicon glyphicon-floppy-saved"></span> {{trans('low.apply')}}
                </button>
                <a class="btn btn-primary" id="print" href="{{ url('student/low/pdf') }}" target="_blank" data-ng-show="btnprint">
                	<span class="glyphicon glyphicon-print"></span> {{trans('low.print')}}
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 " data-ng-show="btnfile">
                <div class="col-lg-6 col-md-6 col-xs-6 ">
                    <div class="form-group">
                        <button class="btn btn-primary" ng-click="updateevidence()"> Enviar evidencia</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="form-group">
                        <span class="file-input btn btn-default btn-file" ng-class="{'btn btn-danger': addrecord.records.$invalid, 'btn btn-success': addrecord.records.$valid}">
                            <span ng-show="addrecord.records.$invalid"><i class="fa fa-picture-o"></i> Subir imagen</span>
                            <span ng-show="addrecord.records.$valid"><i class="fa fa-picture-o"></i> Imagen subida</span>
                            <input type="file" name="records" class="col-lg-6 col-md-6 col-xs-6" onload="onLoad" ng-model="records"  base-sixty-four-input required>          
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>