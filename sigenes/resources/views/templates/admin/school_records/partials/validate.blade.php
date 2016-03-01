<div class="ui modal" id="validate" > <!-- width: 40% -->
    <i class="close icon"></i>
    <div class="header">
        {{trans('schoolrecords.header')}}
    </div>
    <br>
    <div class="content">
        <div class="row">
            <div data-ng-show="isVisible">
                <div class="col-lg-10 col-xs-offset-1">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="checkbox primary">
                                <label><input type="checkbox" data-ng-model="record.library" >{{trans('schoolrecords.library')}} </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" data-ng-model="record.lab">{{trans('schoolrecords.lab')}}</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" data-ng-model="record.clinic">{{trans('schoolrecords.clinic')}}</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" data-ng-model="record.social_services">{{trans('schoolrecords.social')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-ng-hide="isHiden">
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
            <div class="row" data-ng-show="isHiden">
                <div class=" col-lg-10 col-lg-offset-1 ">
                    <button class="btn btn-primary">
                        <span class="glyphicon glyphicon-download"></span> Download
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="actions" data-ng-hide="isHiden">
        @include('templates.admin.school_records.partials.inputs')
    </div>
</div>