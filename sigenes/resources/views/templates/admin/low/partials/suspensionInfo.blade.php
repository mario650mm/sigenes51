<!-- registro de suspención y motivos-->
<br>
<form role="form">
    <br>
    <div class="row">
        <div class=" col-lg-10 col-lg-offset-1">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name_period" class="col-lg-2 control-label">{{trans('low.period')}}: </label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="name_period" data-ng-model="entity.name_period" readOnly>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="date_init" class="col-lg-2 control-label">{{trans('low.day')}}: </label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="date_init" data-ng-model="entity.date_init" readOnly>
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
                    <label for="reason" class="col-lg-2 control-label">{{trans('low.reason')}}: </label>
                    <div class="col-lg-8">
                        <textarea class="form-control" id="reason" rows="5" data-ng-model="entity.reason" readOnly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
