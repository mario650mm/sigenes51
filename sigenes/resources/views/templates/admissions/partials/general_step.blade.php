{!! trans('admissions.notes_general') !!}
<div class="text-center">
    <form name="pgen" ng-submit="submitForm(pgen.$valid)" novalidate>
        <div class="col-lg-12">
            <div class="form-group col-lg-12" ng-class="{ 'has-error' : pgen.career_id.$invalid && !pgen.career_id.$pristine, 'has-success':pgen.career_id.$valid }">
                <label>{{ trans('admissions.career') }} de interes</label>
                <select ng-change="getStates(applicant.career_id)" name="career_id" class="form-control" ng-model="applicant.career_id" required>
                    <option value="">{{ trans('admissions.select') }}</option>
                    <option data-ng-repeat="career in careers" value="@{{ career.id }}">@{{ career.name }}</option>
                </select>
                <p ng-show="pgen.career_id.$invalid && !pgen.career_id.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.career') ]) }}</p>
            </div>
        </div>
        <div class="col-lg-12">
            <label>
                <input type="checkbox" name="aceptTerminos" ng-model="applicant.aceptTerminos" required> <strong>{{ trans('admissions.policy') }}</strong>
            </label>
            <p ng-show="pgen.aceptTerminos.$invalid && !pgen.aceptTerminos.$pristine" class="help-block text-danger"> {{ trans('validation.required', [ 'attribute' => 'Política de privacidad' ]) }}</p>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-success text-center" data-ng-click="next()" ng-disabled="pgen.$invalid"> {{ trans('admissions.accept') }}</button>
            </div>
        </div>
    </form>
</div>
</div> {{-- No delete this line --}}
