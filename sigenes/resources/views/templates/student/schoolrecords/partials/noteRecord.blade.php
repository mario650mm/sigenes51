<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-danger" >
            <div class="panel-heading" >
                <span class="glyphicon glyphicon-chevron-down" data-ng-click="change()"></span>
                <b>* {{trans('schoolrecords.note')}}</b>
            </div>
            <div class="panel-body" data-ng-show="isViewNote">
                <p align="justify" >
                    {{trans('schoolrecords.body_note')}}
                </p>
            </div>
        </div>
    </div>
</div>