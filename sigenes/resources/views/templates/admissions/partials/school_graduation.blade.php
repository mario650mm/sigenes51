<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="sinf" ng-submit="submitForm(sinf.$valid)" novalidate>
        <div class="col-lg-12">
            <div class="form-group col-lg-6" ng-class="{ 'has-error' : sinf.school_name.$invalid && !sinf.school_name.$pristine , 'has-success':sinf.school_name.$valid }">
                <label>{{ trans('admissions.school_name') }}</label>
                <input type="text" name="school_name" class="form-control" ng-model="applicant.school_name" required>
                <p ng-show="sinf.school_name.$invalid && !sinf.school_name.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.school_name') ]) }}</p>
            </div>
            <div class="form-group col-lg-6" ng-class="{ 'has-error' : sinf.specialty.$invalid && !sinf.specialty.$pristine , 'has-success':sinf.specialty.$valid }">
                <label>{{ trans('admissions.specialty') }}</label>
                <input type="text" name="specialty" class="form-control" ng-model="applicant.specialty" required>
                <p ng-show="sinf.specialty.$invalid && !sinf.specialty.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.specialty') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-3" ng-class="{ 'has-error' : sinf.month_start.$invalid && !sinf.month_start.$pristine , 'has-success':sinf.month_start.$valid }">
                <label>{{ trans('admissions.month_start') }}</label>
                <select name="month_start" class="form-control" ng-model="applicant.month_start" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option value="Enero">{{ trans('months.january') }}</option>
                    <option value="Febrero">{{ trans('months.february') }}</option>
                    <option value="Marzo">{{ trans('months.march') }}</option>
                    <option value="Abril">{{ trans('months.april') }}</option>
                    <option value="Mayo">{{ trans('months.may') }}</option>
                    <option value="Junio">{{ trans('months.june') }}</option>
                    <option value="Julio">{{ trans('months.july') }}</option>
                    <option value="Agosto">{{ trans('months.august') }}</option>
                    <option value="Septiembre">{{ trans('months.september') }}</option>
                    <option value="Octubre">{{ trans('months.october') }}</option>
                    <option value="Noviembre">{{ trans('months.november') }}</option>
                    <option value="Diciembre">{{ trans('months.december') }}</option>
                </select>
                <p ng-show="sinf.month_start.$invalid && !sinf.month_start.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.month_start') ]) }}</p>
            </div>
            <div class="form-group col-lg-3" ng-class="{ 'has-error' : sinf.year_start.$invalid && !sinf.year_start.$pristine , 'has-success':sinf.year_start.$valid }">
                <label>{{ trans('admissions.year_start') }}</label>
                <input type="text" name="year_start" class="form-control" ng-model="applicant.year_start" required anio-validate>
                <p ng-show="sinf.year_start.$invalid && !sinf.year_start.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.year_start') ]) }}</p>
            </div>
            <div class="form-group col-lg-3" ng-class="{ 'has-error' : sinf.month_end.$invalid && !sinf.month_end.$pristine , 'has-success':sinf.month_end.$valid }">
                <label>{{ trans('admissions.month_end') }}</label>
                <select name="month_end" class="form-control" ng-model="applicant.month_end" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option value="Enero">{{ trans('months.january') }}</option>
                    <option value="Febrero">{{ trans('months.february') }}</option>
                    <option value="Marzo">{{ trans('months.march') }}</option>
                    <option value="Abril">{{ trans('months.april') }}</option>
                    <option value="Mayo">{{ trans('months.may') }}</option>
                    <option value="Junio">{{ trans('months.june') }}</option>
                    <option value="Julio">{{ trans('months.july') }}</option>
                    <option value="Agosto">{{ trans('months.august') }}</option>
                    <option value="Septiembre">{{ trans('months.september') }}</option>
                    <option value="Octubre">{{ trans('months.october') }}</option>
                    <option value="Noviembre">{{ trans('months.november') }}</option>
                    <option value="Diciembre">{{ trans('months.december') }}</option>
                </select>
                <p ng-show="sinf.month_end.$invalid && !sinf.month_end.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.month_end') ]) }}</p>
            </div>
            <div class="form-group col-lg-3" ng-class="{ 'has-error' : sinf.year_end.$invalid && !sinf.year_end.$pristine , 'has-success':sinf.year_end.$valid }">
                <label>{{ trans('admissions.year_end') }}</label>
                <input type="text" name="year_end" class="form-control" ng-model="applicant.year_end" required anio-validate>
                <p ng-show="sinf.year_end.$invalid && !sinf.year_end.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.year_end') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : sinf.average.$invalid && !sinf.average.$pristine , 'has-success':sinf.average.$valid }">
                <label>{{ trans('admissions.average') }}</label>
                <input type="text" name="average" class="form-control" ng-model="applicant.average" required decimal-validate>
                <p ng-show="sinf.average.$invalid && !sinf.average.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.average') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a class="btn btn-danger pull-right" data-ng-click="back()"> {{ trans('admissions.back') }}</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <button class="btn btn-success pull-left" data-ng-click="next()" ng-disabled="sinf.$invalid"> {{ trans('admissions.next') }}</button>
            </div>
        </div>
    </form>
</div>
