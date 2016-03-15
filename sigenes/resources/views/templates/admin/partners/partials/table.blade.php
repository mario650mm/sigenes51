<table class="table table-hover">
    <tr>
        <th>@lang('partners.full_name')</th>
        <th>@lang('partners.curp')</th>
        <th>@lang('partners.email1')</th>
        <th>@lang('partners.email2')</th>
        <th>@lang('partners.sex')</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-dir-paginate="partner in partners | orderBy:sortKey:reverse | filter:searchInput|itemsPerPage:15">
        <td>@{{ partner.name }} @{{partner.firstlastname}}</td>
        <td>@{{ partner.curp }}</td>
        <td>@{{ partner.email1 }}</td>
        <td>@{{ partner.email2 }}</td>
        <td>@{{ partner.sex }}</td>
        <td>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="showPartner(partner)"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="editPartnerModal(partner)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="deletePartnerModal(partner)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>