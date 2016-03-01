<table class="table table-hover">
    <tr>
        <th ng-click="sort('name')" width="10%">No. Applicant
            <span class="glyphicon sort-icon" ng-show="sortKey=='id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('name')">Nombre
            <span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('email')">
            Correo
            <span class="glyphicon sort-icon" ng-show="sortKey=='email'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th ng-click="sort('rfc')">
            RFC
            <span class="glyphicon sort-icon" ng-show="sortKey=='rfc'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
        </th>
        <th width="10%">Controllers</th>
    </tr>
    <tr data-dir-paginate="applicant in applicants | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
        <td class="text-center">@{{ applicant.id }}</td>
        <td>@{{ applicant.name }}</td>
        <td>@{{ applicant.email }}</td>
        <td>@{{ applicant.rfc }}</td>
        <td>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="showApplicant(applicant)"><i class="fa fa-eye"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="editUserModal(applicant)"><i class="fa fa-pencil-square-o"></i></a>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <a data-ng-click="deleteUserModal(applicant)"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </td>
    </tr>
</table>