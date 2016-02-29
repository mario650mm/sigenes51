<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        @{{teacher.noAccount}}
    </div>
    <div class="content">
        <div class="description">
            <p><strong> @lang('teachers.number_account')</strong>   @{{teacher.noAccount}}</p>
        </div>
    </div>
    <div class="actions">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6">
                <a class="btn btn-danger deny"><i class="fa fa-times"></i> @lang('generals.cancel')</a>
                <a class="btn btn-info" data-ng-click="editTeacherModal(teacher)"><i class="fa fa-pencil-square-o"></i> @lang('generals.edit')</a>
            </div>
        </div>
    </div>
</div>