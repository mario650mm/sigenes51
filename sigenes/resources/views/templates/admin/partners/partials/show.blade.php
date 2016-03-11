<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        @{{ partner.name }} @{{partner.firstlastname}}
    </div>
    <div class="content">
        <div class="description">
            <p><i class="fa fa-building"></i>   <strong> @lang('partners.full_name'):</strong>   @{{ partner.name }} @{{partner.firstlastname}}</p>
            <p ng-if="@{{ partner.curp }}">
                <p><i class="fa fa-file-text-o"></i>    <strong> @lang('partners.curp'):</strong>   @{{ partner.curp }}</p>
            </p>
            <p><i class="fa fa-envelope"></i>   <strong>@lang('partners.email1'):</strong>   @{{ partner.email1 }}</p>
            <p ng-if="@{{ partner.email2 }}">
                <p><i class="fa fa-envelope-o"></i> <strong>@lang('partners.email2'):</strong>   @{{ partner.email2 }}</p>
            </p>
            <p ng-if="@{{ partner.telephone }}">
                <p><i class="fa fa-phone"></i> <strong>@lang('partners.telephone'):</strong>   @{{ partner.telephone }}</p>
            </p>
            <p ng-if="@{{ partner.celphone }}">
                <p><i class="fa fa-mobile"></i> <strong>@lang('partners.cellphone'):</strong>   @{{ partner.celphone }}</p>
            </p>
            <p><i class="fa fa-venus-mars"></i> <strong>@lang('partners.sex'):</strong>   @{{ partner.sex }}</p>
            <p><i class="fa fa-language"></i> <strong>@lang('partners.nationality'):</strong>   @{{ partner.nationality }}</p>
            <p><i class="fa fa-venus-double"></i> <strong>@lang('partners.marital_status'):</strong>   @{{ partner.maritalstatus }}</p>
    </div>
    <div class="actions">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6">
                <a class="btn btn-danger deny"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
                <a class="btn btn-info" data-ng-click="editPartnerModal(partner)"><i class="fa fa-pencil-square-o"></i> @lang('generals.edit')</a>
            </div>
        </div>
    </div>
</div>