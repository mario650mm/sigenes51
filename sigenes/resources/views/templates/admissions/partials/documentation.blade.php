<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <form name="dinf" ng-submit="submitForm(dinf.$valid)" novalidate>
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.official_identification.$invalid, 'list-group-item-success':dinf.official_identification.$valid }">
                    <h1>{{ trans('admissions.official_identification') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.official_identification.$invalid , 'btn-success':dinf.official_identification.$valid }">
                        <span ng-show="dinf.official_identification.$invalid">Upload File</span>
                        <span ng-show="dinf.official_identification.$valid">Uploaded file</span>
                        <input type="file" name="official_identification" onload="onLoad" ng-model="applicant.official_identification" accept=".pdf"  base-sixty-four-input required>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.birth_certificate.$invalid, 'list-group-item-success':dinf.birth_certificate.$valid }">
                    <h1>{{ trans('admissions.birth_certificate') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.birth_certificate.$invalid , 'btn-success':dinf.birth_certificate.$valid }">
                        <span ng-show="dinf.birth_certificate.$invalid">Upload File</span>
                        <span ng-show="dinf.birth_certificate.$valid">Uploaded file</span>
                        <input type="file" name="birth_certificate" onload="onLoad" ng-model="applicant.birth_certificate" accept=".pdf"  base-sixty-four-input required>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.high_school_certificate.$invalid, 'list-group-item-success':dinf.high_school_certificate.$valid }">
                    <h1>{{ trans('admissions.high_school_certificate') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.high_school_certificate.$invalid , 'btn-success':dinf.high_school_certificate.$valid }">
                        <span ng-show="dinf.high_school_certificate.$invalid">Upload File</span>
                        <span ng-show="dinf.high_school_certificate.$valid">Uploaded file</span>
                        <input type="file" name="high_school_certificate" onload="onLoad" ng-model="applicant.high_school_certificate" accept=".pdf"  base-sixty-four-input required>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.curp_file.$invalid, 'list-group-item-success':dinf.curp_file.$valid }">
                    <h1>{{ trans('admissions.curp') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.curp_file.$invalid , 'btn-success':dinf.curp_file.$valid }">
                        <span ng-show="dinf.curp_file.$invalid">Upload File</span>
                        <span ng-show="dinf.curp_file.$valid">Uploaded file</span>
                        <input type="file" name="curp_file" onload="onLoad" ng-model="applicant.curp_file" accept=".pdf"  base-sixty-four-input required>
                    </span>
                </li>
            </ul>
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

