<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">@lang('studieplans.name')</label>
            <input id="name" placeholder="{{trans('studieplans.name')}}" type="text" data-ng-model="studiePlan.name" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="key">@lang('studieplans.key')</label>
            <input id="key" placeholder="{{trans('studieplans.key')}}" type="number" data-ng-model="studiePlan.key" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="is_deepending">@lang('studieplans.is_deepending')</label>
            </br>
            <input id="is_deepending" placeholder="{{trans('studieplans.is_deepending')}}" type="checkbox" data-ng-model="studiePlan.is_deepending">
        </div>
    </div>
</div>