<div class="ui modal" id="show">
    <i class="close icon"></i>
    <div class="header">
        @{{teacher.noAccount}}
    </div>
    <div class="content">
        <div class="description">
            <p><i class="fa fa-building"></i>   <strong> @lang('teachers.full_name'):</strong>  @{{ teacher.name }} @{{ teacher.firstlastname }}</p>
            <p><i class="fa fa-sort-amount-asc"></i>    <strong> @lang('teachers.number_account'):</strong>   @{{teacher.noAccount}}</p>
            <span ng-if="@{{ teacher.curp }}">
                <p><i class="fa fa-file-text-o"></i>    <strong> @lang('teachers.curp'):</strong>   @{{teacher.curp}}</p>
            </span>
            <p><i class="fa fa-envelope"></i>   <strong>@lang('teachers.email1'):</strong>   @{{teacher.email1}}</p>
            <span ng-if="@{{ teacher.email2 }}">
                <p><i class="fa fa-envelope-o"></i> <strong>@lang('teachers.email2'):</strong>   @{{teacher.email2}}</p>
            </span>
            <p><i class="fa fa-users"></i>  <strong> @lang('teachers.type'):</strong>   @{{teacher.type}}</p>
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