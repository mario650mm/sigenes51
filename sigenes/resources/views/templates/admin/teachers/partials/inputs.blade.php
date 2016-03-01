<div class="row">
    <div class="form-group col-lg-6">
        <label>@lang('teachers.name')</label>
        <select name="partner_id" class="form-control" ng-model="partner_id" required>
            <option value="">Seleccione..</option>
            <option data-ng-repeat="partner in partners" value="@{{ partner.id }}">@{{ partner.name }}</option>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <label>@lang('teachers.type')</label>
        <select name="type" class="form-control" ng-model="role" required>
            <option value="">Seleccione..</option>
            <option data-ng-repeat="teacher in type" value="@{{ teacher.type }}">@{{ teacher.type }}</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="noAccount">@lang('teachers.number_account')</label>
            <input id="noAccount" placeholder="{{trans('teachers.number_account')}}" type="text" data-ng-model="teacher.noAccount" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="email">@lang('teachers.email')</label>
            <input id="email" placeholder="{{trans('teachers.email')}}" type="email" data-ng-model="teacher.email" class="form-control" required>
        </div>
    </div>
</div>
