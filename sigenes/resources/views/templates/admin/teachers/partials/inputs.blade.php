<div class="row">
    <div class="form-group col-lg-4">
        <label>@lang('teachers.type')</label>
        <select name="designation_id" class="form-control" ng-model="teacher.designation_id" required>
            <option value="">@lang('generals.select')</option>
            <option data-ng-repeat="teacher in type" value="@{{ teacher.type }}">@{{ teacher.type }}</option>
        </select>
    </div>
</div>