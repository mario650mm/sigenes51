<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="dinf" ng-submit="submitForm(dinf.$valid)" novalidate>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : ainf.street.$invalid && !ainf.street.$pristine , 'has-success':ainf.street.$valid }">
                <label>{{ trans('admissions.street') }}</label>
                <input type="text" name="street" class="form-control" ng-model="applicant.street" required>
                <p ng-show="ainf.street.$invalid && !ainf.street.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.street') ]) }}</p>
            </div>
            {{--<span class="btn btn-warning btn-file">
                Upload File <input type="file" ng-model="myfile" accept=".pdf"  base-sixty-four-input>
            </span>--}}
        </div>
        <div class="col-lg-12"></div>
        <div class="col-lg-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a class="btn btn-danger pull-right" data-ng-click="back()"> {{ trans('admissions.back') }}</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a class="btn btn-info  pull-left" ng-disabled="dinf.$invalid" data-ng-click="saveApplicant(applicant)"> {{ trans('admissions.register') }}</a>
        </div>

    </form>
</div>

