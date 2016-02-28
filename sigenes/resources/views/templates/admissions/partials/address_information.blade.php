<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="ainf" ng-submit="submitForm(ainf.$valid)" novalidate>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.street.$invalid && !ainf.street.$pristine , 'has-success':ainf.street.$valid }">
                <label>{{ trans('admissions.street') }}</label>
                <input type="text" name="street" class="form-control" ng-model="applicant.street" required>
                <p ng-show="ainf.street.$invalid && !ainf.street.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.street') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.num_int.$invalid && !ainf.num_int.$pristine , 'has-success':ainf.num_int.$valid }">
                <label>{{ trans('admissions.num_int') }}</label>
                <input type="text" name="num_int" class="form-control" ng-model="applicant.num_int" required>
                <p ng-show="ainf.num_int.$invalid && !ainf.num_int.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.num_int') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.num_ext.$invalid && !ainf.num_ext.$pristine , 'has-success':ainf.num_ext.$valid }">
                <label>{{ trans('admissions.num_ext') }}</label>
                <input type="text" name="num_ext" class="form-control" ng-model="applicant.num_ext" >
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.colony.$invalid && !ainf.colony.$pristine , 'has-success':ainf.colony.$valid }">
                <label>{{ trans('admissions.colony') }}</label>
                <input type="text" name="colony" class="form-control" ng-model="applicant.colony" required>
                <p ng-show="ainf.colony.$invalid && !ainf.colony.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.colony') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.zip.$invalid && !ainf.zip.$pristine , 'has-success':ainf.zip.$valid }">
                <label>{{ trans('admissions.zip') }}</label>
                <input type="text" name="zip" class="form-control" ng-model="applicant.zip" required cp-validate>
                <p ng-show="ainf.zip.$invalid && !ainf.zip.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.zip') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.country_id.$invalid && !ainf.country_id.$pristine, 'has-success':ainf.country_id.$valid }">
                <label>{{ trans('admissions.country') }}</label>
                <select ng-change="getStates(applicant.country_id)" name="country_id" class="form-control" ng-model="applicant.country_id" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option data-ng-repeat="country in countrys" value="@{{ country.id }}">@{{ country.name }}</option>
                </select>
                <p ng-show="ainf.country_id.$invalid && !ainf.country_id.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.country') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.state_id.$invalid && !ainf.state_id.$pristine, 'has-success':ainf.state_id.$valid }">
                <label>{{ trans('admissions.state') }}</label>
                <select ng-change="getCitys(applicant.state_id)" name="state_id" class="form-control" ng-model="applicant.state_id" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option data-ng-repeat="state in states" value="@{{ state.id }}">@{{ state.name }}</option>
                </select>
                <p ng-show="ainf.state_id.$invalid && !ainf.state_id.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.state') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.city_id.$invalid && !ainf.city_id.$pristine, 'has-success':ainf.city_id.$valid }">
                <label>{{ trans('admissions.city') }}</label>
                <select name="city_id" class="form-control" ng-model="applicant.city_id" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option data-ng-repeat="city in citys" value="@{{ city.id }}">@{{ city.name }}</option>
                </select>
                <p ng-show="ainf.city_id.$invalid && !ainf.city_id.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.city') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a class="btn btn-danger pull-right" data-ng-click="back()"> {{ trans('admissions.back') }}</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <button class="btn btn-success pull-left" data-ng-click="next()" ng-disabled="ainf.$invalid"> {{ trans('admissions.next') }}</button>
            </div>
        </div>

    </form>
</div>
