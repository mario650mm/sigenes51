<div class="ui modal" id="show" style="height: 80%;">
    <i class="close icon"></i>
    <div class="header">
        {{trans('low.header')}}
    </div>
    @include('templates.admin.low.partials.suspensionInfo')
    <br>
    <div class="row">
        <div class="col-lg-10 col-xs-offset-1">
            <div class="col-lg-12">

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
        </div>
    </div>
    <div class="row">
        <div class=" col-lg-10 col-lg-offset-1 ">
            
        <input class="form-control" 
        type="file" 
        ng-model="file" 
        name="inputFile" 
        base-sixty-four-input 
        required 
        maxsize="500" accept="image/*">
        
            
        </div>
    </div>
    @include('templates.admin.low.partials.inputs')
</div>