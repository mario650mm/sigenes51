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
            <div class="col-lg-6 col-md-6 col-xs-6 ">
                <div class="form-group" data-ng-show="btnfile">
                    <button class="btn btn-primary" ng-click="updateevidence()"> Enviar evidencia</button>
                </div>
        </div>
        </div>
    </div>
</div>