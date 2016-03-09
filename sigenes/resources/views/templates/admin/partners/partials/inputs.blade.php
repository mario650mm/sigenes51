<div class="row">
    <div class="form-group col-lg-6">
        <label>Usuario</label>
        <select name="user_id" class="form-control" ng-model="user_id" required>
            <option value="">@lang('generals.select')</option>
            <option data-ng-repeat="user in users" value="@{{ user.id }}">@{{ user.name }}</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">@lang('partners.name')</label>
            <input id="name" placeholder="{{trans('partners.name')}}" type="text" data-ng-model="partner.name" class="form-control" required>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="firstlastname">@lang('partners.last_name')</label>
            <input id="firstlastname" placeholder="{{trans('partners.last_name')}}" type="text" data-ng-model="partner.firstlastname" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="secondlastname">@lang('partners.s_last_name')</label>
            <input id="secondlastname" placeholder="{{trans('partners.s_last_name')}}" type="text" data-ng-model="partner.secondlastname" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="curp">@lang('partners.curp')</label>
            <input id="curp" placeholder="{{trans('partners.curp')}}" type="text" data-ng-model="partner.curp" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="birthdate">@lang('partners.birthdate')</label>
            <input id="birthdate" placeholder="{{trans('partners.birthdate')}}" type="text" data-ng-model="partner.birthdate" class="form-control">
        </div>
    </div>
    <div class="form-group col-lg-3">
        <label>@lang('partners.sex')</label>
        <select name="sex" class="form-control" ng-model="partner.sex" required>
            <option value="">@lang('generals.select')</option>
            <option value="Masculino">@lang('partners.male')</option>
            <option value="Femenino">@lang('partners.female')</option>
        </select>
    </div>
    <div class="col-lg-5">
        <div class="form-group">
            <label for="email1">@lang('partners.email1')</label>
            <input id="email1" placeholder="{{trans('partners.email1')}}" type="email" data-ng-model="partner.email1" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label for="email2">@lang('partners.email2')</label>
            <input id="email2" placeholder="{{trans('partners.email2')}}" type="email" data-ng-model="partner.email2" class="form-control">
        </div>
    </div>
    <div class="form-group col-lg-3">
        <label>@lang('partners.nationality')</label>
        <select name="nationality" class="form-control" ng-model="partner.nationality" required>
            <option value="">@lang('generals.select')</option>
            <option value="Mexicana">@lang('partners.mexican')</option>
            <option value="Extranjero">@lang('partners.foreign')</option>
        </select>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="telephone">@lang('partners.telephone')</label>
            <input id="telephone" placeholder="{{trans('partners.telephone')}}" type="text" data-ng-model="partner.telephone" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="celphone">@lang('partners.cellphone')</label>
            <input id="celphone" placeholder="{{trans('partners.cellphone')}}" type="text" data-ng-model="partner.celphone" class="form-control">
        </div>
    </div>
    <div class="form-group col-lg-4">
        <label>@lang('partners.marital_status')</label>
        <select name="maritalstatus" class="form-control" ng-model="partner.maritalstatus" required>
            <option value="">@lang('generals.select')</option>
            <option value="Casado">@lang('partners.married')</option>
            <option value="Soltero">@lang('partners.single')</option>
            <option value="Divorciado">@lang('partners.divorced')</option>
            <option value="Viudo">@lang('partners.widower')</option>
        </select>
    </div>
</div>