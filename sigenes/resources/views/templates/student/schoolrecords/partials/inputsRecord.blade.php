<div class="row">
    <div class="col-lg-12 col-lg-offset-1">
        <div class="form-group">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" id="solicitar" data-ng-click="save()" data-ng-show="btnapply">
                	<span class="glyphicon glyphicon-floppy-saved"></span> {{trans('schoolrecords.apply')}}
                </button>
                <a class="btn btn-primary" id="print" href="{{ url('student/credential') }}" target="_blank" data-ng-show="btnprint">
                    <span class="glyphicon glyphicon-print"></span> {{trans('schoolrecords.print')}}
                </a>
            </div>
        </div>
    </div>
</div>