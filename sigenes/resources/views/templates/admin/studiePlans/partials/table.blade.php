<table class="table table-hover">
    <tr>
        <th>@lang('studieplans.name')</th>
        <th>@lang('studieplans.key')</th>
        <th>@lang('studieplans.is_deepending')</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-dir-paginate="plan in studiePlans | orderBy:sortKey:reverse | filter:searchInput|itemsPerPage:15">
        <td>@{{ plan.name }}</td>
        <td>@{{ plan.key }}</td>
        <td>@{{ plan.is_deepending }}</td>
        <td>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="showPlan(studiePlan)"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="editPlanModal(studiePlan)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="deletePlanModal(studiePlan)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>