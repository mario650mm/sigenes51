<div class="row">
    <div class="form-group col-lg-4">
        <label>@lang('teachers.type')</label>
        <select name="designation_id" class="form-control" ng-model="teacher.designation_id" required>
            <option value="">@lang('generals.select')</option>
            <option data-ng-repeat="designation in designations" value="@{{ designation.id }}"> @{{ designation.name }}</option>
        </select>
    </div>
</div>