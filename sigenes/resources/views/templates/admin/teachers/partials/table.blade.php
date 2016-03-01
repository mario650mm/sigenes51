<table class="table table-hover">
    <tr>
        <th>@lang('teachers.number_account')</th>
        <th>@lang('teachers.email')</th>
        <th>@lang('teachers.type')</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-ng-repeat="teacher in teachers">
        <td>@{{ teacher.noAccount }}</td>
        <td>@{{ teacher.email }}</td>
        <td>@{{ teacher.type }}</td>
        <td>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="showTeacher(teacher)"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="editTeacherModal(teacher)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="deleteTeacherModal(teacher)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>