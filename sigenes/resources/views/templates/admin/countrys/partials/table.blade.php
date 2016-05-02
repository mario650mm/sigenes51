<table class="table table-hover">
    <tr>
        <th>código</th>
        <th>Nombre</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-dir-paginate="country in countrys | orderBy:sortKey:reverse | filter:searchInput|itemsPerPage:15">
        <td>@{{ country.code }}</td>
        <td>@{{ country.name }}</td>
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