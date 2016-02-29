<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">@lang('teachers.number_account')</label>
            <input id="name" placeholder="{{trans('teachers.number_account')}}" type="text" data-ng-model="teacher.noAccount" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="rfc">@lang('teachers.email')</label>
            <input id="rfc" placeholder="{{trans('teachers.email')}}" type="text" data-ng-model="teacher.email" class="form-control" required>
        </div>
    </div>
</div>
