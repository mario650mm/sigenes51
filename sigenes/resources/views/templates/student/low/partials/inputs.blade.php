<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" id="solicitar" data-ng-show="btnapply" data-ng-click="save(period)">
                	<span class="glyphicon glyphicon-floppy-saved"></span> {{trans('low.apply')}}
                </button>
                <a class="btn btn-primary" id="print" href="{{ url('student/low/pdf') }}" target="_blank" data-ng-show="btnprint">
                	<span class="glyphicon glyphicon-print"></span> {{trans('low.print')}}
                </a>
            </div>
        </div>
    </div>
</div>