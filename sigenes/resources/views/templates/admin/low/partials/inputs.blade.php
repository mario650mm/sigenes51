<br>
<div class="row">
    <div class="col-lg-4 col-xs-offset-8">
        <div class="form-group">
            <div class="col-lg-6" data-ng-hide="isHiden">
                <button type="button" class="btn btn-primary" id="suspender" data-ng-click="finishsuspension()" >
                	<span class="glyphicon glyphicon-ok"></span> {{trans('low.btnsuspender')}}
                </button>
            </div>
            <div class="col-lg-6" data-ng-show="isHiden">
                <button type="button" class="btn btn-primary" id="suspender" data-ng-click="endsuspen()" >
                	<span class="glyphicon glyphicon-ok"></span> Suspender
                </button>
            </div>
        </div>
    </div>
</div>