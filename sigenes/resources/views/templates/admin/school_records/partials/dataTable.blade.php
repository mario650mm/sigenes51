
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-bordered">
            <thead>
            <tr>
               
                <th>{{trans('schoolrecords.name')}}</th>
                <th>
                    {{trans('schoolrecords.account')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.tramint')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.status')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.date')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.career')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.controller')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr data-dir-paginate="result in showResult | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:2">
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.fullname }}</td>
                <td>Odontología</td>
                <td>
                    <div align="center">
                        <a><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Validar suspensición"></span></a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar tramite"></span></a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
