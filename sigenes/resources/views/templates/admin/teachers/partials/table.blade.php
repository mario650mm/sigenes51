<table class="table table-hover">
    <tr>
        <th>@lang('teachers.full_name')</th>
        <th>@lang('teachers.curp')</th>
        <th>@lang('teachers.email1')</th>
        <th>@lang('teachers.email2')</th>
        <th>@lang('teachers.type')</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-dir-paginate="teacher in teachers | orderBy:sortKey:reverse | filter:searchInput|itemsPerPage:15">
        <td>@{{ teacher.name }} @{{ teacher.firstlastname }}</td>
        <td>@{{ teacher.curp }}</td>
        <td>@{{ teacher.email1 }}</td>
        <td>@{{ teacher.email2 }}</td>
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