<div class="row">
    <div class="form-group col-lg-6">
        <label>@lang('teachers.name')</label>
        <select name="partner_id" class="form-control" ng-model="partner_id" required>
            <option value="">@lang('generals.select')</option>
            <option data-ng-repeat="partner in partners" value="@{{ partner.id }}">@{{ partner.name }}</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>@lang('teachers.type')</label>
        <select name="type" class="form-control" ng-model="role" required>
            <option value="">@lang('generals.select')</option>
            <option data-ng-repeat="teacher in type" value="@{{ teacher.type }}">@{{ teacher.type }}</option>
        </select>
    </div>
</div>