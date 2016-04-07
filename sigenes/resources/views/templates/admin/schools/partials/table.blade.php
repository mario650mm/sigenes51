<table class="table table-hover">
    <tr>
        <th>@lang('schools.key')</th>
        <th>@lang('schools.name')</th>
        <th>@lang('schools.parent_id')</th>
        <th width="10%">@lang('generals.controllers')</th>
    </tr>
    <tr data-dir-paginate="school in schools | orderBy:sortKey:reverse | filter:searchInput|itemsPerPage:15">
        <td>@{{ school.key }}</td>
        <td>@{{ school.name }}</td>
        <td>@{{ school.parent_id }}</td>
        <td>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="showSchool(school)"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="editSchoolModal(school)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="deleteSchoolModal(school)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>