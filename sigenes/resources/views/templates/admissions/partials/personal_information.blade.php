<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="pinf" ng-submit="submitForm(pinf.$valid)" novalidate>
        <div class="col-lg-12">
            <!-- NAME -->
            <div class="form-group col-lg-6" ng-class="{ 'has-error' : pinf.name.$invalid && !pinf.name.$pristine }">
                <label>Name</label>
                <input type="text" name="name" class="form-control" ng-model="applicant.name" required>
                <p ng-show="pinf.name.$invalid && !pinf.name.$pristine" class="help-block">{{ trans('validation.required', [ 'attribute' => trans('admissions.name') ]) }}</p>
            </div>

            <!-- USERNAME -->
            <div class="form-group col-lg-6" ng-class="{ 'has-error' : pinf.username.$invalid && !pinf.username.$pristine }">
                <label>Username</label>
                <input type="text" name="username" class="form-control" ng-model="applicant.username" ng-minlength="3" ng-maxlength="8">
                <p ng-show="pinf.username.$error.minlength" class="help-block">Username is too short.</p>
                <p ng-show="pinf.username.$error.maxlength" class="help-block">Username is too long.</p>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- EMAIL -->
            <div class="form-group col-lg-6" ng-class="{ 'has-error' : pinf.email.$invalid && !pinf.email.$pristine , 'has-success':pinf.email.$valid}">
                <label>Email</label>
                <input type="text" name="email" class="form-control" ng-model="applicant.email" mail-validate>
                <p ng-show="pinf.email.$invalid && !pinf.email.$pristine" class="help-block">Enter a valid email.</p>
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
