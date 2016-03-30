<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <label for="key">@lang('schools.key')</label>
            <input id="key" placeholder="{{trans('schools.key')}}" type="number" data-ng-model="school.key" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">@lang('schools.name')</label>
            <input id="name" placeholder="{{trans('schools.name')}}" type="text" data-ng-model="school.name" class="form-control" required>
        </div>
    </div>
</div>