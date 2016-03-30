<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        @{{ studiePlan.name }}
    </div>
    <div class="content">
        <div class="description">
            <p><i class="fa fa-key"></i>  <strong> @lang('studieplans.key'):</strong>   @{{ studiePlan.key }}</p>
            <p><i class="fa fa-university"></i>   <strong> @lang('studieplans.name'):</strong>   @{{ studiePlan.name }}</p>
        </div>
        <div class="actions">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-6">
                    <a class="btn btn-danger deny"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
                    <a class="btn btn-info" data-ng-click="editPlanModal(studiePlan)"><i class="fa fa-pencil-square-o"></i> @lang('generals.edit')</a>
                </div>
            </div>
        </div>
    </div>
</div>