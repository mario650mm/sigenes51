<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="pinf" ng-submit="submitForm(pinf.$valid)" novalidate>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.name.$invalid && !pinf.name.$pristine , 'has-success':pinf.name.$valid }">
                <label>{{ trans('admissions.name') }}</label>
                <input type="text" name="name" class="form-control" ng-model="applicant.name" required>
                <p ng-show="pinf.name.$invalid && !pinf.name.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.name') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.firstlastname.$invalid && !pinf.firstlastname.$pristine, 'has-success':pinf.firstlastname.$valid }">
                <label>{{ trans('admissions.firstlastname') }}</label>
                <input type="text" name="firstlastname" class="form-control" ng-model="applicant.firstlastname" required>
                <p ng-show="pinf.firstlastname.$invalid && !pinf.firstlastname.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.firstlastname') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.secondlastname.$invalid && !pinf.secondlastname.$pristine , 'has-success':pinf.secondlastname.$valid}">
                <label>{{ trans('admissions.secondlastname') }}</label>
                <input type="text" name="secondlastname" class="form-control" ng-model="applicant.secondlastname" required>
                <p ng-show="pinf.secondlastname.$invalid && !pinf.secondlastname.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.secondlastname') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.nationality.$invalid && !pinf.nationality.$pristine, 'has-success':pinf.nationality.$valid }">
                <label>{{ trans('admissions.nationality') }}</label>
                <select name="nationality" class="form-control" ng-model="applicant.nationality" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option value="Mexicana">{{ trans('admissions.mexican') }}</option>
                    <option value="Extranjero">{{ trans('admissions.foreigner') }}</option>
                </select>
                <p ng-show="pinf.nationality.$invalid && !pinf.nationality.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.nationality') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.curp.$invalid && !pinf.curp.$pristine, 'has-success':pinf.curp.$valid }">
                <label>{{ trans('admissions.curp') }}</label>
                <input type="text" name="curp" class="form-control" ng-model="applicant.curp" required curp-validate>
                <p ng-show="pinf.curp.$invalid && !pinf.curp.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.curp') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.rfc.$invalid && !pinf.rfc.$pristine, 'has-success':pinf.rfc.$valid }">
                <label>{{ trans('admissions.rfc') }}</label>
                <input type="text" name="rfc" class="form-control" ng-model="applicant.rfc" required rfc-validate>
                <p ng-show="pinf.rfc.$invalid && !pinf.rfc.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.rfc') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.birthdate.$invalid && !pinf.birthdate.$pristine, 'has-success':pinf.birthdate.$valid }">
                <label>{{ trans('admissions.birthdate') }}</label>
                <input type="date" name="birthdate" class="form-control" ng-model="applicant.birthdate" required>
                <p ng-show="pinf.birthdate.$invalid && !pinf.birthdate.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.birthdate') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.sex.$invalid && !pinf.sex.$pristine, 'has-success':pinf.sex.$valid }">
                <label>{{ trans('admissions.sex') }}</label>
                <select name="sex" class="form-control" ng-model="applicant.sex" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option value="Masculino">{{ trans('admissions.masculine') }}</option>
                    <option value="Femenino">{{ trans('admissions.female') }}</option>
                </select>
                <p ng-show="pinf.sex.$invalid && !pinf.sex.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.sex') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.maritalstatus.$invalid && !pinf.maritalstatus.$pristine, 'has-success':pinf.maritalstatus.$valid }">
                <label>{{ trans('admissions.maritalstatus') }}</label>
                <select name="maritalstatus" class="form-control" ng-model="applicant.maritalstatus" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option value="Soltero">{{ trans('admissions.single') }}</option>
                    <option value="Casado">{{ trans('admissions.married') }}</option>
                    <option value="Divorciado">{{ trans('admissions.divorced') }}</option>
                    <option value="Viudo">{{ trans('admissions.widower') }}</option>
                </select>
                <p ng-show="pinf.maritalstatus.$invalid && !pinf.maritalstatus.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.maritalstatus') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.account_number.$invalid && !pinf.account_number.$pristine , 'has-success':pinf.account_number.$valid }">
                <label>{{ trans('admissions.account_number') }}</label>
                <input type="text" name="account_number" class="form-control" ng-model="applicant.account_number" account-validate>
                <p ng-show="pinf.account_number.$invalid && !pinf.account_number.$pristine" class="help-block">{{ trans('validation.digits', [ 'attribute' => trans('admissions.account_number'), 'digits' => 9 ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.nss.$invalid && !pinf.nss.$pristine , 'has-success':pinf.nss.$valid }">
                <label>{{ trans('admissions.nss') }}</label>
                <input type="text" name="nss" class="form-control" ng-model="applicant.nss" nss-validate>
                <p ng-show="pinf.nss.$invalid && !pinf.nss.$pristine" class="help-block">{{ trans('validation.digits', [ 'attribute' => trans('admissions.nss'), 'digits' => 11 ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.email.$invalid && !pinf.email.$pristine , 'has-success':pinf.email.$valid }">
                <label>{{ trans('admissions.email') }}</label>
                <input type="text" name="email" class="form-control" ng-model="applicant.email" email-validate required>
                <p ng-show="pinf.email.$invalid && !pinf.email.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.email') ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.telephone.$invalid && !pinf.telephone.$pristine , 'has-success':pinf.telephone.$valid }">
                <label>{{ trans('admissions.telephone') }}</label>
                <input type="text" name="telephone" class="form-control" ng-model="applicant.telephone" phone-validate required>
                <p ng-show="pinf.telephone.$invalid && !pinf.telephone.$pristine" class="help-block">{{ trans('validation.digits', [ 'attribute' => trans('admissions.telephone'), 'digits' => 10 ]) }}</p>
            </div>
            <div class="form-group col-lg-4" ng-class="{ 'has-error' : pinf.celphone.$invalid && !pinf.celphone.$pristine , 'has-success':pinf.celphone.$valid }">
                <label>{{ trans('admissions.celphone') }}</label>
                <input type="text" name="celphone" class="form-control" ng-model="applicant.celphone" phone-validate required>
                <p ng-show="pinf.celphone.$invalid && !pinf.celphone.$pristine" class="help-block">{{ trans('validation.digits', [ 'attribute' => trans('admissions.celphone'), 'digits' => 10 ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a class="btn btn-danger pull-right" data-ng-click="back()"> {{ trans('admissions.back') }}</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <button class="btn btn-success pull-left" data-ng-click="next()" ng-disabled="pinf.$invalid"> {{ trans('admissions.next') }}</button>
            </div>
        </div>

    </form>
</div>
