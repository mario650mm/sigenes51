<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        {{trans('low.validations')}}
    </div>
    <div class="content">
        @include('templates.admin.low.partials.suspensionInfo')
        <br>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 col-xs-offset-2">
                    <div class="form-group">
                        <div class="checkbox primary">
                            <label><input type="checkbox" data-ng-model="suspend.library" >{{trans('low.library')}}</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" data-ng-model="suspend.lab">{{trans('low.lab')}}</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" data-ng-model="suspend.clinic">{{trans('low.clinic')}}</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" data-ng-model="suspend.social_services">{{trans('low.social')}}</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-offset-1">
                    <a ng-click="showimage()"><img class="img-responsive" ng-src="@{{imageMIME(suspend.evidence)}}" alt="Imagen de evidencia" data-toggle="tooltip" title="Si quiere ver la imagen mas grande de clic sobreesta" /></a>
                </div> 
            </div>
        </div>
    </div>
    <div class="actions">
        @include('templates.admin.low.partials.inputs')
    </div>
</div>